<?php

switch ($_SERVER['PATH_INFO']){
    case '/create': 
        include("View/Create.html");
        break;
    case '':
        include("View/ExerciseLooper.html");
        break;
    default :
        break;
}
?>