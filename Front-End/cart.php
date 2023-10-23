<!DOCTYPE html>
<html lang="en">

<head>
    <title>Palette Paradise</title>
    <?php include('./partials/header.php') ?>
</head>

<body>

    <header class="header">
        <a href="index.php"><img src="img/logo.png" class="logo" alt="logo" /></a>
        <ul id="navbar">
            <li><a href="index.php" class="material-symbols-rounded">home</a></li>
            <li><a href="shop.php" class="material-symbols-rounded">store</a></li>
            <li><a onclick="toggleMenu()" class="material-symbols-rounded">account_circle</a></li>
            <li><a href="cart2.php" class="material-symbols-rounded" id="active">shopping_cart</a></li>
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

    <!-- shopping cart page -->
    <section class="shopping-cart">
        <div class="shopping-header">
            <span class="cart-label">Home</span>
            <span class="cart-separator">></span>
            <span class="cart-label-active">Cart</span>
            <span class="cart-separator">></span>
            <span class="cart-label">Shipping</span>
            <span class="cart-separator">></span>
            <span class="cart-label">Order Confirmation</span>

        </div>

        <div class="item-flex">
            <!-- checkout section -->
            <section class="checkout">
                <h3 class="section-heading">Payment Details</h3>

                <div class="payment-form">

                    <div class="payment-method">
                        <button class="method selected">
                            <ion-icon name="card-outline"></ion-icon>
                            <span>Credit Card</span>
                            <ion-icon class="checkmark fill" name="checkmark-circle"></ion-icon>
                        </button>
                        <button class="method">
                            <ion-icon name="logo-paypal"></ion-icon>
                            <span>PayPal</span>
                            <ion-icon class="checkmark" name="checkmark-circle-outline"></ion-icon>
                        </button>
                    </div>

                    <form action="#">
                        <div class="cardholder-name">
                            <label for="" class="label-default">Cardholder Name</label>
                            <input type="text" name="cardholder-name" id="cardholder-name" class="input-default">
                        </div>

                        <div class="card-number">
                            <label for="" class="label-default">Card Number</label>
                            <input type="number" name="card-number" id="card-number" class="input-default">
                        </div>

                        <div class="input-flex">

                            <div class="expire-date">
                                <label for="expire-date" class="label-default">Expiration Date</label>

                                <div class="input-flex">
                                    <input type="number" name="month" id="expire-date" placeholder="12" min="1" max="12" class="input-default">
                                    /
                                    <input type="number" name="year" id="expire-date" placeholder="23" min="23" max="90" class="input-default">
                                </div>
                            </div>

                            <div class="cvv">
                                <label for="" class="label-default">CVV</label>
                                <input type="number" name="cvv" id="cvv" class="input-default">
                            </div>

                        </div>
                    </form>

                </div>

                <button class="btn btn-primary">
                    <b>Pay</b> $ <span id="payAmount">19.17</span>
                </button>

            </section>

            <!-- cart section -->
            <section class="cart">

                <div class="cart-item-box">

                    <h3 class="section-heading">Order Summary</h3>

                    <div class="product-card">

                        <div class="card">

                            <div class="img-box">
                                <img src="img/products/pencil 1.jpg" alt="Kalour Professional Sketching Pencils 12pc" width="100px" class="summary-img">
                            </div>

                            <div class="detail">
                                <h4 class="product-name">Kalour Professional Sketching Pencils</h4>
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button id="decrement">
                                            <ion-icon name="remove-outline"></ion-icon>
                                        </button>
                                        <span id="quantity">1</span>
                                        <button id="increment">
                                            <ion-icon name="add-outline"></ion-icon>
                                        </button>
                                    </div>

                                    <div class="price">
                                        $ <span id="price">7</span>
                                    </div>
                                </div>
                            </div>

                            <button class="product-close-btn">
                                <ion-icon name="trash-outline"></ion-icon>
                            </button>

                        </div>

                    </div>

                    <div class="product-card">

                        <div class="card">

                            <div class="img-box">
                                <img src="img/products/pen 1.jpg" alt="ARTLINE Drawing System Set of 4" width="100px" class="summary-img">
                            </div>

                            <div class="detail">
                                <h4 class="product-name">ARTLINE Drawing System</h4>
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button id="decrement">
                                            <ion-icon name="remove-outline"></ion-icon>
                                        </button>
                                        <span id="quantity">1</span>
                                        <button id="increment">
                                            <ion-icon name="add-outline"></ion-icon>
                                        </button>
                                    </div>

                                    <div class="price">
                                        $ <span id="price">11</span>
                                    </div>
                                </div>
                            </div>

                            <button class="product-close-btn">
                                <ion-icon name="trash-outline"></ion-icon>
                            </button>

                        </div>

                    </div>

                </div>

                <div class="wrapper">

                    <div class="discount-token">

                        <label for="token" class="label-default">Gift cart/Discount code</label>

                        <div class="wrapper-flex">

                            <input type="text" name="discount-token" id="discount-token" class="input-default">
                            
                            <button class="btn btn-outline">Apply</button>

                        </div>

                    </div>

                    <div class="amount">

                        <div class="subtotal">
                            <span>Subtotal</span> <span>$ <span id="subtotal">18</span></span>
                        </div>
                        <div class="tax">
                            <span>Tax</span> <span>$ <span id="tax"> 1.17</span></span>
                        </div>
                        <div class="shipping">
                            <span>Shipping</span> <span>$ <span id="shipping">0.00</span></span>
                        </div>
                        <div class="total">
                            <span>Total</span> <span>$ <span id="total">19.17</span></span>
                        </div>
                    </div>

                </div>

            </section>

        </div>

    </section>

    <footer class="section-p1">
        <?php include('./partials/footer.php') ?>
        <div class="citations">
            <cite>Web icon by <a href="https://www.flaticon.com/authors/darius-dan">Flaticon</a></cite>
        </div>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="cart.js"></script>

</body>

</html>
