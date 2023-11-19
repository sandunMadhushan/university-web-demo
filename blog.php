<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Web Demo</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section class="subheader">
    <nav>
        <a href="index.php"> <img src="images/logo.png"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="course.php">COURSE</a></li>
                <li><a href="blog.html">BLOG</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1>Our Certificate & Online Programs For 2023</h1>
</section>

<!----blog page content----->
<section class="blog-content">
    <div class="row">
        <div class="blog-left">
            <img src="images/certificate.jpg">
            <h2>Our Certificate & Online Programs For 2023</h2>
            <p>Lorem ipsum dolr sit amet, contester adipisting edlit.Lorem ipsum dolr sit amet, contester adipisting
                edlit.Lorem ipsum dolr sit amet, contester adipisting edlit.Lorem i</p>
            <br>
            <p>Lorem ipsum dolr sit amet, contester adipisting edlit.Lorem ipsum dolr sit amet, contester adipisting
                edlit.Lorem ipsum dolr sit amet, contester adipisting edlit.Lorem ipsum dolr sit amet, contester
                adipisting edlit.Lorem ipsum dolr sit amet, contester adipisting edlit.Lorem ipsum dolr sit amet,
                contester adipisting edlit.Lorem ipsum dolr sit amet, contester adipisting edlit</p>
            <br>
            <p>Lorem ipsum dolr sit amet, contester adipisting edlit.Lorem ipsum dolr sit amet, contester adipisting
                edlit.Lorem ipsum dolr sit amet, contester adipisting edlit.Lorem ipsum dolr sit amet, contester
                adipisting edlit.Lorem ipsum dolr sit amet, contester adipisting edlit.Lorem ipsum dolr sit amet,
                contester adipisting edlit.Lorem ipsum dolr sit amet, contester adipisting edlit.Lorem ipsum dolr sit
                amet, contester adipisting edlit.Lorem ipsum dolr sit amet, contester adipisting edlit.Lorem ipsum dolr
                sit amet,
                contester adipisting edlit.Lorem ipsum dolr sit amet, contester adipisting edlit</p>
            <br>
            <p>Lorem ipsum dolr sit amet, contester adipisting edlit.Lorem ipsum dolr sit amet, contester adipisting
                edlit.Lorem ipsum dolr sit amet, contester adipisting edlit.Lorem ipsum dolr sit amet, contester
                adipisting edlit.Lorem ipsum dolr sit amet, contester adipisting edlit.Lorem ipsum dolr sit amet,
                contester adipisting edlit.Lorem ipsum dolr sit amet, contester adipisting edlit.Lorem ipsum dolr sit
                amet, contester adipisting edlit.Lorem ipsum dolr sit amet, contester adipisting edlit.Lorem ipsum dolr
                sit amet,
                contester adipisting edlit.Lorem ipsum dolr sit amet, contester adipisting edlit.Lorem ipsum dolr sit
                amet, contester adipisting edlit.Lorem ipsum dolr sit amet, contester adipisting edlit.Lorem ipsum dolr
                sit amet,
                contester adipisting edlit.Lorem ipsum dolr sit amet, contester adipisting edlit</p>

            <div class="comment-box">
                <h3>Leave a comment</h3>
                <form class="comment-form">
                    <input type="text" placeholder="Enter Name">
                    <input type="email" placeholder="Enter Email">
                    <textarea rows="5" placeholder="Your comment"></textarea>
                    <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
                </form>
            </div>
        </div>
        <div class="blog-right">
            <h3>Post Categories</h3>
            <div>
                <span> Business Analytics</span>
                <span>21</span>
            </div>
            <div>
                <span> Machine Learning</span>
                <span>28</span>
            </div>
            <div>
                <span> Computer Science</span>
                <span>15</span>
            </div>
            <div>
                <span> Data Science</span>
                <span>19</span>
            </div>
            <div>
                <span> AutoCAD</span>
                <span>42</span>
            </div>
            <div>
                <span> Journalism</span>
                <span>22</span>
            </div>
            <div>
                <span> Commerce</span>
                <span>30</span>
            </div>
        </div>
    </div>
</section>


<!--Footer-->
<section class="footer">
    <h4>About Us</h4>
    <p>Lorem ipsum dolr sit amet, contester adipisting edlit.Lorem ipsum dolr sit amet, contester adipisting edlit.Lorem
        ipsum dolr sit amet, <br>contester adipisting edlit. Lorem ipsum dolr sit amet, contester adipisting edlit</p>
    <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
    </div>
    <p>Made with <i class="fa fa-heart"></i> by Sandun Madhushan </p>
</section>

<!--JavaScript for Toggle Menu-->
<script>

    let navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.right = "0";
    }

    function hideMenu() {
        navLinks.style.right = "-200px"
    }

</script>
</body>
</html>