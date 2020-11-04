<?php

namespace app\controllers;

use app\core\Application;
use app\core\Request;
use app\core\Controller;

class SiteController extends Controller
{
    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        echo "<pre>";
        var_dump($body);
        echo "</pre>";
        return "Handling contact submission";
    }

    public function contact()
    {
        return $this->render("contact");
    }

    public function home()
    {
        $params = [
            "name" => "Tony Tran"
        ];
        return $this->render("home", $params);
    }
}
