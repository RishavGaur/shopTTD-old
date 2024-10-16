<?php include "navbar.php"; ?>
<main class="login-page">
    <div class="container mt-4 pb-5">
        <div class="row">
            <div class="col-md-6 p-5 login-img">
                <img src="images/login.jpg" alt="">
            </div>
            <div class="col-md-6 px-5 login py-5">
                <div class="text-start">
                    <img src="images/TTD_logo_TM.png" alt="">
                    <h1 class="mt-4 mb-4 text-center">Login</h1>
                </div>
                <form action="" method="post">
                    <input type="email" placeholder="Enter Your Email Address" required>
                    <input type="text" placeholder="Enter Your Password" name="" id="" required>
                    <div class="col-md-12 check mt-3 mb-4">
                        <div class="label"><input type="checkbox" name="" id="terms-cond" required></div>
                        <div class="label"><label for="terms-cond" style="font-size:0.9rem;">Remember Password</label></div>
                    </div>
                    <div class="text-center"><button type="button" class="btn btn-primary">Login</button></div>
                </form>
            </div>
        </div>
    </div>
</main>