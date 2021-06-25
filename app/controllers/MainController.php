<?php
namespace Controllers;
use View;

use function View\view;

class MainController
{
    public static function MainView()
    {
        view("index");
    }
}
