<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Experience;
use Symfony\Component\HttpFoundation\Response;
class ExperiencesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $model;

    public function __construct(Experience $experience)
    {
        $this->model = $experience;
    }

    public function getAll()
    {
        try {
            $experiences = $this->model->all();
            if (count($experiences)>0) {
                return response()->json($experiences, Response::HTTP_OK);
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
            $experience = $this->model->find($id);
            return response()->json($experience, Response::HTTP_OK);
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }

    public function store(Request $request)
    {
        try {
            $experience = $this->model->create($request->all());
            return response()->json($experience, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function update($id, Request $request)
    {
        try {
            $experience = $this->model->find($id)
                ->update($request->all());
            return response()->json($experience, Response::HTTP_OK);
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function destroy($id, Request $request)
    {
        try {
            $experience = $this->model->find($id)
                ->delete();
            return response()->json(null, Response::HTTP_NO_CONTENT);
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
