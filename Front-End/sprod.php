<!DOCTYPE html>
<html lang="en">
<head>
    <title>Palette Paradise</title>
    <?php include('./partials/header.php') ?>
    <style>  
        .fa {  
            margin: 0 4px;  
            font-size: 18px;  
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
            <li><a onclick="toggleMenu()" class="material-symbols-rounded">account_circle</a></li>
            <li><a href="cart.php" class="material-symbols-rounded">shopping_cart</a></li>
            <li><button id="form_open" class="material-symbols-rounded">login</button></li>
        </ul>
    </header>

    <!-- user account dropdown -->
    <section class="sub-menu-wrap" id="subMenu">
        <?php include('./partials/account.php') ?>
    </section>
    
    <!-- popup login -->
    <section class="login">
        <?php include('./partials/login.php') ?>
    </section>
    
    <!-- needs to change based on the item clicked -->
    <section id="prodetails" class="singleprod">
        <div class="single-pro-image">
            <!-- main image -->
            <img src="img/products/pencil 1.jpg" width="100%" id="MainImg" alt="Kalour Professional Sketching Pencils 12pc">
            <!-- small images -->
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/products/pencil 1.jpg" width="100%" class="small-img" alt="Kalour Professional Sketching Pencils 12pc">
                </div>
                <div class="small-img-col">
                    <img src="img/products/pencil 3.jpg" width="100%" class="small-img" alt="Kalour Professional Sketching Pencils 12pc">
                </div>
                <div class="small-img-col">
                    <img src="img/products/pencil 2.jpg" width="100%" class="small-img" alt="Kalour Professional Sketching Pencils 12pc">
                </div>
                <div class="small-img-col">
                    <img src="img/products/pencil 4.jpg" width="100%" class="small-img" alt="Kalour Professional Sketching Pencils 12pc">
                </div>
            </div>
        </div>
        <div class="single-pro-details">
            <a href="shop.php" class="fa fa-angle-left arrow"><small class="back">Shop</small></a>
            <h4>Kalour Professional Sketching Pencils 12pc</h4>
            <h2>$7.00</h2>
            <div><button class="button-28">ADD TO CART</button></div>
            <h4>Product Details</h4>
            <span>Premium sharpened graphite pencils for drawing (5H, 4H, 3H, 2H,HB, B, 2B, 3B, 4B, 5B, 6B, 8B).A wide variety of hardness for all your artwork needs.harder degrees for outlining (2B - 5H) and softer degrees for blending and layering (3B - 8B).Drawing Pencils enable creating lines of any thickness and color saturation.</span>
        </div>
    </section>

    <!-- essential products -->
    <section id="product1" class="singleprod">
        <h2>SHOP OUR ESSENTIALS</h2>
        <p>Empowering Artists with the Finest Essentials!</p>
        <?php include('./partials/essentials.php') ?>
    </section>

    <footer class="section-p1">
        <?php include('./partials/footer.php') ?>
        <div class="citations">
            <cite> Image by <a href="https://www.freepik.com/author/freepik">Freepik</a> (link does not work but I need to cite it)</cite>
        </div>
    </footer>    

    <script src="sprod.js"></script>
    
</body>
</html>
