<!DOCTYPE html>

<html>
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">

    <title>AL_HAFIZ BOOK SHOP</title>

</head>

<body>


<div id="top"><!-- Top Begin -->

<div class="container"><!-- container Begin -->
    
    <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
        
        <a href="#" class="btn btn-success btn-sm">Welcome</a>
        <a href="checkout.php">4 Items In Your Cart | Total Price: $300 </a>
        
    </div><!-- col-md-6 offer Finish -->
    
    <div class="col-md-6"><!-- col-md-6 Begin -->
        
        <ul class="menu"><!-- cmenu Begin -->
            
            <li>
                <a href="customer_register.php">Register</a>
            </li>
            <li>
                <a href="checkout.php">My Account</a>
            </li>
            <li>
                <a href="cart.php">Go To Cart</a>
            </li>
            <li>
                <a href="checkout.php">Login</a>
            </li>
            
        </ul><!-- menu Finish -->
        
    </div><!-- col-md-6 Finish -->
    
</div><!-- container Finish -->

</div><!-- Top Finish -->

<div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->

<div class="container"><!-- container Begin -->
    
    <div class="navbar-header"><!-- navbar-header Begin -->
        
        <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
            
            <img src="images/ecom-store-logo.png" alt="M-dev-Store Logo" class="hidden-xs">
            <img src="images/ecom-store-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">
            
        </a><!-- navbar-brand home Finish -->
        
        <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
            
            <span class="sr-only">Toggle Navigation</span>
            
            <i class="fa fa-align-justify"></i>
            
        </button>
        
        <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
            
            <span class="sr-only">Toggle Search</span>
            
            <i class="fa fa-search"></i>
            
        </button>
        
    </div><!-- navbar-header Finish -->
    
    <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
        
        <div class="padding-nav"><!-- padding-nav Begin -->
            
            <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                
                <li class="active">
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="shop.php">Shop</a>
                </li>
                <li>
                    <a href="checkout.php">My Account</a>
                </li>
                <li>
                    <a href="cart.php">Shopping Cart</a>
                </li>
                <li>
                    <a href="contact.php">Contact Us</a>
                </li>
                
            </ul><!-- nav navbar-nav left Finish -->
            
        </div><!-- padding-nav Finish -->
        
        <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
            
            <i class="fa fa-shopping-cart"></i>
            
            <span>4 Items In Your Cart</span>
            
        </a><!-- btn navbar-btn btn-primary Finish -->
        
        <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
            
            <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                
                <span class="sr-only">Toggle Search</span>
                
                <i class="fa fa-search"></i>
                
            </button><!-- btn btn-primary navbar-btn Finish -->
            
        </div><!-- navbar-collapse collapse right Finish -->
        
        <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
            
            <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                
                <div class="input-group"><!-- input-group Begin -->
                    
                    <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                    
                    <span class="input-group-btn"><!-- input-group-btn Begin -->
                    
                    <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                        
                        <i class="fa fa-search"></i>
                        
                    </button><!-- btn btn-primary Finish -->
                    
                    </span><!-- input-group-btn Finish -->
                    
                </div><!-- input-group Finish -->
                
            </form><!-- navbar-form Finish -->
            
        </div><!-- collapse clearfix Finish -->
        
    </div><!-- navbar-collapse collapse Finish -->
    
</div><!-- container Finish -->

</div><!-- navbar navbar-default Finish -->

<div class="container" id="slider"><!-- container Begin -->

<div class="col-md-12"><!-- col-md-12 Begin -->
    
    <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
        
        <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
            
            <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            
        </ol><!-- carousel-indicators Finish -->
        
        <div class="carousel-inner"><!-- carousel-inner Begin -->
            
            <div class="item active">
                
                <img src="admin_area/slides_images/1.jpg" alt="Slider Image 1">
                
            </div>
            
            <div class="item">
                
                <img src="admin_area/slides_images/2.jpg" alt="Slider Image 2">
                
            </div>
            
            <div class="item">
                
                <img src="admin_area/slides_images/3.jpg" alt="Slider Image 3">
                
            </div>
            
            <div class="item">
                
                <img src="admin_area/slides_images/4.jpg" alt="Slider Image 4">
                
            </div>
            
        </div><!-- carousel-inner Finish -->
        
        <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
            
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
            
        </a><!-- left carousel-control Finish -->
        
        <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
            
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            
        </a><!-- left carousel-control Finish -->
        
    </div><!-- carousel slide Finish -->
    
</div><!-- col-md-12 Finish -->

</div><!-- container Finish -->
                 







<div id="advantages"><!---------advantages start---------->
    <div class="container"><!---------container start---------->
        <div class="same-height-row"><!---------same-height-row start---------->

            <div class="col-sm-4"><!---------col-sm-4 start---------->
                <div class="box same-height"><!---------box same-height start---------->
                    <div class="icon"><!---------icon start---------->

                        <i class="fa fa-heart"></i>



                    </div><!---------icon end---------->

                    <h3><a href="#">
                        We Love Our Costomer
                    </a></h3>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>


                </div><!---------box same-height end---------->
            </div><!---------col-sm-4 end---------->


            <div class="col-sm-4"><!---------col-sm-4 start---------->
                <div class="box same-height"><!---------box same-height start---------->
                    <div class="icon"><!---------icon start---------->

                        <i class="fa fa-tag"></i>



                    </div><!---------icon end---------->

                    <h3><a href="#">  Best Prices For Customer </a></h3>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>


                </div><!---------box same-height end---------->
            </div><!---------col-sm-4 end---------->


            <div class="col-sm-4"><!---------col-sm-4 start---------->
                <div class="box same-height"><!---------box same-height start---------->
                    <div class="icon"><!---------icon start---------->

                        <i class="fa fa-facebook"></i>



                    </div><!---------icon end---------->

                    <h3><a href="#">   We Love facebook </a></h3>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>


                </div><!---------box same-height end---------->
            </div><!---------col-sm-4 end---------->


        </div><!---------same-height-row end---------->
    </div><!---------container end---------->
</div><!---------advantages end---------->


<div id="hot"><!---------hot start---------->

    <div class="box"><!---------box start---------->

        <div class="container"><!---------container start---------->

            <div class="col-md-12"><!---------col-md-12 start---------->

                <h2>
                    Our Latest Products
                </h2>

            </div><!---------col-md-12 end---------->

         </div><!---------container end---------->
    </div><!---------box end---------->
</div><!---------hot end---------->

<div id="content" class="container"><!---------container start---------->

    <div class="row"><!---------container start---------->

        <div class="col-sm-4 col-sm-6 single"><!---------col-sm-4 col-sm-6 single start---------->

            <div class="product"><!---------product start---------->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/p1.jpg" alt="Product 1">
                    </a>

                    <div class="text"><!---------text start---------->
                            <h3>
                                <a href="details.php">
                                    Marker Colors
                                </a>
                            </h3>

                            <p class="price">$38</p>

                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>

                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>
                    </div><!---------text end---------->
            </div><!---------product end---------->
        </div><!---------col-sm-4 col-sm-6 single end---------->


        <div class="col-sm-4 col-sm-6 single"><!---------col-sm-4 col-sm-6 single start---------->

            <div class="product"><!---------product start---------->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/p2.jpg" alt="Product 1">
                    </a>

                    <div class="text"><!---------text start---------->
                            <h3>
                                <a href="details.php">
                                    Protector
                                </a>
                            </h3>

                            <p class="price">$38</p>

                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>

                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>
                    </div><!---------text end---------->
            </div><!---------product end---------->
        </div><!---------col-sm-4 col-sm-6 single end---------->


        <div class="col-sm-4 col-sm-6 single"><!---------col-sm-4 col-sm-6 single start---------->

            <div class="product"><!---------product start---------->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/p1.jpg" alt="Product 1">
                    </a>

                    <div class="text"><!---------text start---------->
                            <h3>
                                <a href="details.php">
                                    Marker Colors
                                </a>
                            </h3>

                            <p class="price">$38</p>

                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>

                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>
                    </div><!---------text end---------->
            </div><!---------product end---------->
        </div><!---------col-sm-4 col-sm-6 single end---------->


        <div class="col-sm-4 col-sm-6 single"><!---------col-sm-4 col-sm-6 single start---------->

            <div class="product"><!---------product start---------->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/p2.jpg" alt="Product 1">
                    </a>

                    <div class="text"><!---------text start---------->
                            <h3>
                                <a href="details.php">
                                    Protector
                                </a>
                            </h3>

                            <p class="price">$38</p>

                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>

                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>
                    </div><!---------text end---------->
            </div><!---------product end---------->
        </div><!---------col-sm-4 col-sm-6 single end---------->

        <div class="col-sm-4 col-sm-6 single"><!---------col-sm-4 col-sm-6 single start---------->

            <div class="product"><!---------product start---------->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/p1.jpg" alt="Product 1">
                    </a>

                    <div class="text"><!---------text start---------->
                            <h3>
                                <a href="details.php">
                                    Marker Colors
                                </a>
                            </h3>

                            <p class="price">$38</p>

                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>

                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>
                    </div><!---------text end---------->
            </div><!---------product end---------->
        </div><!---------col-sm-4 col-sm-6 single end---------->


        <div class="col-sm-4 col-sm-6 single"><!---------col-sm-4 col-sm-6 single start---------->

            <div class="product"><!---------product start---------->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/p2.jpg" alt="Product 1">
                    </a>

                    <div class="text"><!---------text start---------->
                            <h3>
                                <a href="details.php">
                                    Protector
                                </a>
                            </h3>

                            <p class="price">$38</p>

                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>

                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>
                    </div><!---------text end---------->
            </div><!---------product end---------->
        </div><!---------col-sm-4 col-sm-6 single end---------->


        <div class="col-sm-4 col-sm-6 single"><!---------col-sm-4 col-sm-6 single start---------->

            <div class="product"><!---------product start---------->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/p1.jpg" alt="Product 1">
                    </a>

                    <div class="text"><!---------text start---------->
                            <h3>
                                <a href="details.php">
                                    Marker Colors
                                </a>
                            </h3>

                            <p class="price">$38</p>

                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>

                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>
                    </div><!---------text end---------->
            </div><!---------product end---------->
        </div><!---------col-sm-4 col-sm-6 single end---------->


        <div class="col-sm-4 col-sm-6 single"><!---------col-sm-4 col-sm-6 single start---------->

            <div class="product"><!---------product start---------->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/p2.jpg" alt="Product 1">
                    </a>

                    <div class="text"><!---------text start---------->
                            <h3>
                                <a href="details.php">
                                   Protector
                                </a>
                            </h3>

                            <p class="price">$38</p>

                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>

                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>
                    </div><!---------text end---------->
            </div><!---------product end---------->
        </div><!---------col-sm-4 col-sm-6 single end---------->

    </div><!---------row end---------->

</div><!---------container end---------->



<?php 

include("includes/footer.php");

?>



                    <script src="js/jquery-331.min.js"></script>
                    <script src="js/bootstrap-337.min.js"></script>
    
</body>
</html>