<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Clasifico - HTML 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/nice-select.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


       <?php include "header.php"; ?>
        <!-- Page Title -->
        <section class="page-title" style="background-image: url(carbk.jpg);">
            <div class="auto-container">
                <div class="content-box centred">
                    <div class="title">
                        <h1>Service Provider Details</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Service Provider Details</li>
                    </ul>
                </div>
                <div class="search-box-inner">
                    <form action="index.html" method="post">
                        <div class="input-inner clearfix">
                            <div class="form-group">
                                <i class="icon-2"></i>
                                <input type="search" name="name" placeholder="Search Keyword..." required="">
                            </div>
                            <div class="form-group">
                                <i class="icon-3"></i>
                                <select class="wide">
                                   <option data-display="Select Location">Select Location</option>
                                   <option value="1">California</option>
                                   <option value="2">New York</option>
                                   <option value="3">Sun Francis</option>
                                   <option value="4">Shicago</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <i class="icon-4"></i>
                                <select class="wide">
                                   <option data-display="Select Category">Select Category</option>
                                   <option value="1">Education</option>
                                   <option value="2">Restaurant</option>
                                   <option value="3">Real Estate</option>
                                   <option value="4">Home Appliances</option>
                                </select>
                            </div>
                            <div class="btn-box">
                                <button type="submit"><i class="icon-2"></i>Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- stores-details -->
        <section class="category-details stores-details bg-color-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar category-sidebar">
                            <div class="ads-agency sidebar-widget">
                                <div class="upper-box">
                                    <figure class="icon-box"><img src="assets/images/icons/stores-4.png" alt=""></figure>
                                    <h4>Ads agency</h4>
                                    <ul class="rating clearfix">
                                        <li><i class="icon-17"></i></li>
                                        <li><i class="icon-17"></i></li>
                                        <li><i class="icon-17"></i></li>
                                        <li><i class="icon-17"></i></li>
                                        <li><i class="icon-17"></i></li>
                                    </ul>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet consectur adipisicing sed do eiusmod tempor incididunt labore.</p>
                                    <ul class="info clearfix">
                                        <li><i class="fas fa-map-marker-alt"></i><span>Address:</span> G87P, Birmingham, UK</li>
                                        <li><i class="far fa-clock"></i><span>Member Since:</span> October 17, 2016</li>
                                    </ul>
                                    <div class="phone-box">
                                        <p>Click to reval phone number</p>
                                        <a href="tel:5723379XXX"><i class="fas fa-phone"></i> 572-337-9XXX</a>
                                    </div>
                                </div>
                            </div>
                            <div class="about-store sidebar-widget">
                                <div class="content-box">
                                    <h3>About Store</h3>
                                    <p>Lorem ipsum dolor sit amet consectur adip sicing sed do eiusmod tempor incididunt labore dolore magna.</p>
                                    <ul class="social-links clearfix">
                                        <li><a href="stores-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="stores-details.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="stores-details.html"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="stores-details.html"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="stores-details.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="map-widget sidebar-widget">
                                <div class="map-content">
                                    <div class="contact-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55945.16225505631!2d-73.90847969206546!3d40.66490264739892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1601263396347!5m2!1sen!2sbd"></iframe>
                                    </div>
                                    <p><i class="fas fa-map-marker-alt"></i><span>Address:</span> G87P, Birmingham, UK</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="category-details-content">
                            <div class="item-shorting clearfix">
                                <div class="text pull-left">
                                    <p><span>Search Reasults:</span> Showing 1-6 of 20 Listings</p>
                                </div>
                                <div class="right-column pull-right clearfix">
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="Sort by: Default">Sort by: Default</option>
                                           <option value="1">Default Sort 01</option>
                                           <option value="2">Default Sort 02</option>
                                           <option value="3">Default Sort 03</option>
                                           <option value="4">Default Sort 04</option>
                                        </select>
                                    </div>
                                    <div class="menu-box">
                                        <button class="list-view"><i class="icon-31"></i></button>
                                        <button class="grid-view on"><i class="icon-30"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="category-block wrapper grid">
                                <div class="list-item feature-style-three">
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/feature-15.jpg" alt=""></figure>
                                                <div class="feature-2">Featured</div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="category"><i class="fas fa-tags"></i><p>Electronics</p></div>
                                                <h4><a href="browse-ads-details.html">Villa on Grand Avenue</a></h4>
                                                <ul class="rating clearfix">
                                                    <li><i class="icon-17"></i></li>
                                                    <li><i class="icon-17"></i></li>
                                                    <li><i class="icon-17"></i></li>
                                                    <li><i class="icon-17"></i></li>
                                                    <li><i class="icon-17"></i></li>
                                                    <li><a href="index.html">(32)</a></li>
                                                </ul>
                                                <ul class="info clearfix">
                                                    <li><i class="far fa-clock"></i>1 months ago</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</li>
                                                </ul>
                                                <div class="lower-box">
                                                    <h5><span>Start From:</span> $3,000.00</h5>
                                                    <ul class="react-box">
                                                        <li><a href="index.html"><i class="icon-21"></i></a></li>
                                                        <li><a href="index.html"><i class="icon-22"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/feature-16.jpg" alt=""></figure>
                                                <div class="feature-2">Featured</div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="category"><i class="fas fa-tags"></i><p>Electronics</p></div>
                                                <h4><a href="browse-ads-details.html">Villa on Grand Avenue</a></h4>
                                                <ul class="rating clearfix">
                                                    <li><i class="icon-17"></i></li>
                                                    <li><i class="icon-17"></i></li>
                                                    <li><i class="icon-17"></i></li>
                                                    <li><i class="icon-17"></i></li>
                                                    <li><i class="icon-17"></i></li>
                                                    <li><a href="index.html">(25)</a></li>
                                                </ul>
                                                <ul class="info clearfix">
                                                    <li><i class="far fa-clock"></i>2 months ago</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</li>
                                                </ul>
                                                <div class="lower-box">
                                                    <h5><span>Start From:</span> $2,000.00</h5>
                                                    <ul class="react-box">
                                                        <li><a href="index.html"><i class="icon-21"></i></a></li>
                                                        <li><a href="index.html"><i class="icon-22"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/feature-17.jpg" alt=""></figure>
                                                <div class="feature-2">Featured</div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="category"><i class="fas fa-tags"></i><p>Electronics</p></div>
                                                <h4><a href="browse-ads-details.html">Villa on Grand Avenue</a></h4>
                                                <ul class="rating clearfix">
                                                    <li><i class="icon-17"></i></li>
                                                    <li><i class="icon-17"></i></li>
                                                    <li><i class="icon-17"></i></li>
                                                    <li><i class="icon-17"></i></li>
                                                    <li><i class="icon-17"></i></li>
                                                    <li><a href="index.html">(32)</a></li>
                                                </ul>
                                                <ul class="info clearfix">
                                                    <li><i class="far fa-clock"></i>6 months ago</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</li>
                                                </ul>
                                                <div class="lower-box">
                                                    <h5><span>Start From:</span> $3,200.00</h5>
                                                    <ul class="react-box">
                                                        <li><a href="index.html"><i class="icon-21"></i></a></li>
                                                        <li><a href="index.html"><i class="icon-22"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/feature-18.jpg" alt=""></figure>
                                                <div class="feature-2">Featured</div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="category"><i class="fas fa-tags"></i><p>Electronics</p></div>
                                                <h4><a href="browse-ads-details.html">Villa on Grand Avenue</a></h4>
                                                <ul class="rating clearfix">
                                                    <li><i class="icon-17"></i></li>
                                                    <li><i class="icon-17"></i></li>
                                                    <li><i class="icon-17"></i></li>
                                                    <li><i class="icon-17"></i></li>
                                                    <li><i class="icon-17"></i></li>
                                                    <li><a href="index.html">(32)</a></li>
                                                </ul>
                                                <ul class="info clearfix">
                                                    <li><i class="far fa-clock"></i>7 months ago</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</li>
                                                </ul>
                                                <div class="lower-box">
                                                    <h5><span>Start From:</span> $3,500.00</h5>
                                                    <ul class="react-box">
                                                        <li><a href="index.html"><i class="icon-21"></i></a></li>
                                                        <li><a href="index.html"><i class="icon-22"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/feature-1.jpg" alt=""></figure>
                                                        <div class="shape"></div>
                                                        <div class="feature">Featured</div>
                                                        <div class="icon">
                                                            <div class="icon-shape"></div>
                                                            <i class="icon-16"></i>
                                                        </div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="author-box">
                                                            <div class="inner">
                                                                <img src="assets/images/resource/author-1.png" alt="">
                                                                <h6>Michael Bean<i class="icon-18"></i></h6>
                                                                <span>For sell</span>
                                                            </div>
                                                        </div>
                                                        <div class="category"><i class="fas fa-tags"></i><p>Electronics</p></div>
                                                        <h3><a href="browse-ads-details.html">Villa on Grand Avenue</a></h3>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><a href="index.html">(32)</a></li>
                                                        </ul>
                                                        <ul class="info clearfix">
                                                            <li><i class="far fa-clock"></i>1 months ago</li>
                                                            <li><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</li>
                                                        </ul>
                                                        <div class="lower-box">
                                                            <h5><span>Start From:</span>$3,000.00</h5>
                                                            <ul class="react-box">
                                                                <li><a href="index.html"><i class="icon-21"></i></a></li>
                                                                <li><a href="index.html"><i class="icon-22"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/feature-2.jpg" alt=""></figure>
                                                        <div class="shape"></div>
                                                        <div class="feature">Featured</div>
                                                        <div class="icon">
                                                            <div class="icon-shape"></div>
                                                            <i class="icon-16"></i>
                                                        </div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="author-box">
                                                            <div class="inner">
                                                                <img src="assets/images/resource/author-2.png" alt="">
                                                                <h6>Michael Bean<i class="icon-18"></i></h6>
                                                                <span>For sell</span>
                                                            </div>
                                                        </div>
                                                        <div class="category"><i class="fas fa-tags"></i><p>Electronics</p></div>
                                                        <h3><a href="browse-ads-details.html">Villa on Grand Avenue</a></h3>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><a href="index.html">(25)</a></li>
                                                        </ul>
                                                        <ul class="info clearfix">
                                                            <li><i class="far fa-clock"></i>2 months ago</li>
                                                            <li><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</li>
                                                        </ul>
                                                        <div class="lower-box">
                                                            <h5><span>Start From:</span>$2,000.00</h5>
                                                            <ul class="react-box">
                                                                <li><a href="index.html"><i class="icon-21"></i></a></li>
                                                                <li><a href="index.html"><i class="icon-22"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/feature-3.jpg" alt=""></figure>
                                                        <div class="shape"></div>
                                                        <div class="feature">Featured</div>
                                                        <div class="icon">
                                                            <div class="icon-shape"></div>
                                                            <i class="icon-16"></i>
                                                        </div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="author-box">
                                                            <div class="inner">
                                                                <img src="assets/images/resource/author-3.png" alt="">
                                                                <h6>Michael Bean<i class="icon-18"></i></h6>
                                                                <span>For sell</span>
                                                            </div>
                                                        </div>
                                                        <div class="category"><i class="fas fa-tags"></i><p>Electronics</p></div>
                                                        <h3><a href="browse-ads-details.html">Villa on Grand Avenue</a></h3>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><a href="index.html">(40)</a></li>
                                                        </ul>
                                                        <ul class="info clearfix">
                                                            <li><i class="far fa-clock"></i>3 months ago</li>
                                                            <li><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</li>
                                                        </ul>
                                                        <div class="lower-box">
                                                            <h5><span>Start From:</span>$3,500.00</h5>
                                                            <ul class="react-box">
                                                                <li><a href="index.html"><i class="icon-21"></i></a></li>
                                                                <li><a href="index.html"><i class="icon-22"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/feature-4.jpg" alt=""></figure>
                                                        <div class="shape"></div>
                                                        <div class="feature">Featured</div>
                                                        <div class="icon">
                                                            <div class="icon-shape"></div>
                                                            <i class="icon-16"></i>
                                                        </div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="author-box">
                                                            <div class="inner">
                                                                <img src="assets/images/resource/author-4.png" alt="">
                                                                <h6>Michael Bean<i class="icon-18"></i></h6>
                                                                <span>For sell</span>
                                                            </div>
                                                        </div>
                                                        <div class="category"><i class="fas fa-tags"></i><p>Electronics</p></div>
                                                        <h3><a href="browse-ads-details.html">Villa on Grand Avenue</a></h3>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><a href="index.html">(28)</a></li>
                                                        </ul>
                                                        <ul class="info clearfix">
                                                            <li><i class="far fa-clock"></i>4 months ago</li>
                                                            <li><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</li>
                                                        </ul>
                                                        <div class="lower-box">
                                                            <h5><span>Start From:</span>$3,000.00</h5>
                                                            <ul class="react-box">
                                                                <li><a href="index.html"><i class="icon-21"></i></a></li>
                                                                <li><a href="index.html"><i class="icon-22"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/feature-5.jpg" alt=""></figure>
                                                        <div class="shape"></div>
                                                        <div class="feature">Featured</div>
                                                        <div class="icon">
                                                            <div class="icon-shape"></div>
                                                            <i class="icon-16"></i>
                                                        </div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="author-box">
                                                            <div class="inner">
                                                                <img src="assets/images/resource/author-5.png" alt="">
                                                                <h6>Michael Bean<i class="icon-18"></i></h6>
                                                                <span>For sell</span>
                                                            </div>
                                                        </div>
                                                        <div class="category"><i class="fas fa-tags"></i><p>Electronics</p></div>
                                                        <h3><a href="browse-ads-details.html">Villa on Grand Avenue</a></h3>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><a href="index.html">(15)</a></li>
                                                        </ul>
                                                        <ul class="info clearfix">
                                                            <li><i class="far fa-clock"></i>5 months ago</li>
                                                            <li><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</li>
                                                        </ul>
                                                        <div class="lower-box">
                                                            <h5><span>Start From:</span>$1,800.00</h5>
                                                            <ul class="react-box">
                                                                <li><a href="index.html"><i class="icon-21"></i></a></li>
                                                                <li><a href="index.html"><i class="icon-22"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/feature-6.jpg" alt=""></figure>
                                                        <div class="shape"></div>
                                                        <div class="feature">Featured</div>
                                                        <div class="icon">
                                                            <div class="icon-shape"></div>
                                                            <i class="icon-16"></i>
                                                        </div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="author-box">
                                                            <div class="inner">
                                                                <img src="assets/images/resource/author-6.png" alt="">
                                                                <h6>Michael Bean<i class="icon-18"></i></h6>
                                                                <span>For sell</span>
                                                            </div>
                                                        </div>
                                                        <div class="category"><i class="fas fa-tags"></i><p>Electronics</p></div>
                                                        <h3><a href="browse-ads-details.html">Villa on Grand Avenue</a></h3>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><i class="icon-17"></i></li>
                                                            <li><a href="index.html">(32)</a></li>
                                                        </ul>
                                                        <ul class="info clearfix">
                                                            <li><i class="far fa-clock"></i>6 months ago</li>
                                                            <li><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</li>
                                                        </ul>
                                                        <div class="lower-box">
                                                            <h5><span>Start From:</span>$3,200.00</h5>
                                                            <ul class="react-box">
                                                                <li><a href="index.html"><i class="icon-21"></i></a></li>
                                                                <li><a href="index.html"><i class="icon-22"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-wrapper centred">
                                <ul class="pagination clearfix">
                                    <li><a href="stores-details.html"><i class="far fa-angle-left"></i>Prev</a></li>
                                    <li><a href="stores-details.html" class="current">01</a></li>
                                    <li><a href="stores-details.html">02</a></li>
                                    <li><a href="stores-details.html">03</a></li>
                                    <li><a href="stores-details.html">Next<i class="far fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- stores-details end -->


        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-top" style="background-image: url(assets/images/background/footer-1.jpg);">
                <div class="auto-container">
                    <div class="widget-section">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget logo-widget">
                                    <figure class="footer-logo"><a href="index.html"><img src="assets/images/footer-logo.png" alt=""></a></figure>
                                    <div class="text">
                                        <p>Lorem ipsum dolor amet consetetur adi pisicing elit sed eiusm tempor in cididunt ut labore dolore magna aliqua enim ad minim venitam</p>
                                    </div>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget links-widget ml-70">
                                    <div class="widget-title">
                                        <h3>Services</h3>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="links-list clearfix">
                                            <li><a href="index.html">About Us</a></li>
                                            <li><a href="index.html">Listing</a></li>
                                            <li><a href="index.html">How It Works</a></li>
                                            <li><a href="index.html">Our Services</a></li>
                                            <li><a href="index.html">Our Blog</a></li>
                                            <li><a href="index.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget post-widget">
                                    <div class="widget-title">
                                        <h3>Top News</h3>
                                    </div>
                                    <div class="post-inner">
                                        <div class="post">
                                            <figure class="post-thumb">
                                                <img src="assets/images/resource/footer-post-1.jpg" alt="">
                                                <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                            </figure>
                                            <h5><a href="blog-details.html">The Added Value Social Worker</a></h5>
                                            <p>Mar 25, 2020</p>
                                        </div>
                                        <div class="post">
                                            <figure class="post-thumb">
                                                <img src="assets/images/resource/footer-post-2.jpg" alt="">
                                                <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                            </figure>
                                            <h5><a href="blog-details.html">Ways to Increase Trust</a></h5>
                                            <p>Mar 24, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget contact-widget">
                                    <div class="widget-title">
                                        <h3>Contacts</h3>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="info-list clearfix">
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i>
                                                Flat 20, Reynolds Neck, North Helenaville, FV77 8WS
                                            </li>
                                            <li>
                                                <i class="fas fa-microphone"></i>
                                                <a href="tel:23055873407">+2(305) 587-3407</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-envelope"></i>
                                                <a href="mailto:info@example.com">info@example.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="footer-inner clearfix">
                        <div class="copyright pull-left"><p><a href="index.html">Clasifico</a> &copy; 2020 All Right Reserved</p></div>
                        <ul class="footer-nav pull-right clearfix">
                            <li><a href="index.html">Terms of Service</a></li>
                            <li><a href="index.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="far fa-long-arrow-up"></span>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/product-filter.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
