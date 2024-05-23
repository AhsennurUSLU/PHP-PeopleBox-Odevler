<?php
     $movies = getData()["movies"];
     $active_movie_count = 0;
     foreach ($movies as $movie){
        if($movie["is-active"] === true ){
          $active_movie_count++;
 
     }}
     $ozet = count(getData()["categories"]).' kategoride '.$active_movie_count.'  film listelenmiştir' ;
    
    
    const baslik = "Popüler Filmler";
?>
    
<h1 class="mb-4"><?php echo baslik?></h1>
<p class="text-muted">
    <?php echo $ozet?>
</p>