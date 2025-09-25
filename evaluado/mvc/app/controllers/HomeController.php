<?php
namespace app\controllers;

class HomeController {
    public function index() {
        return $this->view("HomeView", ['title' => 'ejemplo vista']);
    }

    public function view($vista, $data = []) {
        $file = __DIR__ . "/../views/$vista.php";

        if (file_exists($file)) {
         
            extract($data);

            ob_start();
            include $file;
            $contenido = ob_get_clean();
            return $contenido;
        } else {
            return "Vista no encontrada: $file";
        }
    }
}
