<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie Class</title>
 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/sti.css">

</head>
<body>
<div class="contenedor">
     <?php
        
        class movie {
          private string $tittle;
          private string $year;
          private string $url;
          public function __construct(string $tittle, string $year, string $url)
          {
            $this->tittle = $tittle;
            $this->year = $year;
            $this->url = $url;
          }
          public function getYear()
          {
            return $this->year;
          }
  
         
          public function getUrl()
          {
            return $this->url;
          }
  
         
          public function getTittle()
          {
            return $this->tittle;
          }
        } 
       
      
      $movie1 = new movie("Batman","2005","https://m.media-amazon.com/images/I/51tjKXtDguL._SY445_.jpg");
      $movie2 = new movie("Pulp Fiction","1994","https://m.media-amazon.com/images/I/91Wpbzk+HCL._SY445_.jpg");
      $movie3 = new movie("La gran evasión","1963","https://static.carrefour.es/hd_510x_/imagenes/products/84202/66930/699/8420266930699/imagenGrande1.jpg");
      $movies=[$movie1,$movie2,$movie3];
     //echo $movie->tittle . "," .$movie->year . "<br>";
     foreach ($movies as $movie) { ?>
       
      
      
      
      
       <div class="card" style="width: 14rem; margin: 15px;">
       
       
       <a><img src="<?php echo $movie->getUrl(); ?>" class="card-img-top"></a>
          <div class="card-body">
          <p class="card-text"><?php echo $movie->getYear(); ?></p>
          <h5 class="card-title"><?php echo $movie->getTittle(); ?></h5>
          </div>
       </div>

       
    
    <?php } ?>

          
          

         
    </div>         
    
     
       
</body>
</html>


