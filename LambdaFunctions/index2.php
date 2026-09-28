<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions and Filter</title>
</head>
<body>

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

          function filter($items, $fn) {
            $filteredItems = [];

            foreach ($items as $item) {
                if ($fn($item)) {
                    $filteredItems[] = $item;
                }
            }
            return $filteredItems;
         };

         $filteredBooks = filter($books, function($book){
            return $book["releaseYear"] > 2000;
         });  
      ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>       
            <li>
                <a href="<?php echo $book["purchaseUrl"]; ?>">
                    <?php echo $book["name"]; ?>  (<?= $book["releaseYear"]; ?>) - By <?= $book["author"]; ?>
                </a>
            </li>     
        <?php endforeach; ?>
    </ul>

</body>
</html>