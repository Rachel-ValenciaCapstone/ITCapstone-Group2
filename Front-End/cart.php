<!DOCTYPE html>
<html lang="en">
<head>
    <title>Palette Paradise</title>
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
            <li><a href="shop.php" class="material-symbols-rounded">store</a></li>
            <li><a href="account.php" class="material-symbols-rounded">account_circle</a></li>
            <li><a href="cart.php" class="material-symbols-rounded" id="active">shopping_cart</a></li>
            <li><button id="form_open" class="material-symbols-rounded">login</button></li>
        </ul>
    </header>

    <!-- popup login -->
    <section class="login">
        <?php include('./partials/login.php') ?>
    </section>

    <!-- shopping cart -->
    <section class="shopping-cart">
        <div class="cnav-bar">
            <span class="cnav-bar-item">
                <span class="cnav-bar-item-label label-active" data-index="0">Cart</span>
                <span class="cnav-bar-item-separator"> > </span>
            </span>
            <span class="cnav-bar-item">
                <span class="cnav-bar-item-label" data-index="1">Checkout</span>
                <span class="cnav-bar-item-separator"> > </span>
            </span>
            <span class="cnav-bar-item">
                <span class="cnav-bar-item-label" data-index="2">Place Order</span>
                <span class="cnav-bar-item-separator"> > </span>
            </span>
            <span class="cnav-bar-item">
                <span class="cnav-bar-item-label" data-index="3">Order Complete</span>
            </span>
        </div>
        <div class="cart-selector container-left col-l">
            <div class="cart-header">
                <label class="item-check"><h4>Select All</h4>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
        <div class="cart-amount container-right">
            <div class="price">
                <div class="cart-summary">
                    <div class="order-summary">
                        <h4>Order Summary</h4>
                    </div>
                    <div class="c-order-summary"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- featured products -->
    <section id="product1" class="singleprod">
        <h2>CONTINUE SHOPPING</h2>
        <?php include('./partials/essentials.php') ?>
    </section>

    <footer class="section-p1">
        <?php include('./partials/footer.php') ?>
        <div class="citations">
            <cite> Image by <a href="https://www.freepik.com/author/freepik">Freepik</a> (link does not work but I need to cite it)</cite>
        </div>
    </footer>    

    <script src="script.js"></script>
</body>
</html>
