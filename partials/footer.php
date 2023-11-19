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
    <p>Made with <i class="fa fa-heart"></i>  by Sandun Madhushan </p>
</section>


<script>
    <!--JavaScript for Toggle Menu-->
    let navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.right = "0";
    }

    function hideMenu() {
        navLinks.style.right = "-200px"
    }

    //     js for login popup
    document.querySelector("#show-login").addEventListener("click",function (){
        document.querySelector(".popup").classList.add("active");
    });
    document.querySelector(".popup .close-btn").addEventListener("click",function (){
        document.querySelector(".popup").classList.remove("active");
    });

</script>