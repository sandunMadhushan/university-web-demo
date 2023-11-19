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
                <li><a href="course.html">COURSE</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1>Our Courses</h1>
</section>

<!------------- Course content --------->
<section class="course">
    <h1>Courses We Offer</h1>
    <p>Lorem ipsum dolr sit amet, contester adipisting edlit.</p>

    <div class="row">
        <div class="course-col">
            <h3>Intermediate</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
        </div>

        <div class="course-col">
            <h3>Degree</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
        </div>

        <div class="course-col">
            <h3>Post Graduation</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
        </div>
    </div>
</section>

<!--facilities-->
<section class="facilities">
    <h1>Our Facilities</h1>
    <p>Lorem ipsum dolr sit amet, contester adipisting edlit.</p>

    <div class="row">
        <div class="facilities-col">
            <img src="images/library.png">
            <h3>World Class Library</h3>
            <p>Lorem ipsum dolr sit amet, contester adipisting edlit.</p>
        </div>
        <div class="facilities-col">
            <img src="images/basketball.png">
            <h3>Largest Play Ground</h3>
            <p>Lorem ipsum dolr sit amet, contester adipisting edlit.</p>
        </div>
        <div class="facilities-col">
            <img src="images/cafeteria.png">
            <h3>Tasty and Healthy Food</h3>
            <p>Lorem ipsum dolr sit amet, contester adipisting edlit.</p>
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