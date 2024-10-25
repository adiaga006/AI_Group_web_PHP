<div class="footer-area pt-3 bg-white mb-5">
    <div class="container-fluid">
        <div class="row">
            <!-- Logo Section -->
            <div class="col-md-4">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo_2.png" height="150" alt="Logo">
                </a>
                <p class="mt-3">@AquaLab - AI research group at Nong Lam University</p>
            </div>
            
            <!-- Useful Links Section -->
            <div class="col-md-2">
                <h4>Useful Links</h4>
                <ul class="use-links">
                <li><a href="index.php"><i class="fa-solid fa-angles-right"></i> Home</a></li>
                <li><a href="news.php"><i class="fa-solid fa-angles-right"></i> News</a></li>
                <li><a href="about-us.php"><i class="fa-solid fa-angles-right"></i> About Us</a></li>
                <li><a href="contact-us.php"><i class="fa-solid fa-angles-right"></i> Contact Us</a></li>
                </ul>
            </div>

            <!-- Social Links Section -->
            <div class="col-md-2">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <a href="#" class="text-dark">
                        <i class="fab fa-facebook"></i> Facebook
                    </a><br>
                    <a href="#" class="text-dark">
                        <i class="fab fa-instagram"></i> Instagram
                    </a><br>
                    <a href="#" class="text-dark">
                        <i class="fab fa-linkedin"></i> Linkedin
                    </a>
                </div>
            </div>

            <!-- Address Section -->
            <div class="col-md-4">
                <h4>Address</h4>
                <ul class="list-unstyled">
                    <li><i class="fas fa-map-marker-alt"></i> Nong Lam University</li>
                    <li><i class="fas fa-phone-alt"></i> +0766 777 985</li>
                    <li><i class="fas fa-envelope"></i> AI@gmail.com</li>
                </ul>
            </div>
        </div>

        <div class="text-center mt-4">
            <p>CopyRight by <a href="https://news.aquacultureintel.com/">Research AI Group</a> | Design and Developer <a href="https://www.facebook.com/ndd1411/">Nguyễn Đình Duy</a> | All Rights Reserved © <?php echo "20".date("y"); ?></p>
        </div>
    </div>
</div>

<style>
.footer-area {
    padding-top: 20px;
    background-color: #f7f7f7;
}

.footer-area h4 {
    font-weight: bold;
    margin-bottom: 15px;
}

.footer-area .navbar-brand img {
    max-width: 100%;
}

.footer-area ul {
    padding-left: 0;
}

.footer-area ul li {
    list-style: none;
    margin-bottom: 10px;
    font-size: 16px;
    color: #666;
}

.footer-area ul li i {
    margin-right: 10px;
    color: #82074a;
}

.social-icons a {
    display: block;
    color: #666;
    text-decoration: none;
    margin-bottom: 10px;
    font-size: 16px;
}

.social-icons a i{
	box-shadow: rgb(0 0 0 / 8%) 0px 4px 12px;
    padding: 0.4rem 1rem 0.4rem 1rem;
    border-radius: 3px;
    color: #82074a;
	font-size: 16px;
	margin-right: 12px;
}
.useful-link h2{
	padding-bottom: 15px;
	font-size: 20px;
    font-weight: 600;
}
.useful-link img{
	padding-bottom: 15px;
}
.social-icons a:hover {
    color: #000;
}
.use-links{
	line-height: 32px;
}
.use-links li i{
	font-size: 14px;
    padding-right: 8px;
    color: #898989;
}
.use-links li a{
	color: #303030;
    font-size: 15px;
    font-weight: 500;
	color: #777777;
}
.use-links li a:hover{
	color: #000;
}
</style>
