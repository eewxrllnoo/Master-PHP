<html>
<head>
  <title>Title of the document</title>
</head>
<style>
  body{
        display: grid;
        place-items: center;
        height: 100vh;
        margin: 0;
        font-family: sans-serif;
     }
  }
</style>

<body>

   <?php 
        $name = "Dark Matters";
        $read = false;

        if($read){
          $message = "You have read $name";
        } else {
          $message = "You have NOT read $name";
        }
    ?>

   <h1> 
    
   <?php echo $message ?> 
  
  </h1>


</body>

</html>