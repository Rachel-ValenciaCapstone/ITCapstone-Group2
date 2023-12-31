<?php
session_start();
/* Retains the user_id in session to allow the user to complete checkout. */
$user_id = isset($_SESSION['user_id'])?$_SESSION['user_id']:0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Palette Paradise</title>
    <?php include('./partials/header.php') ?>

    <script>
        const userId = <?php echo $user_id?>
    </script>
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
    <!-- all links will be disabled in the future -->
    <section class="shopping-cart" style="margin-top: 75px;">
        <div class="shopping-header">
        <a class="cart-label">Home</a>
            <span class="cart-separator">></span>
            <a class="cart-label">Cart</a>
            <span class="cart-separator">></span>
            <a class="cart-label-active">Shipping</a>
            <span class="cart-separator">></span>
            <a class="cart-label">Order Confirmation</a>
        </div>

        <div class="item-flex">
            <!-- shipping information -->
            <section class="checkout">
                <h3 class="section-heading">Shipping Information</h3>

                <div class="payment-form">
                    <div class="payment-method">
                        <button class="method selected">
                            <ion-icon name="home-outline"></ion-icon>
                            <span>Residential</span>
                            <ion-icon class="checkmark fill" name="checkmark-circle"></ion-icon>
                        </button>
                        <button class="method">
                            <ion-icon name="business-outline"></ion-icon>
                            <span>Business</span>
                            <ion-icon class="checkmark" name="checkmark-circle-outline"></ion-icon>
                        </button>
                    </div>

                    <form action="orderconf.php" method='post' onSubmit='return shipSubmit(this)' id='mainForm'>
                        <div class="card-number">
                            <label for="fullName" class="label-default">Full Name</label>
                            <input type="text" name="fullName" id="fullName" class="input-default" required>
                        </div>

                        <div class="card-number">
                            <label for="" class="label-default">Address Line 1</label>
                            <input type="text" name="address1" id="address1" class="input-default" required>
                        </div>

                        <div class="card-number">
                            <label for="" class="label-default">Address Line 2</label>
                            <input type="text" name="address2" id="address2" class="input-default">
                        </div>

                        <div class="card-number">
                            <label for="" class="label-default">City</label>
                            <input type="text" name="city" id="city" class="input-default" required>
                        </div>

                        <div class="input-flex">
                            <div class="card-number">
                                <label for="state" class="label-default">State</label>
                                <!-- <input type="" name="state" id="state" class="input-default"> -->
                                <div class="dropdown-selector">
                                    <select name="state" id="state" class="input-default">
                                        <option value="">Select State</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="DC">District Of Columbia</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-number" style="width: 30%;">
                                <label for="zip" class="label-default">Zip Code</label>
                                <input type="number" name="zip" id="zip" class="input-default" required>
                            </div>
                        </div>
                        <div class="input-flex">
                            <div style="width: 40%;">
                                <label for="phone" class="label-default">Phone Number</label>
                                <!-- <input type="tel" name="phone" id="phone" class="input-default" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required> -->
                                <input type="tel" name="phone" id="phone" class="input-default" onInput="this.value = phoneFormat(this.value)" required />
                            </div>
                            <div style="width: 60%;">
                                <label for="email" class="label-default">Email</label>
                                <input type="email" id="email" class="input-default" required />
                            </div>
                        </div>

                        <!-- billing info same as shipping -->

                        <div class="billing-method">
                            <div class="method selected">
                                <button class="method selected">
                                    <ion-icon class="checkmark fill" name="checkbox"></ion-icon>
                                    <span>Billing same as shipping</span>
                                </button>
                            </div>
                        </div>
                        <div class="continueBtn">
                            <button class="btn btn-secondary" type="button" onclick="location.href='cart.php';">
                                <span>Back to Cart</span>
                            </button>
                            <button class="btn btn-primary" type="submit" onClick='checkout(userId)'>
                                <span>Submit Order</span>
                            </button>
                        </div>
                    </form>
                </div>
            </section>

            <!-- cart section -->
            <section class="cart" style="height: 30%;">
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
                            <span>Shipping fee</span> <span>$<span id="shipping">0.00</span></span>
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
    <script src="cart.js"></script>
    <script src="cart_v2.js?v=2"></script>
    <script src="header.js"></script>

</body>

</html>
