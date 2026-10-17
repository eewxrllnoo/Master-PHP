<?php

require 'functions.php';
require 'Database.php';
// require 'router.php';

$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];

$posts = $db->query("select * from posts where id = {$id}")->fetch();

// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }


dd($posts);


























// PDO First Steps
// class Person
// {
//     public $name;
//     public $age;

//     public function breathe()
//     {
//         echo $this->name . ' is breathing!';
//     }
// }

// $person = new Person();

// $person->name = 'John Doe';
// $person->age = 25;

// $person->breathe();