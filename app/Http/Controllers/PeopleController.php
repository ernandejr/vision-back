<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Contact;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
use Symfony\Component\HttpFoundation\Response;
class PeopleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $model;
    public function __construct(Person $person)
    {
        $this->model = $person;
    }

    public function getAll()
    {
        try {
            $people = $this->model->all();
            if (count($people)) {
                return response()->json($people, Response::HTTP_OK);
            }else{
                return response()->json([], Response::HTTP_OK);
            }
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }

    public function get($id)
    {
        try {
            $person = $this->find($id);
            return response()->json($person, Response::HTTP_OK);
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }

    public function getProfile($id)
    {
        try {
            // $person = $this->model->with('contacts', 'educations', 'skills', 'experiences')->find($id);
            $person = $this->model->with('contacts', 'skills')->with(['experiences' => function($query){
              $query->selectRaw(
                'person_id,
                name,
                description,
                concat(date_format(date_start,"%M %Y")," - ",date_format(date_end,"%M %Y")) 
                as date'
              );
           }])->with(['educations' => function($query){
              $query->selectRaw(
                'person_id,
                name,
                description,
                concat(date_format(date_start,"%M %Y")," - ",date_format(date_end,"%M %Y")) 
                as date'
              );
           }])
          ->find($id);
          // echo $person;
            return response()->json($person, Response::HTTP_OK);
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }    

    public function store(Request $request)
    {
        try {
            $person = $this->model->create($request->all());
            return response()->json($person, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function update($id, Request $request)
    {
        try {
            $person = $this->model->find($id)
                ->update($request->all());
            return response()->json($person, Response::HTTP_OK);
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function destroy($id, Request $request)
    {
        try {
            $person = $this->model->find($id)
                ->delete();
            return response()->json(null, Response::HTTP_NO_CONTENT);
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
