<?php 
include __DIR__ . '/db.php';
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
            
        <?php foreach ($response as $value) {?>
            <div class="card">
                <img src="<?php echo $value['poster'] ?>" alt="">
                <h2><?php echo $value['title'] ?></h2>
                <h4><?php echo $value['author'] ?></h4>
                <h6><?php echo $value['year'] ?></h6>
            </div>
        <?php } ?>
    
    </div>
    <!-- /#root -->

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="./dist/js/main.js"></script>
</body>
</html>
<!-- Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->
