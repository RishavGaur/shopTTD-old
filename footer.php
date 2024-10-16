<!--	   footer-->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="footer-logo">
                        <img src="images/TTD_logo_TM.png" alt="" width="100">
                    </div>
                    <div class="footer-address">
                        <p>To The Digital<br>

                            A302, NX One, Greater Noida West, U.P</p>
                        <p><strong>Phone:</strong> +91 8826686001</p>
                        <p><strong>Email:</strong> support@tothedigital.com</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="footer-product">
                        <h5>Our Products</h5>
                        <ul>
                            <li><a href="clocks.html">Luxury Handcrafted Wall Clock</a></li>
                            <li><a href="#product">Domestic and Commercial Lights</a></li>
                            <li><a href="terms.php">Terms & Conditions</a></li>
                            <li><a href="privacy.php">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="follow-us" id="followUs">
                        <div class="subscribe">
                            <h5 class="subscribe-title">Subscribe our Newsletter
                            </h5>
                            <input type="email" name="newsletter" id="newsLetter" class="newsletter"
                                placeholder="Email Address">
                            <button class="subscribe-btn">Subscribe Now</button>
                        </div>
                        <div class="social">
                            <h6>Follow US</h6>
                            <p>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--	  scroll-to-top -->

<a onclick="topFunction()" id="myBtn" href="#home" class="sticky-bottom scroll-to-to"><i
        class="bi bi-arrow-up-circle-fill"></i></a>

<script>
    // Get the button:
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    } 
</script>
<!--	  Bootstrap JS -->
<script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>

</html>