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
        <section class="page-title style-two" style="background-image: url(carbk.jpg);">
            <div class="auto-container">
                <div class="content-box centred mr-0">
                    <div class="title">
                        <h1>Service List</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Service List</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- category-details -->
        <section class="category-details bg-color-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar category-sidebar">
                            <div class="sidebar-search sidebar-widget">
                                <div class="widget-title">
                                    <h3>Search</h3>
                                </div>
                                <div class="widget-content">
                                    <form action="category-details.html" method="post" class="search-form">
                                        <div class="form-group">
                                            <input type="search" name="search-field" placeholder="Search Keyword..." required="">
                                            <button type="submit"><i class="icon-2"></i></button>
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
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-category sidebar-widget">
                                <div class="widget-title">
                                    <h3>Category</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list">
                                        <li><a href="category-details.html">All</a></li>
                                        <li><a href="category-details.html">Air Condition</a></li>
                                        <li class="dropdown">
                                            <a href="category-details.html" class="current">Ellectronics</a>
                                            <ul>
                                                <li><a href="category-details.html">Computers</a></li>
                                                <li><a href="category-details.html">Drones</a></li>
                                                <li><a href="category-details.html">Phones</a></li>
                                                <li><a href="category-details.html">Watches</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="category-details.html">Furniture</a></li>
                                        <li class="dropdown">
                                            <a href="category-details.html">Health & Beauty</a>
                                            <ul>
                                                <li><a href="category-details.html">Spa</a></li>
                                                <li><a href="category-details.html">Messages</a></li>
                                                <li><a href="category-details.html">Fitness</a></li>
                                                <li><a href="category-details.html">Injuries</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="category-details.html">Automotive</a></li>
                                        <li><a href="category-details.html">Real Estate</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-filter sidebar-widget">
                                <div class="widget-title">
                                    <h3>Pricing range</h3>
                                </div>
                                <div class="price-range">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                            <input type="text" name="min_price" placeholder="Min">
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                            <input type="text" name="max_price" placeholder="Max">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <button type="submit" class="theme-btn-one">Apply price</button>
                                        </div>
                                    </div>
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
                                        <button class="list-view on"><i class="icon-31"></i></button>
                                        <button class="grid-view"><i class="icon-30"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="category-block wrapper list browse-add">
                                <div class="list-item feature-style-three pd-0">
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
                                            <div class="btn-box"><a href="browse-ads-details.html" class="theme-btn-one">Details</a></div>
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
                                            <div class="btn-box"><a href="browse-ads-details.html" class="theme-btn-one">Details</a></div>
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
                                            <div class="btn-box"><a href="browse-ads-details.html" class="theme-btn-one">Details</a></div>
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
                                            <div class="btn-box"><a href="browse-ads-details.html" class="theme-btn-one">Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item feature-style-two four-column pd-0">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/feature-7.jpg" alt=""></figure>
                                                        <div class="shape"></div>
                                                        <div class="feature">Featured</div>
                                                        <div class="icon">
                                                            <div class="icon-shape"></div>
                                                            <i class="icon-16"></i>
                                                        </div>
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
                                                            <h5>$3,000.00</h5>
                                                            <ul class="react-box">
                                                                <li><a href="index.html"><i class="icon-21"></i></a></li>
                                                                <li><a href="index.html"><i class="icon-22"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/feature-8.jpg" alt=""></figure>
                                                        <div class="shape"></div>
                                                        <div class="feature">Featured</div>
                                                        <div class="icon">
                                                            <div class="icon-shape"></div>
                                                            <i class="icon-16"></i>
                                                        </div>
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
                                                            <h5>$2,000.00</h5>
                                                            <ul class="react-box">
                                                                <li><a href="index.html"><i class="icon-21"></i></a></li>
                                                                <li><a href="index.html"><i class="icon-22"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/feature-9.jpg" alt=""></figure>
                                                        <div class="shape"></div>
                                                        <div class="feature">Featured</div>
                                                        <div class="icon">
                                                            <div class="icon-shape"></div>
                                                            <i class="icon-16"></i>
                                                        </div>
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
                                                            <li><a href="index.html">(40)</a></li>
                                                        </ul>
                                                        <ul class="info clearfix">
                                                            <li><i class="far fa-clock"></i>3 months ago</li>
                                                            <li><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</li>
                                                        </ul>
                                                        <div class="lower-box">
                                                            <h5>$3,500.00</h5>
                                                            <ul class="react-box">
                                                                <li><a href="index.html"><i class="icon-21"></i></a></li>
                                                                <li><a href="index.html"><i class="icon-22"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/feature-10.jpg" alt=""></figure>
                                                        <div class="shape"></div>
                                                        <div class="feature">Featured</div>
                                                        <div class="icon">
                                                            <div class="icon-shape"></div>
                                                            <i class="icon-16"></i>
                                                        </div>
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
                                                            <li><a href="index.html">(28)</a></li>
                                                        </ul>
                                                        <ul class="info clearfix">
                                                            <li><i class="far fa-clock"></i>4 months ago</li>
                                                            <li><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</li>
                                                        </ul>
                                                        <div class="lower-box">
                                                            <h5>$3,000.00</h5>
                                                            <ul class="react-box">
                                                                <li><a href="index.html"><i class="icon-21"></i></a></li>
                                                                <li><a href="index.html"><i class="icon-22"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/feature-11.jpg" alt=""></figure>
                                                        <div class="shape"></div>
                                                        <div class="feature">Featured</div>
                                                        <div class="icon">
                                                            <div class="icon-shape"></div>
                                                            <i class="icon-16"></i>
                                                        </div>
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
                                                            <li><a href="index.html">(15)</a></li>
                                                        </ul>
                                                        <ul class="info clearfix">
                                                            <li><i class="far fa-clock"></i>5 months ago</li>
                                                            <li><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</li>
                                                        </ul>
                                                        <div class="lower-box">
                                                            <h5>$1,800.00</h5>
                                                            <ul class="react-box">
                                                                <li><a href="index.html"><i class="icon-21"></i></a></li>
                                                                <li><a href="index.html"><i class="icon-22"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/feature-12.jpg" alt=""></figure>
                                                        <div class="shape"></div>
                                                        <div class="feature">Featured</div>
                                                        <div class="icon">
                                                            <div class="icon-shape"></div>
                                                            <i class="icon-16"></i>
                                                        </div>
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
                                                            <h5>$3,200.00</h5>
                                                            <ul class="react-box">
                                                                <li><a href="index.html"><i class="icon-21"></i></a></li>
                                                                <li><a href="index.html"><i class="icon-22"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/feature-13.jpg" alt=""></figure>
                                                        <div class="shape"></div>
                                                        <div class="feature">Featured</div>
                                                        <div class="icon">
                                                            <div class="icon-shape"></div>
                                                            <i class="icon-16"></i>
                                                        </div>
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
                                                            <h5>$3,500.00</h5>
                                                            <ul class="react-box">
                                                                <li><a href="index.html"><i class="icon-21"></i></a></li>
                                                                <li><a href="index.html"><i class="icon-22"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/feature-14.jpg" alt=""></figure>
                                                        <div class="shape"></div>
                                                        <div class="feature">Featured</div>
                                                        <div class="icon">
                                                            <div class="icon-shape"></div>
                                                            <i class="icon-16"></i>
                                                        </div>
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
                                                            <li><a href="index.html">(30)</a></li>
                                                        </ul>
                                                        <ul class="info clearfix">
                                                            <li><i class="far fa-clock"></i>8 months ago</li>
                                                            <li><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</li>
                                                        </ul>
                                                        <div class="lower-box">
                                                            <h5>$3,300.00</h5>
                                                            <ul class="react-box">
                                                                <li><a href="index.html"><i class="icon-21"></i></a></li>
                                                                <li><a href="index.html"><i class="icon-22"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/resource/feature-19.jpg" alt=""></figure>
                                                        <div class="shape"></div>
                                                        <div class="feature">Featured</div>
                                                        <div class="icon">
                                                            <div class="icon-shape"></div>
                                                            <i class="icon-16"></i>
                                                        </div>
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
                                                            <li><a href="index.html">(29)</a></li>
                                                        </ul>
                                                        <ul class="info clearfix">
                                                            <li><i class="far fa-clock"></i>9 months ago</li>
                                                            <li><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</li>
                                                        </ul>
                                                        <div class="lower-box">
                                                            <h5>$3,800.00</h5>
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
                                    <li><a href="category-details.html"><i class="far fa-angle-left"></i>Prev</a></li>
                                    <li><a href="category-details.html" class="current">01</a></li>
                                    <li><a href="category-details.html">02</a></li>
                                    <li><a href="category-details.html">03</a></li>
                                    <li><a href="category-details.html">Next<i class="far fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- category-details end -->


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
