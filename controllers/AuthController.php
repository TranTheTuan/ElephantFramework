<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\Register;

class AuthController extends Controller
{
    public function login()
    {

    }

    public function register(Request $request)
    {
        $register = new Register();
        $this->setLayout("auth");
        if ($request->isPost()) {
            $register->loadData($request->getBody());
            
            if ($register->validate() && $register->register()) {
                return "Created an account successfully";
            }
            // var_dump($register->errors);
            return $this->render("register", [
                "register" => $register
            ]);
        }
        return $this->render("register", [
            "register" => $register
        ]);
    }
}