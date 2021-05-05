<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
 include __DIR__ .'/partials/head.php';
?>
  <body>

    <div id="root">
    <!-- Logo -->
      <header>
        <div class="logo">
          <img src="img/spotify-logo.png" alt="Logo Spotify">
        </div>
      </header>
   <!-- /Logo -->

    <!-- Album Card -->
      <div class="container-albums">
        <div class="album text-grey" v-for="info in albums">
            <img :src="info.poster" :alt="info.title">
            <h3 class="title-album">{{ info.title }}</h3>
            <span class="author">{{ info.author }}</span>
            <span>{{ info.genre }}</span>
            <span>{{ info.year }}</span>
        </div>
      </div>
    <!-- /Album Card -->
    </div>


  <script src="js/app.js" charset="utf-8"></script>
  </body>
</html>
