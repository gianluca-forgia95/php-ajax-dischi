<?php 
    include __DIR__ . '/data.php'; 
    include __DIR__ . '/head.php'; 
?>

<body>


 
 <!-- Logo -->
     <header>
      <div class="logo">
         <img src="img/spotify-logo.png" alt="Logo Spotify">
      </div>
     </header>
 <!-- /Logo -->
   <div class="container-albums">
       <!-- PHP Album -->
       <?php foreach( $Api as $info) { ?>
        <div class="album text-grey">
          <img src="<?php echo $info['poster']; ?>" alt="">
          <h3 class="title-album"><?php echo $info['title']; ?></h3>
          <span class="author"><?php echo $info['author']; ?></span>
          <span><?php echo $info['genre']; ?></span>
          <span><?php echo $info['year']; ?></span>
        </div>
       <?php } ?>  
      <!-- /PHP Album -->
   </div>

   
</body>