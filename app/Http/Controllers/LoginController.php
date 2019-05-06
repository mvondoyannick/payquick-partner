<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\Resource;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp;
use Symfony\Component\HttpKernel\Client;

class LoginController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('login.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function admin(){
        return view('login.admin');
    }


    //authentification des clients

    /**
     * @param $email
     * @param $password
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws GuzzleException
     */
    public function auth(Request $request){
        $client = new GuzzleHttp\Client();
        $query = $client->request("OPTIONS", "http://192.168.0.102:3000/api/v1/internet/test", [
           "form_params" => [
               "name"=> "mvondo",
               "second_name" => "Yannicks"
           ]
        ]);
        $query->$query->getBody()->getContents;
        return $query;
    }
}
