<html>
<head>
  <title>Title of the document</title>
</head>
<!-- <style>
  body{
        display: grid;
        place-items: center;
        height: 100vh;
        margin: 0;
        font-family: sans-serif;
     }
</style> -->

<body>

   

      <h1> 
         Recommended Bookssss
      </h1>

      <?php 

         $books = [
            "Do Android Dream of Electric Sheep",
            "The Langoliers",
            "Hail Mary"
         ];
      
      ?>
      
      <ul>
        <?php foreach ($books as $book) {
            echo "<li>$book</li>";
        }
        ?>

      </ul>


</body>

</html>
