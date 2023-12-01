<?php
// Start a session to keep the user logged in
session_start();
?>

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
            <li><a href="accountdash.php" class="material-symbols-rounded">account_circle</a></li>
            <li><a href="cart.php" class="material-symbols-rounded">shopping_cart</a></li>
            <li><button id="form_open" class="material-symbols-rounded">login</button></li>
        </ul>
    </header>

    <!-- popup login -->
    <section class="login">
        <?php include('./partials/login.php') ?>
    </section>
    
<?php
    //Connects to database and swaps out images/details based on what product was selected from the "Featured Page"
    try {
        $item = $_GET['id'];
        $query = "SELECT * FROM products WHERE product_id=$item";

        $mysqli = require __DIR__ . "/database_handler.php";
        $result = $mysqli->query($query);
        
        if ($result->num_rows <1) {
            die("<p>Product not found</p>");
        }

        $product = $result->fetch_assoc();
        $productName = $product['product_name'];
        $price = $product['price'];
        $description = $product['description'];
        $mainImage = $product['main_image'];
        $image1 = $product['image1'];
        $image2 = $product['image2'];
        $image3 = $product['image3'];
        $image4 = $product['image4'];
    } catch (Exception $ex) {
        die("error");
    }                      
    ?>
    
    <!-- Changes based on the item clicked -->
    <section id="prodetails" class="singleprod" style="margin-top: 75px;">
        <div class="single-pro-image">
        <!-- main image -->
        <?php
            echo "<img src='img/products/$mainImage'" . 'width="100%" id="MainImg" alt="">';
        ?>
            <!-- small images -->
            <div class="small-img-group">
                <div class="small-img-col">
                <?php    
                    echo "<img src='img/products/$image1'" . 'width="100%" class="small-img" alt="">';
                ?>
                </div>
                <div class="small-img-col">
                <?php  
                    echo "<img src='img/products/$image2'" . 'width="100%" class="small-img" alt="">';
                ?>
                </div>
                <div class="small-img-col">
                <?php
                    echo "<img src='img/products/$image3'" . 'width="100%" class="small-img" alt="">';
                ?>
                </div>
                <div class="small-img-col">
                <?php
                    echo "<img src='img/products/$image4'" . 'width="100%" class="small-img" alt="">';
                ?>
                </div>
            </div>
        </div>
        <div class="single-pro-details">
            <a href="shop.php" class="fa fa-angle-left arrow"><small class="back">Shop</small></a>
            <?php
            echo "<h4 id='prodName$item'>$productName</h4>";
            echo "<h2 id='price$item'>$price</h2>";                                                                       
            echo "<input type='hidden' id='mainImage' value ='$mainImage'/>";
            echo "<div><button class='button-28' id='add_to_cart' name='add_to_cart'>ADD TO CART</button></div>";
            echo "<h4>Product Details</h4>";
            echo "<span>$description</span>";
            ?>
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
    <script src="cart_v2.js"></script>
    
</body>
</html>
