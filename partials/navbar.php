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
    <i class="fa fa-bars" onclick="showMenu()"></i>
</nav>

<!----------login popup ----------->
<div class="popup">
    <div class="close-btn">&times;</div>
    <div class="form">
        <h2>Log In</h2>
        <div class="form-element">
            <label for="email">Email</label>
            <input type="text" id="email" placeholder="Enter Email">
        </div>
        <div class="form-element">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter Password">
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
    </div>
</div>
