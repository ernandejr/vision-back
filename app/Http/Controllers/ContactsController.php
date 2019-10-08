<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Symfony\Component\HttpFoundation\Response;
class ContactsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $model;
    public function __construct(Contact $contact)
    {
        $this->model = $contact;
    }
    /**
     * Retornar todos contatos
     *
     * @group Contatos
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     */
    public function getAll()
    {
        try {
            $contacts = $this->model->all();
            if (count($contacts)>0) {
                return response()->json($contacts, Response::HTTP_OK);
            }else{
                return response()->json([], Response::HTTP_OK);
            }
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }

    /**
     * Retornar um contato expecifico
     *
     * @group Contatos
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     */
    public function get($id)
    {
        try {
            $contact = $this->model->find($id);
            return response()->json($contact, Response::HTTP_OK);
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }

    /**
     * Criar um novo contato
     *
     * @group Contatos
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     *@response 201 {
     *   "tel": "123-456-7890",
     *   "cel": "012-345-6789",
     *   "address": "1490 General Woods. Colorado Springs",
     *   "website": "brianwalker.co",
     *   "mail": "mail@brianwalker.co"
     *}
     */
    public function store(Request $request)
    {
        try {
            $contact = $this->model->create($request->all());
            return response()->json($contact, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Atualizar um contato
     *
     * @group Contatos
     *
     *@response 500 {
     * "error": "erro ao se conectar com o banco de dados"
     *}
     *@response 200 {
     *   "tel": "123-456-7890",
     *   "cel": "012-345-6789",
     *   "address": "1490 General Woods. Colorado Springs",
     *   "website": "brianwalker.co",
     *   "mail": "mail@brianwalker.co"
     *}
     */
    public function update($id, Request $request)
    {
        try {
            $contact = $this->model->find($id)
                ->update($request->all());
            return response()->json($contact, Response::HTTP_OK);
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Deletar um contato
     *
     * @group Contatos
     *@response 204
     */
    public function destroy($id, Request $request)
    {
        try {
            $contact = $this->model->find($id)
                ->delete();
            return response()->json(null, Response::HTTP_NO_CONTENT);
        } catch (QueryException $e) {
           return response() ->json(["error" => "erro ao se conectar com o banco de dados"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
