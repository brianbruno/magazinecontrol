<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class LoginAPI extends Controller
{

    private $login;
    private $senha;
    private $response;

    function __construct() {
        $this->login = isset($_POST['login']) ? $_POST['login'] : null;
        $this->senha = isset($_POST['senha']) ? $_POST['senha'] : null;

        $this->response = new Response();
        $this->response->headers->set('Content-Type', 'application/json');

        $this->verificarLoginSenha();
    }

    function verificarLoginSenha() {
           if(empty($this->login) || empty($this->senha)) {
               $this->response->setContent(json_encode(array(
                   'resultado' => "Email ou senha inválidos.",
               )));
           } else {

           }
    }

}
