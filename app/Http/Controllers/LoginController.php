<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\Resource;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
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
    public function admin($data){
        //generate cookies
        Cookie::queue('name', 'loremIpsum');
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
        $query = $client->request("POST", "https://ba89003e.ngrok.io/api/v1/agents/signin", [
           "form_params" => [
               "email"=> $request->email,
               "password" => $request->password
        ]
        ]);
        $data = $query->getBody()->getContents();
        $fylo = json_decode($data);
        if ($fylo->status == true){
            return $this->admin($fylo->status);
        }else {
            return $this->index();
        }
    }

}

