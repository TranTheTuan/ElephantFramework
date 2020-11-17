<?php

namespace app\core;

/**
 * class Router
 * 
 * @author TranTheTuan <tranthetuan1998hanam@gmail.com>
 * @package app\core
 */

class Application
{
    public static string $ROOT_DIR;
    public static Application $app;

    public Router $router;
    public Request $request;
    public Response $response;
    public Controller $controller;
    public Database $database;
    public function __construct($rootPath, array $config)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->database = new Database($config['db']);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}