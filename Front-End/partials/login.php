<div class="form_container">
    <i class="material-symbols-rounded form_close">close</i>
    <div class="form login_form">
        <form action="login.php">
            <h2>Login</h2>
            <div class="input_box">
                <input type="email" placeholder="Enter your email" required /><i class="material-symbols-rounded email">mail</i>
            </div>
            <div class="input_box">
                <input type="password" placeholder="Enter your password" required /><i class="material-symbols-rounded password">lock</i>
                <i class="fa fa-eye-slash pw_hide"></i>
            </div>
            <div class="option_field">
                <span class="checkbox">
                    <input type="checkbox" id="check">
                    <label for="checkbox">Remember me</label>
                </span>
                <a href="#" class="forgot_pw">Forgot password?</a>
            </div>
            <button class="button">Login Now</button>
            <div class="login_signup">
                Don't have an account? <a href="#" id="signup">Signup</a>
            </div>
        </form>
    </div>

    <div class="form signup_form">
        <form action="signup-process.php" method="post">
            <h2>Signup</h2>
            <div class="input-flex">
                <div class="input_box">
                    <input type="text" id="first-name" placeholder="First name" required /><i class="material-symbols-rounded email">assignment_ind</i>
                </div>
                <div class="input_box">
                    <input type="text" id="last-name" placeholder="Last name" required /><i class="material-symbols-rounded email">assignment_ind</i>
                </div>
            </div>
            <div class="input_box">
                <input type="email" placeholder="Enter your email" required /><i class="material-symbols-rounded email">mail</i>
            </div>
            <div class="input_box">
                <input type="password" placeholder="Create password" required /><i class="material-symbols-rounded password">lock</i>
                <i class="fa fa-eye-slash pw_hide"></i>
            </div>
            <div class="input_box">
                <input type="password" placeholder="Confirm password" required /><i class="material-symbols-rounded password">lock</i>
                <i class="fa fa-eye-slash pw_hide"></i>
            </div>
            <button class="button">Signup Now</button>
            <div class="login_signup">
                Already have an account? <a href="#" id="login">Login</a>
            </div>
        </form>
    </div>
</div>

<script src="login.js"></script>
