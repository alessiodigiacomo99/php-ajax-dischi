<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./dist/css/style.css">
</head>
<body>

    <header id="site_header">
        <nav id="navbar">

        </nav>
        <!-- /#navbar -->
    </header>
    <!-- /#site_header -->

    <div id="root">
    
            <div class="card" v-for = "album in albums">
                <img :src="album.poster" alt="">
                <h2>{{album.title}}</h2>
                <h4>{{album.author}}</h4>
                <h6>{{album.year}}</h6>
            </div>
    
    </div>
    <!-- /#root -->

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <script src="./dist/js/main.js"></script>
</body>
</html>
<!-- Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php e li stamperà attraverso VueJS. -->
