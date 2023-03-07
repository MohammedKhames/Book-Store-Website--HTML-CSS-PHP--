<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Khamis Book Store</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel='stylesheet' href='css/font-awesome.min.css' />
        <link rel='stylesheet' href='css/style.css' />
      
    </head>
    <body>

    
        <!-- Start Our Navbar -->
    
        <section class="main">
            
            <nav>
                 <div class="menu"> 
                    <a href="#" class="siteName"> <i class="fas fa-book"></i> BookStore </a>
                 </div>

                <ul class="menu">
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#categories">categories</a></li>
                    <li><a href="#product">New Arrival</a></li>
                    <li><a href="#writer">Writers</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="sign_in.php">Sign In</a></li>
                </ul>
            </nav>
            
            
            <img src="images/1.gif">
            
            
        </section>
        
        <section class="hero"  id="home">
            <h1>Upto <span>75% </span> Off</h1>
            <p class="details">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam deserunt nostrum accusamus. Nam alias sit necessitatibus, aliquid ex minima at!
            </p>
            <a href="#" class="download">Download Book</a>
            
        </section>
        
        
        <br>
        
     
     
     <!-- icons section starts  -->

        <section class="icons-container">
        
            <div class="icons">
                <i class="fas fa-shipping-fast"></i>
                <div class="content">
                    <h3>Free Shipping</h3>
                    <p>Order Over $100</p>
                </div>
            </div>
        
            <div class="icons">
                <i class="fas fa-lock"></i>
                <div class="content">
                    <h3>Payment</h3>
                    <p>100 Secure Payment</p>
                </div>
            </div>
        
            <div class="icons">
                <i class="fas fa-redo-alt"></i>
                <div class="content">
                    <h3>Easy Returns</h3>
                    <p>10 Days Returns</p>
                </div>
            </div>
        
            <div class="icons">
                <i class="fas fa-headset"></i>
                <div class="content">
                    <h3>24/7 Support</h3>
                    <p>Call Us Anytime</p>
                </div>
            </div>
        
        </section>
        
        <!-- icons section ends -->
     
        
        
        
        <!-- Start Featured -->
        
        <section class="featured" id="featured">
            <h1 class="heading">Our   <span>Featured</span></h1>
            <div class="box-container">

                <?php
                        $i=1;
                        while($i<=4)
                        {
                            ?>
                            
                                <div class="box">
                                    <?php
                                            if($i==1)
                                              {
                                                ?><img src="images/book-7.png"><?php
                                              }
                                            elseif($i==2)
                                              {
                                                 ?><img src="images/book-8.png"><?php
                                              }
                                            elseif($i==3)
                                              {
                                                 ?><img src="images/book-10.png"><?php
                                              }
                                            else{
                                                 ?><img src="images/book-7.png"><?php
                                              }
                                    ?>
                                    
                                    <h3> Best and Cool</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, cons.
                                    </p>
                                    <a href="#" class="btn">Read More</a>
                                </div>
        
                            
                            <?php
                            
                            $i++;
                        }
                 ?>   
                
            </div>  
            
        </section>
        <br><br><br
        
        <!-- End Featured -->
        
            


        
        <!-- deal section starts  -->

        <section class="deal">
        
            <div class="content">
                <h3>Deal Of The Day</h3>
                <h1>Upto 50% Off</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis in atque dolore tempora quaerat at fuga dolorum natus velit.</p>
                <a href="#" class="btn">Shop Now</a>
            </div>
        
            <div class="image">
                <img src="images/deal-img.jpg" alt="">
            </div>
        
        </section>

       <!-- deal section ends -->
        
        
        
        
        
        <!-- Start new arrival -->
        
        <section class="product" id="product">
            
            <h1 class="heading">New   <span>Arrivals</span></h1>
            <div class="product-slider">
                <div class="wrapper">
                    
                    <?php
                        $i=1;
                        while($i<=6)
                        {
                            ?>
                            
                                <div class="box">
                                    
                                        <?php
                                            if($i==1)
                                                {
                                                    ?><img src="images/book-1.png"><?php
                                                }
                                                
                                            elseif($i==2)
                                                {
                                                   ?><img src="images/book-2.png"><?php
                                                }
                                                
                                            elseif($i==3)
                                                {
                                                  ?><img src="images/book-3.png"><?php
                                                }
                                                
                                            elseif($i==4)
                                                {
                                                  ?><img src="images/book-4.png"><?php
                                                }
                                                
                                            elseif($i==5)
                                                {
                                                  ?><img src="images/book-5.png"><?php
                                                }
                                                
                                            else{
                                                  ?><img src="images/book-6.png"><?php
                                                }
                                        ?>
                                    
                                        <h3> Read Best Book</h3>
                                        <div class="price">$99</div>
                                        <div class="stars">
                                            
                                            <?php
                                                $j=1;
                                                while($j<=5)
                                                  {
                                                    ?><i class="fa fa-star"></i><?php
                                                    $j++;
                                                  }
                                            ?>
                                              
                                        </div>
                                </div>
        
                            
                            <?php
                            
                            $i++;
                        }
                     ?> 
                    
                   
                   
                </div>
                
            </div>
            
        </section>
        
        <br><br><br><br><br><br>
    <!-- new arrival -->
        
      
      
      
      
        
     <!-- newsletter section starts -->

        <section class="newsletter">
        
            <form action="">
                <h3>Subscribe for Latest Updates</h3>
                <input type="email" name="" placeholder="Enter your Email" id="" class="box">
                <input type="submit" value="subscribe" class="btn">
            </form>
        
        </section>

      <!-- newsletter section ends -->
        
        
        
        
        
        
        <!-- Start categories-->
        
        <section  class="categories" id="categories">
            
            <h1 class="heading">Product   <span>Categories</span></h1>
            
            
            <div class="box-container">
                
                  <?php
                        $i=1;
                        while($i<=4)
                        {
                            
                            ?>
                            
                                <div class="box">
                                    
                                        <?php
                                            if($i==1)
                                                {
                                                    ?>
                                                        <img src="images/book7.png">
                                                        <h3>Programming</h3>
                                                    <?php
                                                }
                                                
                                            elseif($i==2)
                                                {
                                                    ?>
                                                        <img src="images/book-9.png">
                                                        <h3>Philosophy</h3>
                                                    <?php
                                                }
                                                
                                            elseif($i==3)
                                                {
                                                    ?>
                                                        <img src="images/book-1.png">
                                                        <h3>History</h3>
                                                    <?php
                                                }
                                                
                                            else{
                                                    ?>
                                                        <img src="images/book-3.png">
                                                        <h3>Science</h3>
                                                    <?php
                                                }
                                                
                                        ?>
                                    
                                         <p>Upto 80% off</p>
                                         <a href="#" class="btn">Shop Now</a>
                                        
                                </div>
        
                            
                            <?php
                            
                            $i++;
                        }
                     ?> 
               
            </div>
         
        </section
        
        <br><br><br><br><br><br>
        
        <!-- End categories-->
        
        
        
        
        
        
        <!-- Start writer-->
        
       <section class="writer" id="writer">
        
            <h1 class="heading">Best  <span>Writers</span></h1>
            <div class="box-container">
                
                
                
                    
                    
                  <?php
                        $i=1;
                        while($i<=3)
                        
                        {
                            
                            ?>
                            
                                <div class="box">
                                    
                                        <?php
                        
                            
                                    
                                                    if($i==1)
                                                        {
                                                            ?>
                                                                 <img src="images/pic-2.png">
                                                                 <h3>Omnia Mahmoud</h3>
                                                                
                                                            <?php
                                                        }
                                                        
                                                    elseif($i==2)
                                                        {
                                                            ?>
                                                                    <img src="images/pic-1.png">
                                                                    <h3>Yousef Ahmed</h3>
                                                                  
                                                            <?php
                                                        }
                                                        
                                                    else{
                                                            ?>
                                                                    <img src="images/pic-1.png">
                                                                    <h3>Yousef Ahmed</h3>
                                                                    
                                                            <?php
                                                        }
                                                
                                        ?>
                                    
                                         <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit? </p>
                                         
                                         <div class="stars">
                                            
                                            <?php
                                                $j=1;
                                                while($j<=5)
                                                  {
                                                    ?><i class="fa fa-star"></i><?php
                                                    $j++;
                                                  }
                                            ?>
                                              
                                         </div>
                                         
                                          <div class="social-media">
                                                <i class="fa fa-facebook"></i>
                                                <i class="fa fa-instagram"></i>
                                                <i class="fa fa-twitter"></i>
                                                <i class="fa fa-linkedin"></i>
                                          </div>
                                        
                                </div>
        
                            
                            <?php
                            
                            $i++;
                        }
                     ?> 
                   
                </div>
        
            </div>
        
        
        
       </section>
       <br><br><br>
     <!-- End writer-->
       
       
       
     <!-- Start Footer -->
       
        <section class="footer">
       
           <div class="box-container">
               <div class="box">
                   <h3>Book <i class="fa fa-shopping-cart"></i></h3>
                   <p>
                       Lorem ipsum dolor sit amet,
                       consectetur adipiscing elit.
                   </p>
                   <div class="share">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                    </div>
               </div>
               <div class="box">
                   <h3>Contact Info</h3>
                   <div class="share">
                        <a href="#" class="links"><i class="fa fa-phone">+96551629478</i></a>
                        <a href="#" class="links"><i class="fa fa-envelope">mkhamis560@gmail.com</i></a>
                        <a href="#" class="links"><i class="fa fa-map-marker">Ismailia,Egypt</i></a>
                    </div>
               </div>
               <div class="box">
                   <h3>Quick Link</h3>
                   <div class="share">
                        <a href="#" class="links"><i class="fa fa-arrow-right">Home</i></a>
                        <a href="#" class="links"><i class="fa fa-arrow-right">Featured</i></a>
                        <a href="#" class="links"><i class="fa fa-arrow-right">Product</i></a>
                        <a href="#" class="links"><i class="fa fa-arrow-right">Categories</i></a>
                        <a href="#" class="links"><i class="fa fa-arrow-right">Writer</i></a>
                    </div>
               </div>
               <div class="box">
                   <h3>Newsletter</h3>
                   <p>Subscribe For Latest Updates</p>
                   <input type="email" placeholder=" Email" class="email">
                   <input type="submit" value="Subscribe" class="btn">
               </div>
           </div>
        </section>
     <!-- End Footer-->
        
        
        
     
    </body>
</html>