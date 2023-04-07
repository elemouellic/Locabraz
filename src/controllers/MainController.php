<?php

namespace Locabraz\controllers;

class MainController{
    public function viewFront($view){
        return 'src/views/frontpages' . $view . 'php';
    }

    public function viewAdmin($view){
        return 'src/views/admin' . $view . 'php';
    }
}