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
            <li><a href="shop.php" class="material-symbols-rounded">store</a></li>
            <li><a href="accountdash.php" class="material-symbols-rounded">account_circle</a></li>
            <li><a href="cart.php" class="material-symbols-rounded" id="active">shopping_cart</a></li>
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

    <!-- order confirmation section -->
    <section class="order-confirmation">
        <div class="shopping-header">
            <a href="index.php" class="cart-label">Home</a>
            <span class="cart-separator">></span>
            <a href="cart.php" class="cart-label">Cart</a>
            <span class="cart-separator">></span>
            <a href="shipping.php" class="cart-label">Shipping</a>
            <span class="cart-separator">></span>
            <a href="orderconf.php" class="cart-label-active">Order Confirmation</a>
        </div>

        <div class="orderconf-header">
            <!-- <h1>Thank you!</h1> -->
            <img src="./img/hero 3.jpg" alt="Thank You Banner Image">
            <h3>We've received your order!</h3>
            <p>Thank you for your order. You will receive an order number and confirmation email shortly. Don't forget to check your spam folder!</p>
        </div>

        <div class="info-block">
            <div class="shipping-info">
                <div class="input-flex address-header" style="gap: 10px;">
                    <span class="material-symbols-rounded">pin_drop</span>
                    <h4 style="font-size: 23px;">Shipping Address</h4>
                </div>
                <h4>Customer Name</h4>
                <p id="address" style="margin-bottom: 0;">1234 Anywhere Dr. <br> City, State Unitied States 98765</p> <!-- needs to be connect to retreive info from database -->
                <p id="phone" style="margin-top: 0;">###-###-####</p> <!-- same id as on shipping.php -->
            </div>

            <div class="billing-info">
                <div class="input-flex address-header" style="gap: 10px;">
                    <span class="material-symbols-rounded">credit_card</span>
                    <h4 style="font-size: 23px;">Billing Information</h4>
                </div>
                <h4>Customer Name</h4>
                <p id="address" style="margin-bottom: 0;">1234 Anywhere Dr. <br> City, State Unitied States 98765</p> <!-- needs to be connect to retreive info from database -->
                <p id="phone" style="margin-top: 0;">###-###-####</p> <!-- same id as on shipping.php -->
            </div>

            <div class="shipping-method">
                <div class="input-flex address-header" style="gap: 10px;">
                    <span class="material-symbols-rounded">local_shipping</span>
                    <h4 style="font-size: 23px;">Shipping Method</h4>
                </div>
                <h4>Standard Shipping</h4>
                <p>US Postal Service</p>
                <p>(3-7 Business Days)</p>
            </div>
        </div>

        <div class="order-block">
            <div class="cart order-summary" style="width: 45%; margin-right: 20px;">
                <div class="cart-item-box">
                    <h3 class="section-heading">Order Details</h3>

                    <div class="product-card">
                        <div class="card">
                            <div class="img-box">
                                <img src="img/products/pencil 1.jpg" alt="Kalour Professional Sketching Pencils 12pc" width="160px" class="summary-img">
                            </div>

                            <div class="detail orderconf-detail">
                                <h4 class="orderconf-name">Kalour Professional Sketching Pencils <span class="orderconf-price"> $ <span id="price">7.00</span></span></h4>
                            </div>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="card">
                            <div class="img-box">
                                <img src="img/products/pen 1.jpg" alt="ARTLINE Drawing System Set of 4" width="160px" class="summary-img">
                            </div>

                            <div class="detail orderconf-detail">
                                <h4 class="orderconf-name">ARTLINE Drawing System <span class="orderconf-price"> $ <span id="price">11.00</span></span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cart order-summary" style="height:285px; width: 30%; margin-left: 30px;">
                <div class="cart-item-box">
                    <h3 class="section-heading">Order Summary</h3>

                    <div class="amount" style="padding: 0;">
                        <div class="subtotal">
                            <span>Subtotal</span> <span>$ <span id="subtotal">18.00</span></span>
                        </div>
                        <div class="shipping">
                            <span>Shipping fee</span> <span>$ <span id="shipping">0.00</span></span>
                        </div>
                        <div class="discount">
                            <span>Discount</span> <span>$ <span name="discount-token" id="discount-token">0.00</span></span>
                        </div>
                        <div class="tax">
                            <span>Sales tax</span> <span>$ <span id="tax">1.17</span></span>
                        </div>
                        <div class="total">
                            <span>Grand total</span> <span>$ <span id="total">19.17</span></span>
                        </div>
                    </div>
                </div>
            </div>
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
