<!DOCTYPE html>
<html lang="en">
<head>
    <title>University Web Demo</title>
    <?php include('./partials/header.php') ?>
</head>
<body>
<section class="header">
    <?php include('./partials/navbar.php') ?>
    <div class="text-box">
        <h1>World's Biggest University</h1>
        <p>Making website is now one of the easiest thing in the world. You just need to learn HTML, CSS, <br>
            JavaScript and
            you are good to go.</p>
        <a href="" class="hero-btn">Visit Us to know more</a>
    </div>
</section>

<!--course-->
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

<!--campus-->
<section class="campus">
    <h1>Our Global Campus</h1>
    <p>Lorem ipsum dolr sit amet, contester adipisting edlit.</p>

    <div class="row">
        <div class="campus-col">
            <img src="images/london.png">
            <div class="layer">
                <h3>LONDON</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="images/newyork.png">
            <div class="layer">
                <h3>NEW YORK</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="images/washington.png">
            <div class="layer">
                <h3>WASHINGTON</h3>
            </div>
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

<!--testimonials-->
<section class="testimonial">
    <h1>What Our Student Says</h1>
    <p>Lorem ipsum dolr sit amet, contester adipisting edlit.</p>

    <div class="row">
        <div class="testimonial-col">
            <img src="images/user1.jpg">
            <div>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look like
                    readable English.
                </p>
                <h3>Chrisitine Berkley</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="testimonial-col">
            <img src="images/user2.jpg">
            <div>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look like
                    readable English.
                </p>
                <h3>David Byer</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
        </div>
    </div>
</section>

<!--Call To Action-->
<section class="cta">
    <h1>Enroll For Our Various Online Courses <br> Anywhere From The World</h1>
    <a href="contact.php" class="hero-btn">CONTACT US</a>
</section>

<?php include('partials/footer.php') ?>

</body>
</html>