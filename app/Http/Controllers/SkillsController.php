<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Skill;
use Symfony\Component\HttpFoundation\Response;
class SkillsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $model;
    public function __construct(Skill $skill)
    {
        $this->model = $skill;
    }
    /**
     * Retornar todas Habilidades
     *
     * @group Habilidades
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     */
    public function getAll()
    {
        try {
            $skills = $this->model->all();
            if (count($skills)) {
                return response()->json($skills, Response::HTTP_OK);
            }else{
                return response()->json([], Response::HTTP_OK);
            }
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }

    /**
     * Retornar uma Habilidade específica
     *
     * @group Habilidades
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     */
    public function get($id)
    {
        try {
            $skill = $this->model->find($id);
            return response()->json($skill, Response::HTTP_OK);
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }

    /**
     * Criar uma nova Habilidade
     *
     * @group Habilidades
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     *@response 201 {
     *"name": "Front End",
     *"value": "80%"
     *}
     */
    public function store(Request $request)
    {
        try {
            $skill = $this->model->create($request->all());
            return response()->json($skill, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Atualizar uma Habilidade
     *
     * @group Habilidades
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     *@response 200 {
     *"name": "Front End",
     *"value": "80%"
     *}
     */
    public function update($id, Request $request)
    {
        try {
            $skill = $this->model->find($id)
                ->update($request->all());
            return response()->json($skill, Response::HTTP_OK);
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Deletar uma Habilidade
     *
     * @group Habilidades
     *@response 204
     */
    public function destroy($id, Request $request)
    {
        try {
            $skill = $this->model->find($id)
                ->delete();
            return response()->json(null, Response::HTTP_NO_CONTENT);
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
