<?php

require "Libs/rb.php";
 //Подключение к RedBeanPHP.
R::setup( 'mysql:host=localhost;dbname=database','mysql', '' );
//Подключение к ДБ(phpmyadmin).
//Ввод данных ,которые указаны в PhpMyAdmin.
session_start();

//Функция session_start() создаёт сессию,основываясь на идентификаторе сессии, переданном через POST-запрос.
