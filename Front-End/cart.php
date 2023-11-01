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

    <!-- shopping cart page -->
    <section class="shopping-cart">
        <div class="shopping-header">
            <a href="index.php" class="cart-label">Home</a>
            <span class="cart-separator">></span>
            <a href="cart.php" class="cart-label-active">Cart</a>
            <span class="cart-separator">></span>
            <a href="shipping.php" class="cart-label">Shipping</a>
            <span class="cart-separator">></span>
            <a href="#" class="cart-label">Order Confirmation</a>
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

                    <form action="shipping.php">
                        <div class="cardholder-name">
                            <label for="" class="label-default">Cardholder Name</label>
                            <input type="text" name="cardholder-name" id="cardholder-name" class="input-default" required>
                        </div>

                        <div class="card-number">
                            <label for="" class="label-default">Card Number</label>
                            <input type="text" name="card-number" id="card-number" class="input-default" onkeypress='return formats(this,event)' onkeyup="return numberValidation(event)" required>
                        </div>

                        <div class="input-flex">
                            <div class="expire-date">
                                <label for="expire-date" class="label-default">Expiration Date</label>
                                <div class="input-flex">
                                    <select name="month" id="expire-date" class="input-default">
                                        <option selected>MM</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                    /
                                    <select name="year" id="expire-date" class="input-default">
                                        <option selected>YY</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                        <option>32</option>
                                        <option>33</option>
                                        <option>34</option>
                                        <option>35</option>
                                        <option>36</option>
                                        <option>37</option>
                                        <option>38</option>
                                        <option>39</option>
                                    </select>
                                </div>
                            </div>

                            <div class="cvv">
                                <label for="" class="label-default">CVV</label>
                                <input type="number" name="cvv" id="cvv" class="input-default" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;" required>
                            </div>
                        </div>

                        <div class="continueBtn">
                            <button class="btn btn-secondary" type="button" onclick="location.href='index.php';">
                                <span>Return to Home</span>
                            </button>
                            <button class="btn btn-primary" type="submit">
                                <span>Continue to Shipping</span>
                            </button>
                        </div>
                    </form>
                </div>
            </section>

            <!-- cart section -->
            <section class="cart">
                <div class="cart-item-box">
                    <h3 class="section-heading">Order Summary</h3>

                    <div class="product-card">
                        <div class="card">
                            <div class="img-box">
                                <img src="img/products/pencil 1.jpg" alt="Kalour Professional Sketching Pencils 12pc" width="120px" class="summary-img">
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
                                        $ <span id="price">7.00</span>
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
                                <img src="img/products/pen 1.jpg" alt="ARTLINE Drawing System Set of 4" width="120px" class="summary-img">
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
                                        $ <span id="price">11.00</span>
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
                        <label for="token" class="label-default">Gift card/Discount code</label>
                        <div class="wrapper-flex">
                            <input type="text" name="discount-token" id="discount-token" class="input-default">
                            <button class="btn btn-outline">Apply</button>
                        </div>
                    </div>

                    <div class="amount">
                        <div class="subtotal">
                            <span>Subtotal</span> <span>$ <span id="subtotal">18.00</span></span>
                        </div>
                        <div class="shipping">
                            <span>Shipping fee</span> <span>$ <span id="shipping">0.00</span></span>
                        </div>
                        <div class="tax">
                            <span>Sales tax</span> <span>$ <span id="tax">1.17</span></span>
                        </div>
                        <div class="total">
                            <span>Grand total</span> <span>$ <span id="total">19.17</span></span>
                        </div>
                        <!-- <div class="shipping">
                            <span>Shipping</span> <span>$ <span id="shipping">6.99</span></span>
                        </div>
                        <div class="total">
                            <span>Total</span> <span>$ <span id="total">26.16</span></span>
                        </div> -->
                    </div>
                </div>
            </section>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="logo">
            <h4>Contact</h4>
            <p><strong>Address:</strong> 5678 Sunset Boulevard, Los Angeles, CA 90001</p>
            <p><strong>Phone:</strong> (555) 123-4567</p>
            <p><strong>Hours:</strong> 9:00 AM - 5:00 PM, Mon-Sat</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-youtube-play"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <i>About Us</i>
            <i>Delivery Information</i>
            <i>Privacy Policy</i>
            <i>Terms & Conditions</i>
            <i>Contact Us</i>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <i>Sign In</i>
            <i>View Cart</i>
            <i>My Wishlist</i>
            <i>Track My Order</i>
            <i>Help</i>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="App Store">
                <img src="img/pay/play.jpg" alt="Google Play">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" alt="Payment Methods">
        </div>

        <div class="copyright">
            <p>© 2023, IT Capstone Group 2 - Women in Stem</p>
        </div>
        <div class="citations">
            <cite>Web icon by <a href="https://www.flaticon.com/authors/darius-dan">Flaticon</a></cite>
        </div>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="cart.js"></script>

</body>

</html>
