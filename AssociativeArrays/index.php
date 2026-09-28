<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

         $books = [
            [
                "title" => "Do Android Dream of Electric Sheep",
                "author" => "Philip K. Dick",
                "year" => 1968
            ],
            [
                "title" => "The Langoliers",
                "author" => "Stephen King",
                "year" => 1990
            ],
            [
                "title" => "Hail Mary",
                "author" => "Andy Weir",
                "year" => 2021
            ]
         ];
      
      ?>
      
     
      <h1>
        <?php echo $books[2]["author"]; ?>
      </h1>
       
    
</body>
</html>