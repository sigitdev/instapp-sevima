<?php

class Framework
{

    protected function loadView($file)
    {
        require __DIR__ . '/../../view/' . $file . '.php';
    }

    public function loadController($controller_name = "")
    {
        require __DIR__ . '/../controller/' . $controller_name . '.php';
    }

    public function apiResponse($msg = "", $data = [], $status)
    {

        header('Content-type: application/json');
        http_response_code($status);
        echo json_encode([
            "msg" => $msg,
            "data" => $data,
            "status" => $status
        ]);
        exit;
    }

    public function base_url($path = "") {
        return BASE_URL . $path;
    }
}
