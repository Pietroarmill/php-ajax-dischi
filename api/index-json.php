<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport", initial-scale=1.0">
  <title>Document</title>
  <!-- vue -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.14/vue.common.dev.min.js" integrity="sha512-TpgbLHXaTCAZ7ULhjopb1PveTz5Jx6KEQUtMfXhV0m0EArh+6O8ybZjjDN1Yug6oagN6iFm6EoMjuYSiFr0qXQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- axios  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- css -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <header>
    <div class="img-logo">
      <img src="../img/logo-spotify.png" alt="">
    </div>
  </header>

  <main id="root">
    <div class="container">
      <div class="main-content">
        <div class="card" v-for="song in songs">
          <div class="img-card">
            <img :src="song.poster" alt="">
          </div>
          <div class="text-card">
            <h2>{{ song.title }}</h2>
            <h5>{{ song.author }}</h5>
            <small>{{ song.year }}</small>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer>
  </footer>

  <script src="js/script.js"></script>
</body>

</html>