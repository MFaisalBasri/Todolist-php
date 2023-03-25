<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

AddTodoList("Muhammad");
AddTodoList("Faisal");
AddTodoList("Basri");

var_dump($todolist);
