<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @detail "Permet de creer un nouveau compte
     */
    public function new(){
        return view('client.new');
    }

    public function save_new_customer(Request $request){
        $client = new GuzzleHttp\Client();
        $query = $client->request("POST", "http://localhost:3000/api/v1/agents/customers/new", [
            "form_params" => [
                "cni" => $request->cni,
                "name" => $request->name,
                "second_name" => $request->second_name,
                "sexe" => $request->sexe,
                "phone" => $request->phone
            ]
        ]);
        $data = $query->getBody()->getContents();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function activate(){
        return view('client.activate');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function credit(){
        return view('client.credit');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function debit(){
        return view('client.debit');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lock(){
        return view('client.lock');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function unlock(){
        return view('client.unlock');
    }

    public function messagerie(){
        return view('client.messagerie');
    }
}
