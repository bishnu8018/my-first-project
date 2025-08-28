<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>
<header>
    <div id="header2" class="header2-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="header-top-left">
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:+1234567890"> 9556680147, 8456879522 </a></li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i><a
                                        href="#">info@besteducation.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                        <div class="header-top-right">
                            <!-- <ul>
                                <li>
                                    <a class="login-btn-area" href="#" id="login-button"><i class="fa fa-lock" aria-hidden="true"></i> Login</a>
                                            <div class="login-form" id="login-form" style="display: none;">
                                                <div class="title-default-left-bold">Login</div>
                                                <form>
                                                    <label>Username or email address *</label>
                                                    <input type="text" placeholder="Name or E-mail">
                                                    <label>Password *</label>
                                                    <input type="password" placeholder="Password">
                                                    <label class="check">Lost your password?</label>
                                                    <span><input type="checkbox" name="remember">Remember Me</span>
                                                    <button class="default-big-btn" type="submit" value="Login">Login</button>
                                                    <button class="default-big-btn form-cancel" type="submit" value="">Cancel</button>
                                                </form>
                                            </div>

                                    <ul class="header-social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="apply-btn-area">
                                        <a href="#" class="apply-now-btn">Apply Now</a>
                                    </div>
                                </li>
                            </ul> -->
                        <div class="head-btn">
                            <div>
                            <a href="scholarship.php" class="top-head-btn">🎓Scholarship</a>
                        </div>
                        <div>
                            <a href="#" class="top-head-btn">Mandatory DIsclosure</a>
                        </div>
                        <div>
                            <a href="training.php" class="top-head-btn">TRAINING & PLACEMENT</a>
                        </div>
                        <div>
                            <a href="login.php" class="top-head-btn">Login</a>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu-area bg-textPrimary" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-5">
                        <div class="logo-area">
                            <a href="index.php"><img class="img-responsive" src="img/logo/logo-b.png" alt="logo"
                                    width="40%;"><img class="img-responsive" src="img/logo/main-logo 1.png" alt="logo"
                                    width="60%;"></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-7">
                        <nav id="desktop-nav">
                            <ul>
                                <li class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>"><a
                                        href="index.php">Home</a>
                                </li>
                                <li
                                    class="<?= ($currentPage == 'about.php' || $currentPage == 'chairman-msg.php' || $currentPage == 'leadership.php' || $currentPage == 'achievements.php') ? 'active' : '' ?>">
                                    <a href="#">About</a>
                                    <!-- <ul class="mega-menu-area">
                                                <li>
                                                    <a href="about1.html.htm">About 1</a>
                                                    <a href="about2.html.htm">About 2</a>
                                                    <a href="about3.html.htm">About 3</a>
                                                    <a href="about4.html.htm">About 4</a>
                                                </li>
                                                <li>
                                                    <a href="lecturers1.html.htm">lecturers 1</a>
                                                    <a href="lecturers2.html.htm">lecturers 2</a>
                                                    <a href="single-lecturers.html.htm">lecturers Details</a>
                                                    <a href="pricing1.html.htm">Pricing Plan 1</a>
                                                </li>
                                                <li>
                                                    <a href="pricing2.html.htm">Pricing Plan 2</a>
                                                    <a href="shop1.html.htm">Shop 1</a>
                                                    <a href="shop2.html.htm">Shop 2</a>
                                                    <a href="single-shop.html.htm">Shop Details</a>
                                                </li>
                                                <li>
                                                    <a href="account.html.htm">Account</a>
                                                    <a href="registration.html.htm">Registration</a>
                                                    <a href="faq.html.htm">Faq</a>
                                                    <a href="404.html.htm">404 Error</a>
                                                </li>
                                            </ul> -->
                                    <ul>
                                        <li><a href="about.php">About Institute</a></li>
                                        <li><a href="document/BEST-IDP.pdf">IDP</a></li>
                                        <li><a href="chairman-msg.php">Chairman's Message</a></li>
                                        <li><a href="secretray_note.php">Co-Founder & Secretary's Note</a></li>
                                        <li><a href="leadership.php">Leadership</a></li>
                                        <li><a href="achivement.php">Achievements</a></li>
                                        <li><a href="#">Accreditations</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Insights</a>
                                    <ul>
                                        <li><a href="career.php">Career</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="newsletter.php">Newsletter</a></li>
                                        <!-- <li><a href="#">Polytechnic</a></li> -->
                                    </ul>
                                </li>
                                <li><a href="academic.php">Academics</a>
                                    <ul>
                                                <li><a href="bba.php">BBA</a></li>
                                                <li><a href="bca.php">BCA</a></li>
                                                <!-- <li><a href="#">Research 3</a></li>
                                                <li><a href="#">Research Details</a></li> -->
                                            </ul>
                                </li>
                                <li><a href="admission.php">Admissions</a>
                                    <!-- <ul>
                                                <li class="has-child-menu"><a href="#">News</a>
                                                    <ul class="thired-level">
                                                        <li><a href="news1.html.htm">News 1</a></li>
                                                        <li><a href="news2.html.htm">News 2</a></li>
                                                        <li><a href="single-news.html.htm">News Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-child-menu"><a href="#">Event</a>
                                                    <ul class="thired-level">
                                                        <li><a href="event.html.htm">Event</a></li>
                                                        <li><a href="single-event.html.htm">Event Details</a></li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                </li>
                                <li><a href="campus.php">Green Campus</a></li>
                                <!-- <li><a href="career.php">Career</a></li> -->
                                <li class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>"><a
                                        href="contact.php">Contact</a>
                                    <!-- <ul>
                                                <li><a href="contact1.html.htm">Contact 1</a></li>
                                                <li><a href="contact2.html.htm">Contact 2</a></li>
                                            </ul> -->
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- <div class="col-xl-1 col-lg-1 d-none d-lg-block">
                                <div class="header-search">
                                    <form>
                                        <input type="text" class="search-form" placeholder="Search...." required="">
                                        <a href="#" class="search-button" id="search-button"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    </form>
                                </div>
                            </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area Start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li class="active"><a href="index.php">Home</a>
                                </li>
                                <li><a href="#">About</a>
                                    
                                    <ul>
                                        <li><a href="about.php">About Institute</a></li>
                                        <!-- <li><a href="#">Vision & Mission</a></li> -->
                                        <li><a href="chairman-msg.php">Chairman's Message</a></li>
                                        <li><a href="secretray_note.php">Co-Founder & Secretary's Note</a></li>
                                        <li><a href="leadership.php">Leadership</a></li>
                                        <li><a href="achivement.php">Achievements</a></li>
                                        <li><a href="#">Accreditations</a></li>
                                    </ul>
                                </li>
                                
                                <li><a href="#">Insights</a>
                                    <ul>
                                        <li><a href="career.php">Career</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="newsletter.php">Newsletter</a></li>
                                        <!-- <li><a href="#">Polytechnic</a></li> -->
                                    </ul>
                                </li>
                                <li><a href="academic.php">Academics</a>
                                    <ul>
                                        <li><a href="bba.php">BBA</a></li>
                                        <li><a href="bca.php">BCA</a></li>
                                        <!-- <li><a href="#">Research 3</a></li>
                                        <li><a href="#">Research Details</a></li> -->
                                    </ul>
                                </li>
                                <li><a href="admission.php">Admissions</a></li>

                                <li><a href="campus.php">Green Campus</a></li>

                                <li><a href="contact.php">Contact</a></li>

                                <li>
                                <a href="scholarship.php"><span class="menu-button">🎓Scholarship</span></a>
                                </li>

                                <li>
                                    <a href="#"><span class="menu-button">Mandatory DIsclosure</span></a>
                                </li>

                                <li>
                                    <a href="training.php"><span class="menu-button">TRAINING & PLACEMENT</span></a>
                                </li>

                                <li>
                                    <a href="#"><span class="menu-button">Login</span></a>
                                </li>
                       
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area End -->
</header>