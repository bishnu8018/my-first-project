<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Best Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'includes/css.php';?>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
        <?php include 'includes/header.php';?>
        <!-- Header Area End Here -->
        <!-- Inner Page Banner Area Start Here -->
        <div class="inner-page-banner-area" style="background-image: url('img/banner/inner-banner.jpg');">
            <div class="container">
                <div class="pagination-area">
                    <h1>Login</h1>
                    <ul>
                        <li><a href="index.php">Home</a> -</li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->


        <!-- Login Area Start Here -->
<div class="login-container">
    <h2>Login</h2>
    <form id="loginForm">
        <input type="email" id="email" placeholder="Email ID" required>
        <input type="password" id="password" placeholder="Password" required>
        <button type="button" class="forget-password btn-login" onclick="forgetPassword()">Forget Password</button>
        <button type="submit" class="login-btn btn-login">Login</button>
    </form>
</div>

<!-- Modal -->
<div id="modal" class="modal">
    <div class="modal-content" id="modalContent">
        <span class="close" onclick="closeModal()">&times;</span>
        <h3 id="modalMessage">Message</h3>
    </div>
</div>
        <!-- Login Area End Here -->



        <!-- Why Choose Area End Here -->

        <?php include 'includes/footer.php';?>
        <!-- Footer Area End Here -->
    </div>
    <!-- Preloader Start Here -->
    <!-- <div id="preloader"></div> -->
    <!-- Preloader End Here -->

<script>
    const modal = document.getElementById('modal');
    const modalMessage = document.getElementById('modalMessage');

    function showModal(message) {
        modalMessage.innerText = message;
        modal.style.display = "flex";
    }

    function closeModal() {
        modal.style.display = "none";
    }

    function forgetPassword() {
        const autoPassword = Math.random().toString(36).slice(-8);
        document.getElementById('password').value = autoPassword;
        showModal("Your password has been auto-filled !!");
    }

    document.getElementById('loginForm').addEventListener('submit', function(event){
        event.preventDefault(); 
        showModal("Login Successful !!");
    });
</script>
    <?php include 'includes/js.php';?>
</body>

</html>