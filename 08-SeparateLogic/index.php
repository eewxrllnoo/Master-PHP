<?php

$books = [
    [
        "name" => "Do Android Dream of Electric Sheep",
        "author" => "Philip K. Dick",
        "releaseYear" => 1968,
        "purchaseUrl" => 'http://example.com/Do-Android-Dream-of-Electric-Sheep'
    ],
    [
        "name" => "The Langoliers",
        "author" => "Stephen King",
        "releaseYear" => 1990,
        "purchaseUrl" => 'http://example.com/The-Langoliers'
    ],
    [
        "name" => "Hail Mary",
        "author" => "Andy Weir",
        "releaseYear" => 2021,
        "purchaseUrl" => 'http://example.com/Hail-Mary'
    ]
];


$filteredBooks = array_filter($books, function ($book) {
    return $book["releaseYear"] > 2000;
});


require 'index.view.php';