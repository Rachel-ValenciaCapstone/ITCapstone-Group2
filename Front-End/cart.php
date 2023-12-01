<?php
session_start();
/* Looks to check whether you are logged in continuing to checkout */
if(isset($_SESSION["user_id"])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id="0";
}
?>

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
            <li><a href="accountdash.php" class="material-symbols-rounded">account_circle</a></li>
            <li><a href="cart.php" class="material-symbols-rounded" id="active">shopping_cart</a></li>
            <li><button id="form_open" class="material-symbols-rounded">login</button></li>
        </ul>
    </header>

    <!-- popup login -->
    <section class="login">
        <?php include('./partials/login.php') ?>
    </section>

    <!-- shopping cart page -->
    <section class="shopping-cart" style="margin-top: 75px;">
        <div class="shopping-header">
            <a class="cart-label">Home</a>
            <span class="cart-separator">></span>
            <a class="cart-label-active">Cart</a>
            <span class="cart-separator">></span>
            <a class="cart-label">Shipping</a>
            <span class="cart-separator">></span>
            <a class="cart-label">Order Confirmation</a>
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

                    <form action="shipping.php" method='post' >
                        <div class="cardholder-name">
                            <label for="cardholder-name" class="label-default">Cardholder Name</label>
                            <input type="text" name="cardholderName" id="cardholderName" class="input-default" required>
                        </div>

                        <div class="card-number">
                            <label for="card-number" class="label-default">Card Number</label>
                            <input type="text" name="cardNumber" id="cardNumber" class="input-default" onkeypress='return formats(this,event)' onkeyup="return numberValidation(event)" required>
                        </div>

                        <div class="input-flex">
                            <div class="expire-date">
                                <label for="expire-date" class="label-default">Expiration Date</label>
                                <div class="input-flex">
                                    <select name="expireMonth" id="expireDate" class="input-default">
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
                                    
                                    <select name="expYear" id="expYear" class="input-default">
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

                    <div id='cartSummary'></div>

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
                            <span>Subtotal</span> <span> <span id="subtotal">0.00</span></span>
                        </div>
                        <div class="shipping">
                            <span>Shipping fee</span> <span> $<span id="shipping">0.00</span></span>
                        </div>
                        <div class="tax">
                            <span>Sales tax</span> <span> <span id="tax">0.00</span></span>
                        </div>
                        <div class="total">
                            <span>Grand total</span> <span> <span id="total">0.00</span></span>
                        </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="header.js"></script>
    <script src="cart.js?v=9"></script>
    <script src="cart_v2.js?v=18"></script>

    <script>
        //Prompts a pop-up login box to view cart page and enter payment details.
        const userId = "<?php echo $user_id?>";

        if(userId==="0")
        {
            $("#mainForm").hide();    
            login.classList.add("show");
        }
    </script>
</body>

</html>
