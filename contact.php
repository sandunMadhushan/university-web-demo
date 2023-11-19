<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact - University Web Demo</title>
    <?php include('./partials/header.php') ?>
</head>
<body>
<section class="subheader">
    <?php include('./partials/navbar.php') ?>
    <h1>Contact Us</h1>
</section>

<!-------contact us----->

<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.58637923934!2d79.77397415515912!3d6.922002011883743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1700300261413!5m2!1sen!2slk"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fa fa-home"></i>
                <span>
                <h5>XYZ Road, ABC Building</h5>
                <p>Colombo, Sri Lanka</p>
            </span></div>

            <div>
                <i class="fa fa-phone"></i>
                <span>
                <h5>+94 112 234 567</h5>
                <p>Monday to Saturday, 9AM to 5PM</p>
            </span>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <span>
                <h5>info@abc.com</h5>
                <p>Email us your query</p>
            </span>
            </div>
        </div>
        <div class="contact-col">
            <form action="form-handler.php" method="post">
                <input type="text" name="name" placeholder="Enter Your Name" required>
                <input type="email" name="email" placeholder="Enter Email Address" required>
                <input type="text" name="subject" placeholder="Enter Your Subject" required>
                <textarea rows="8" name="message" placeholder="Message" required></textarea>
                <button type="submit" class="hero-btn red-btn">Send Message</button>
            </form>
        </div>
</section>

<?php include('partials/footer.php') ?>

</body>
</html>