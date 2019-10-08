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

    /**
     * Retornar todas Experiências
     *
     * @group Experiências
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     */
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

    /**
     * Retornar uma Experiência específica
     *
     * @group Experiências
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     */
    public function get($id)
    {
        try {
            $experience = $this->model->find($id);
            return response()->json($experience, Response::HTTP_OK);
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }

    /**
     * Criar uma nova Experiência
     *
     * @group Experiências
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     *@response 201 {
     *"name": "Front End Developer @ HillSong",
     *"date_start": "2014-01-01",
     *"date_end": null,
     *"description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley."
     *}
     */
    public function store(Request $request)
    {
        try {
            $experience = $this->model->create($request->all());
            return response()->json($experience, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Atualizar uma Experiência
     *
     * @group Experiências
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     *@response 201 {
     *"name": "Front End Developer @ HillSong",
     *"date_start": "2014-01-01",
     *"date_end": null,
     *"description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley."
     *}
     */
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

    /**
     * Deletar uma Experiência
     *
     * @group Experiências
     *@response 204
     */
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
