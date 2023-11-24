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
            <li><a href="accountdash.php" class="material-symbols-rounded" id="active">account_circle</a></li>
            <li><a href="cart.php" class="material-symbols-rounded">shopping_cart</a></li>
            <li><button id="form_open" class="material-symbols-rounded">login</button></li>
        </ul>
    </header>

    <!-- popup login -->
    <section class="login">
        <?php include('./partials/login.php') ?>
    </section>

    <!-- account dashboard -->
    <section class="account-dashboard" style="margin-top: 75px;">
        <nav>
            <ul class="account-navbar">
                <li><a href="#order-history" class="link">Orders</a></li>
                <!-- <span class="nav-separator">|</span> -->
                <li><a href="#profile-manager" class="link">Profile Manager</a></li>
                <!-- <span class="nav-separator">|</span> -->
                <li><a href="#account-setting" class="link">Account Settings</a></li>
            </ul>
        </nav>

        <div class="dashboard">
            <div class="main-dash">
                <!-- <h3>Account Dashboard</h3> -->

                <div class="dash-order-history">
                    <h3 id="order-history">Order History</h3>
                    <div class="order-history">
                        <div class="order-list">
                            <h4 id="order_date">11/10/2023</h4>
                            <div class="input-flex">
                                <!-- image of item ordered -->
                                <img src="./img/products/pencil 1.jpg" alt="Kalour Professional Sketching Pencils 12pc" width="200px">

                                <div class="order-list-detail input-flex">
                                    <div class="order-detail">
                                        <!-- generate order number in invrements of 1 using id="order_id" -->
                                        <a href="orderconf.php"><span class="detail-header">Order ID: <span id="order_num">00000001</span></span></a><br>
                                        <span class="sub-detail">Items ordered: <span id="num_items">2</span></span><br>
                                        <!-- ID same as cart, shipping & order confirmation page -->
                                        <span class="sub-detail">Total: $<span id="total">19.17</span></span><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-history">
                        <div class="order-list">
                            <h4 id="order_date">11/13/2023</h4>
                            <div class="input-flex">
                                <!-- image of item ordered -->
                                <img src="./img/products/acrylic 1a.jpg" alt="Acrylic Gouache Set Primaries" width="200px">

                                <div class="order-list-detail input-flex">
                                    <div class="order-detail">
                                        <!-- generate order number in invrements of 1 using id="order_id" -->
                                        <a href="orderconf.php"><span class="detail-header">Order ID: <span id="order_num">00000002</span></span></a><br>
                                        <span class="sub-detail">Items ordered: <span id="num_items">1</span></span><br>
                                        <!-- ID same as cart, shipping & order confirmation page -->
                                        <span class="sub-detail">Total: $<span id="total">79.88</span></span><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dash-profile-manager">
                    <h3 id="profile-manager">Profile Manager</h3>
                    <div class="profile-dash">
                        <div class="profile-header input-flex">
                            <h4>User Info</h4>
                            <div class="user-detail">
                                <!-- retreive first and last name data from signup -->
                                <div class="input-flex">
                                    <div style="width: 60%;">
                                        <label for="first-name" class="label-default">First name</label>
                                        <input type="text" id="first-name" value="Palette" readonly>
                                    </div>
                                    <div style="width: 60%;">
                                        <label for="last-name" class="label-default">Last name</label>
                                        <input type="text" id="last-name" value="Paradise" readonly>
                                    </div>
                                </div>
                                <label for="email" class="label-default">Email</label>
                                <input type="email" id="email" value="palette.paradise@gmail.com" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="section-p1">
        <?php include('./partials/footer.php') ?>
        <div class="citations">
            <cite>Web icon by <a href="https://www.flaticon.com/authors/darius-dan">Flaticon</a></cite>
        </div>
    </footer>

</body>

</html>
