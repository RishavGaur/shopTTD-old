<?php include "navbar.php"; ?>
<main class="register-page">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 px-5 register py-5">
                <div class="text-center">
                    <img src="images/TTD_logo_TM.png" alt="">
                    <h1 class="mt-4 mb-4">Welcome to ShopTTD</h1>
                </div>
                <form action="" method="post">
                    <div class="row names">
                        <div class="col-md-6">
                            <input type="text" placeholder="First Name" class="name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Last Name">
                        </div>
                    </div>
                    <input type="email" placeholder="Email Address" required>
                    <input type="text" placeholder="Phone Number" name="" id="" required>
                    <div class="row password">
                        <div class="col-md-6">
                            <input type="text" placeholder="Create password" class="password" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <p class="consent mt-4">Consent <sub
                            style="color:red;font-size:2rem;font-weight:500;">*</sub>
                    </p>
                    <div class="col-md-12 check mt-3 mb-4">
                        <div class="label"><input type="checkbox" name="" id="terms-cond" required></div>
                        <div class="label"><label for="terms-cond" style="font-size:0.9rem;">Yes, I agree with the <a href="" style="text-decoration:none;">Privacy Policy</a> and <a href="" style="text-decoration:none;">Terms & Conditions</a>.</label></div>
                    </div>
                    <button type="button" class="btn">Sign Me Up!</button>
                </form>
            </div>
            <div class="col-md-6 p-5 register-img">
                <img src="images/register.jpg" alt="">
            </div>
        </div>
    </div>
</main>