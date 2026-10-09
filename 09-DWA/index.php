<?php

require 'functions.php';
require 'Database.php';
// require 'router.php';

$db = new Database();
$posts = $db->query("select * from posts where id > 1")->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}






























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