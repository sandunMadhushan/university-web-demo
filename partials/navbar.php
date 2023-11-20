<nav>
    <a href="index.php"> <img src="images/logo.png"></a>
    <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="course.php">COURSE</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </div>
    <div class="center"><button id="show-login">LOGIN</button></div>
    <div class="center-reg"><button id="show-register">REGISTER</button></div>
    <i class="fa fa-bars" onclick="showMenu()"></i>
</nav>

<!----------login popup ----------->
<div class="popup">
    <div class="close-btn">&times;</div>
    <div class="form">
        <h2>Log In</h2>
        <form action="" method="post">
        <div class="form-element">
            <label for="email">Email</label>
            <input type="text" id="email" placeholder="Enter Email" name="email">
        </div>
        <div class="form-element">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter Password" name="password">
        </div>
        <div class="form-element">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
        </div>
        <div class="form-element">
            <button>Sign In</button>
        </div>
        <div class="form-element">
            <a href="#">Forgot Password?</a>
        </div>
            <div class="register-acc">
                <a href="#"> Don't have an account? </a>
            </div>
        </form>
    </div>
</div>

<!----------register popup ----------->
<div class="popup-reg">
    <div class="close-btn">&times;</div>
    <div class="form">
        <h2>Register</h2>
        <form action="/connect.php" method="post">
            <div class="form-element">
                <label for="first-name">First Name</label>
                <input type="text" id="f-name" placeholder="Enter First Name" name="f-name">
            </div>
            <div class="form-element">
                <label for="last-name">Last Name</label>
                <input type="text" id="l-name" placeholder="Enter Last Name" name="l-name">
            </div>
            <div class="form-element">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Enter Email" name="email">
            </div>
            <div class="form-element">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter Password" name="password">
            </div>
            <div class="form-element">
                <button>Sign Up</button>
            </div>
            <div class="register-acc">
                <a href="#"> Already have an account? </a>
            </div>
        </form>
    </div>
</div>
