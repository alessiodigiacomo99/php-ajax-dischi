<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../dist/css/style.css">
</head>
<body>


    <div id="root">

        <header id="site_header">
            <nav id="navbar">
                <select name="" id="" v-model="author">
                    <option value="All">All</option>
                    <option v-for="album in albums" :value="album.author">
                        {{album.author}}
                    </option>
                </select>
            </nav>
            <!-- /#navbar -->
        </header>
        <!-- /#site_header -->
    
        <div class="card_wrapper">
            <div class="card" v-for = "album in newAlbums">
                <img :src="album.poster" alt="">
                <h2>{{album.title}}</h2>
                <h4>{{album.author}}</h4>
                <h6>{{album.year}}</h6>
            </div>
        </div>
        <!-- /.card_wrapper -->
    
    </div>
    <!-- /#root -->

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <script src="../dist/js/main.js"></script>
</body>
</html>
<!-- Attraverso un’altra chiamata ajax, filtrare gli album per artista -->
