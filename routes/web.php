<?php

use Controllers\MainController;

switch ($_SERVER['REQUEST_METHOD']) { //Проверяем тип запроса
    case 'GET': {
            if ($_SERVER['REQUEST_URI'] == '/') {//Проверяем точку вхождения в приложение
                MainController::MainView();
            } elseif ($_SERVER['REQUEST_URI'] == '/getinfo') {
            } 
            elseif ($_SERVER['REQUEST_URI'] = '/getorderbydate') {
                header('Content-Type: application/json');
               echo "Not method Post";
            }
            break;
        }




    case 'POST': {
            if ($_SERVER['REQUEST_URI'] = '/getorderbydate') {
                header('Content-Type: application/json');
               
                echo $result;
            }
            break;
        }
}