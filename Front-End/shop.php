<!DOCTYPE html>
<html lang="en">
<head>
    <title>Palette Paradise - Shop</title>
    <?php include('./partials/header.php') ?>
    <style>  
        .fa {  
            margin: 0 4px;  
            font-size: 22px;  
            color: #47384a;
        }  
    </style>
</head>

<body>

    <header class="header" id="shop-nav">
        <a href="index.php"><img src="img/logo.png" class="logo" alt="logo" /></a>
        <ul id="navbar">
            <li><a href="index.php" class="material-symbols-rounded">home</a></li>
            <li><a href="shop.php" class="material-symbols-rounded" id="active">store</a></li>
            <li><a href="accountdash.php" class="material-symbols-rounded">account_circle</a></li>
            <li><a href="cart.php" class="material-symbols-rounded">shopping_cart</a></li>
            <li><button id="form_open" class="material-symbols-rounded">login</button></li>
        </ul>
    </header>
    
    <!-- popup login -->
    <section class="login">
        <?php include('./partials/login.php') ?>
    </section>

    <!-- hero banner -->
    <section id="page-header">
        <h4>"Art is not what you see, but what you make others see." <br> - Edgar Degas</h4>
    </section>

    <!-- featured products -->
    <section id="product1" class="section-p1">
        <h2>FEATURED PRODUCTS</h2>
        <p>Discover Excellence: Our Featured Products, Your Ultimate Choice!</p>
        <?php include('./partials/featured.php') ?>
    </section>

    <footer class="section-p1">
        <?php include('./partials/footer.php') ?>
        <div class="citations">
            <cite> Image by <a href="https://www.freepik.com/author/freepik">Freepik</a> (link does not work but I need to cite it)</cite>
        </div>
    </footer>    

</body>
</html>
