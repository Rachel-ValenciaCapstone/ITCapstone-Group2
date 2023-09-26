<!DOCTYPE html>
<html lang="en">
<head>
    <title>Palette Paradise - Home</title>
    <?php include('./partials/header.php') ?>
</head>

<body>

    <header class="header">
        <a href="index.php"><img src="img/logo.png" class="logo" alt="logo" /></a>
        <ul id="navbar">
            <li><a href="index.php" class="material-symbols-rounded" id="active">home</a></li>
            <li><a href="shop.php" class="material-symbols-rounded">store</a></li>
            <li><a href="account.php" class="material-symbols-rounded">account_circle</a></li>
            <li><a href="cart.php" class="material-symbols-rounded">shopping_cart</a></li>
            <li><button id="form_open" class="material-symbols-rounded">login</button></li>
        </ul>
    </header>

    <!-- popup login -->
    <section class="login">
        <?php include('./partials/login.php') ?>
    </section>

    <!-- hero banner -->
    <section id="hero">
        <h4>"Unleash Your Inner Artist, <br /> One Brushstroke at a Time"</h4>
        <p>Professional Art Supplies</p>
        <a href="shop.php"><button>Shop Now</button></a>
    </section>

    <!-- slider -->
    <section id="essentials" class="section-p1">
        <h2>ESSENTIALS</h2>
        <p>Elevate Your Creativity with Premium Art Supplies!</p>
        <div id="slider">
            <input type="radio" name="slider" id="s1" checked />
            <input type="radio" name="slider" id="s2" />
            <input type="radio" name="slider" id="s3" />
            <input type="radio" name="slider" id="s4" />
            <input type="radio" name="slider" id="s5" />
            
            <label for="s1" id="slider1">
                <img src="img/slider/slider 1.jpg" alt="Kalour Professional Sketching Pencils 12pc"/>
            </label>
            <label for="s2" id="slider2">
                <img src="img/slider/slider 2.jpg" alt="ARTLINE Drawing System Set of 4 ( 0.1, 0.3, 05, 0.7 ) 4PSH1"/>
            </label>
            <label for="s3" id="slider3">
                <img src="img/slider/slider 3.jpg" alt="Acrylic Gouache Set Primaries"/>
            </label>
            <label for="s4" id="slider4">
                <img src="img/slider/slider 4.jpg" alt="MEEDEN Canvas Boards"/>
            </label>
            <label for="s5" id="slider5">
                <img src="img/slider/slider 5.jpg" alt="Blick Studio Oil Colors"/>
            </label>            
        </div>
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
            <cite>Web icon by <a href="https://www.flaticon.com/authors/darius-dan">Flaticon</a></cite>
        </div>
    </footer>    

    <script src="script.js"></script>
</body>
</html>
