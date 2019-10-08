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

    /**
     * Retornar todas pessoas
     *
     * @group Pessoa
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     */
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

    /**
     * Retornar uma pessoa expecifica
     *
     * @group Pessoa
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     */
    public function get($id)
    {
        try {
            $person = $this->model->find($id);
            return response()->json($person, Response::HTTP_OK);
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }
    /**
     * Retornar uma perfil expecifico
     *
     * @group Pessoa
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     *@response 200 {
    *"profile": {
    *"name": "Brian Walker",
    *"image": "https://github.com/b2w-marketplace/code-challenge/raw/master/files/avatar-dev.png",
    *"profession": "Web Developer",
    *"description": "27-year old web developer fromt Colorado Springs with 5+ years of work experience in various fields",
    *"contact": {
    *"tel": "123-456-7890",
    *"cel": "012-345-6789",
    *"address": "1490 General Woods. Colorado Springs",
    *"website": "brianwalker.co",
    *"mail": "mail@brianwalker.co"
    *},
    *"skills": [
    *{
    *"name": "Front End",
    *"value": "80%"
    *},
    *{
    *"name": "Back End",
    *"value": "90%"
    *},
    *{
    *"name": "Writing",
    *"value": "75%"
    *}
    *],
    *"experience": [
    *{
    *"name": "Front End Developer @ HillSong",
    *"date": "January 2014",                
    *"description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's *standard dummy text since the 1500s, when an unknown printer took a galley."
    *},
    *{
    *"name": "PHP Developer @ Creative Wizards",
    *"date": "March 2012 - December 2013",
    *"description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley."
    *},
    *{
    *"name": "UX Designer @ Graphics MasterMinds",
    *"date": "January 2012 - February 2012",
    *"description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley."
    *}
    *],
    *"education": [
    *{
    *"name": "Web Developer @ Harvard University",
    *"date": "August 2006 - May 2010",
    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley."
    *},
    *{
    *"name": "Colorado Springs College",
    *"date": "August 2003 - May 2006",
    *"description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley."
    *},
    *{
    *"name": "UX Designer @ Graphics MasterMinds",
    *"date": "January 2012 - February 2012",
    *"description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley."
    *}
    *]
    *}
    *}
     */
    public function getProfile($id)
    {
        try {
            // $person = $this->model->with('contacts', 'educations', 'skills', 'experiences')->find($id);
            $person = $this->model->with('contact', 'skills')->with(['experience' => function($query){
              $query->selectRaw(
                'person_id,
                name,
                concat(date_format(date_start,"%M %Y"),IF(date_end IS NOT NULL,concat(" - ",date_format(date_end,"%M %Y")),""))
                as date,
                description'
              );
           }])->with(['education' => function($query){
              $query->selectRaw(
                'person_id,
                name,
                concat(date_format(date_start,"%M %Y"),IF(date_end IS NOT NULL,concat(" - ",date_format(date_end,"%M %Y")),""))
                as date,
                description'
              );
           }])
          ->find($id)->toArray();
          $profile["profile"] = $person;
          // echo $person;
            return response()->json($profile, Response::HTTP_OK);
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }    

    /**
     * Criar uma nova pessoa
     *
     * @group Pessoa
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     *@response 201 {
     *"name": "Brian Walker",
     *"image": "https://github.com/b2w-marketplace/code-challenge/raw/master/files/avatar-dev.png",
     *"profession": "Web Developer",
     *"description": "27-year old web developer fromt Colorado Springs with 5+ years of work experience in various fields"
     *}
     */
    public function store(Request $request)
    {
        try {
            $person = $this->model->create($request->all());
            return response()->json($person, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Atualizar uma pessoa
     *
     * @group Pessoa
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     *@response 200 {
     *"name": "Brian Walker",
     *"image": "https://github.com/b2w-marketplace/code-challenge/raw/master/files/avatar-dev.png",
     *"profession": "Web Developer",
     *"description": "27-year old web developer fromt Colorado Springs with 5+ years of work experience in various fields"
     *}
     */
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

    /**
     * Deletar uma pessoa
     *
     * @group Pessoa
     *@response 204
     */
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
