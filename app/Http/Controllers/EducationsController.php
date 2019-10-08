<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Education;
use Symfony\Component\HttpFoundation\Response;
class EducationsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $model;
    public function __construct(Education $education)
    {
        $this->model = $education;
    }

    /**
     * Retornar todas Educaçãos
     *
     * @group Educaçãos
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     */
    public function getAll()
    {
        try {
            $educations = $this->model->all();
            if (count($educations)) {
                return response()->json($educations, Response::HTTP_OK);
            }else{
                return response()->json([], Response::HTTP_OK);
            }
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }

    /**
     * Retornar uma Educação específica
     *
     * @group Educaçãos
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     */
    public function get($id)
    {
        try {
            $education = $this->model->find($id);
            return response()->json($education, Response::HTTP_OK);
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }

    /**
     * Criar uma nova Educação
     *
     * @group Educaçãos
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     *@response 201 {
     *"name": "Web Developer @ Harvard University",
     *"date_start": "2006-08-01",
     *"date_end": "2010-05-01",
     *"description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the  1500s, when an unknown printer took a galley."
     *}
     */
    public function store(Request $request)
    {
        try {
            $education = $this->model->create($request->all());
            return response()->json($education, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Atualizar uma Educação
     *
     * @group Educaçãos
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     *@response 201 {
     *"name": "Web Developer @ Harvard University",
     *"date_start": "2006-08-01",
     *"date_end": "2010-05-01",
     *"description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the  1500s, when an unknown printer took a galley."
     *}
     */
    public function update($id, Request $request)
    {
        try {
            $education = $this->model->find($id)
                ->update($request->all());
            return response()->json($education, Response::HTTP_OK);
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Deletar uma Educação
     *
     * @group Educaçãos
     *@response 204
     */
    public function destroy($id, Request $request)
    {
        try {
            $education = $this->model->find($id)
                ->delete();
            return response()->json(null, Response::HTTP_NO_CONTENT);
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
