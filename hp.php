

<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >
	<title>Easy Electronics</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome-min.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>
<body>

<div id="header">
      <div id="subheader">
          <div class="container">
               <p>Worlds Best Online Electronics Shopping Place</p>
               <a href="aboutus.html">About us</a><a href="faq.html">FAQ</a><a href="contact.php">Contact Us</a>
          </div>
      </div>
          <!--==main header==-->
      <div id="main-header">
		      
			  <!--==Sidebar Hamburger Menu==-->
		   <div id="mySidenav" class="sidenav">
               
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="aboutus.html">About us</a>
                <a href="contact.php">Contact Us</a>
                <a href="faq.html">FAQ</a>
                <?php  if (isset($_SESSION['username'])) : ?>
    	          <a href="hp.php?logout='1'">Logout</a> 
				  <p style="margin-left:1.5rem;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                <?php endif ?>
           </div>
		  
           <span id="cursor" style="cursor:pointer" onclick="openNav()">&#9776;</span>
		   	       
		   <!--logo-->
           <div id="logo">
               <span id="ist">Easy</span><span id="iist">Electronics</span>
           </div>
               
			   <!--==search area==-->
          <div id="search">
             <form action="">
                 <input class="search-area" type="text" name="text" placeholder="Search here">
                 <input class="search-btn" type="submit" name="submit" value="SEARCH">

             </form>
          </div>
                
			<!--==user-menu==-->
          <div id="user-menu">
              <li><a href="#">Welcome</a></li>
          </div>
      </div>
 
        <!----=====navigation bar==--->
        <div id="navigation">
            <a href="#" class="menu-togglr"></a>
             <nav id="mainav">
                  <a href="#">Home</a>
                  <a href="#">New arrivals</a>
                  <a href="#">Deals</a>
                  <a href="#">Electronics</a>
                  <a href="#">Accessroies</a>
                  <a href="#">Products</a>
                  <a href="#">More</a>
              </nav>
        </div>
  </div>
  
       <!----===== banner slider=======--->
 
 <div class="slidercontainer">  
         <div class="showSlide">  
              <img src="images/advt1.jpg" />  
        </div>  
        
		<div class="showSlide">  
            <img src="images/advt6.jpg" />  
        </div>  
  
        <div class="showSlide">  
            <img src="images/advt2.jpg" />  
        </div>  
        
		<div class="showSlide">  
            <img src="images/advt7.jpg" />  
        </div>  
          
        <a class="left" onclick="nextSlide(-1)">???</a>  
        <a class="right" onclick="nextSlide(1)">???</a>  
  </div> 
	
<!----=====Advertisment links=======--->

   <div class="advertisment">
          
			<h1 class ="advt-title">HIGHLIGHTS</h1> 
		  
		 <div class="advertisment-item">
			<div class="img" style="background-image: url('images/1.jpg');"></div>
				<div class="ads-info"><a href="#">Know more</a></div>
         </div>
		 
		  <div class="advertisment-item">
				<div class="img" style="background-image: url('images/2.jpg');"></div>
				<div class="ads-info"><a href="#">Know more</a></div>
         </div>
		 
		  <div class="advertisment-item">
				<div class="img" style="background-image: url('images/3.jpg');"></div>
				<div class="ads-info"><a href="#">Buy Now</a></div>
         </div>
		 
		  <div class="advertisment-item">
				<div class="img" style="background-image: url('images/4.jpg');"></div>
				<div class="ads-info"><a href="#">Buy Now</a></div>
         </div>
	</div>

<!----=====products=======--->

        <!----=====SMARTPHONES=======--->

        <div class = "products">
            <div class = "container">
               <div id="product-intro"><h2>SMARTPHONES</h2><a href="#">View all</a></div>
				
                <div class = "product-items">
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/mobile 1.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                               <a href="product.html"> 
                                  <button type = "button" class = "btn-buy"> View</button>
                               </a>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "item-title">Samsung Galaxy M11</h2>     
                            </div>
                            <a href = "#" class = "product-name">(Violet, 32 GB, 3 GB RAM) </a>
                            <p class = "strike-price"><s>???12,499.00</s></p>
                            <p class = "product-price">???10,499.00</p>
                        </div>

                        <div class = "off-info">
                            <h2 class = "item-title">20% off</h2>
                        </div>
                    </div>
                    <!-- end of single product -->
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/mobile 2.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                               
                                <button type = "button" class = "btn-buy"> View
                                   
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "item-title">Vivo V17</h2>                             
                            </div>
                            <a href = "#" class = "product-name">(Glacier Ice, 128 GB, 8 GB RAM)</a>
                            <p class = "product-price">???21,990.00</p>
                           
                        </div>
                    </div>
                    <!-- end of single product -->
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/mobile 3.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                               
                                <button type = "button" class = "btn-buy"> View
                                    
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "item-title">Apple IPhone SE</h2>                         
                            </div>
                            <a href = "#" class = "product-name">(Product Red, 128 GB, 3 GB RAM)</a>
                            <p class = "product-price">???43,800.00</p>
                            
                        </div>
                    </div>
                    <!-- end of single product -->
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/mobile 4.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                               
                                <button type = "button" class = "btn-buy"> View
                                    
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "item-title">Samsung Galaxy A51</h2>
                            </div>
                            <a href = "#" class = "product-name">(Prism Black, 128 GB ,6 GB RAM)</a>
                            <p class = "strike-price"><s>???34,499.00</s></p>
                            <p class = "product-price">???24,499.00</p>
                        </div>

                        <div class = "off-info">
                            <h2 class = "item-title">20% off</h2>
                        </div>
                    </div>
			 </div>	
		 </div>	
	 </div>	
    <!----=====End of SMARTPHONES=======--->
	<!----=====Televisions=======--->
	<div class = "products">
            <div class = "container">
               <div id="product-intro"><h2>TELEVISIONS</h2><a href="#">View all</a></div>
				
                <div class = "product-items">
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/tv2.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                
                                <button type = "button" class = "btn-buy"> View
                                    
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "item-title">LG UHD TV</h2>
                            </div>
                            <a href = "#" class = "product-name">(43 inch) 4k Ultra HD LED Smart TV (Black, 43UM7780) </a>
                            <p class = "strike-price"><s>???53,990.00</s></p>
                            <p class = "product-price">???43,990.00</p>
                        </div>

                        <div class = "off-info">
                            <h2 class = "item-title">20% off</h2>
                        </div>
                    </div>
                    <!-- end of single product -->
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/tv3.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                               
                                <button type = "button" class = "btn-buy"> View
                                    
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "item-title">Sony X75H TV</h2>
                            </div>
                            <a href = "#" class = "product-name">139cm (55 inch) 4K UHD LED Android Smart TV</a>
                            <p class = "product-price">???75,990.00</p>
                           
                        </div>
                    </div>
                    <!-- end of single product -->
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/tv4.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                
                                <button type = "button" class = "btn-buy"> View
                                    
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "item-title">SONY LED TV</h2>
                            </div>
                            <a href = "#" class = "product-name">102cm (40 inch) 4K FULL HD LED TV (KLV-40R352F , Black)</a>
                            <p class = "product-price">???30,990.00</p>
                            
                        </div>
                    </div>
                    <!-- end of single product -->
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/tv5.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                            
                                <button type = "button" class = "btn-buy"> View
                                    
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "item-title">SAMSUNG LED TV</h2>
                            </div>
                            <a href = "#" class = "product-name">123 Cm (49 Inch) 4K Ultra HD LED Smart TV (49RU7100, Black)</a>
                            <p class = "strike-price"><s>???64,790.00</s></p>
                            <p class = "product-price">???54,790.00</p>
                        </div>

                        <div class = "off-info">
                            <h2 class = "item-title">20% off</h2>
                        </div>
                    </div>
			 </div>	
		 </div>	
	 </div>	
	  <!----=====End of TELEVISIONS=======--->
	 <!----=====Advertisment links=======--->
 
 <div class="advt">
		<div class="banner">
			<img src="images/b1.jpg" width="100%;">
		</div>

		<div class="banner">
			<img src="images/b2.jpg" width="100%;">
		</div>
</div>

<!----=====WASHING MACHINE=======--->
	<div class = "products">
            <div class = "container">
               <div id="product-intro"><h2>WASHING MACHINE</h2><a href="#">View all</a></div>
				
                <div class = "product-items">
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/machine1.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                
                                <button type = "button" class = "btn-buy"> View
                                    
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "item-title">Whirlpool Whitemagic</h2>
                            </div>
                            <a href = "#" class = "product-name">7.5 kg Fully Automatic Top Loading Machine</a>
                            <p class = "strike-price"><s>???15,500.00</s></p>
                            <p class = "product-price">???16,500.00</p>
                        </div>

                        <div class = "off-info">
                            <h2 class = "item-title">20% off</h2>
                        </div>
                    </div>
                    <!-- end of single product -->
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/machine5.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                
                                <button type = "button" class = "btn-buy"> View
                                   
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "item-title">Whirlpool Stainwash Ultra</h2>
                            </div>
                            <a href = "#" class = "product-name">7.5 kg Fully Automatic Top Loading Machine</a>
                            <p class = "product-price">???17,990.00</p>
                           
                        </div>
                    </div>
                    <!-- end of single product -->
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/machine6.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                               
                                <button type = "button" class = "btn-buy"> View
                                   
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "item-title">Whirlpool Machine </h2>
                            </div>
                            <a href = "#" class = "product-name">7.5-kg Fully Automatic Top Loading Machine</a>
                            <p class = "product-price">???22,990.00</p>
                            
                        </div>
                    </div>
                    <!-- end of single product -->
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "images/machine8.png" alt = "product image">
                            </div>
                            <div class = "product-btns">
                               
                                <button type = "button" class = "btn-buy"> View
                                    
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "item-title">Samsung Machine</h2>
                            </div>
                            <a href = "#" class = "product-name">6.2 kg Fully Automatic Top Loading Machine</a>
                            <p class = "strike-price"><s>???16,490.00</s></p>
                            <p class = "product-price">???15,490.00</p>
                        </div>

                        <div class = "off-info">
                            <h2 class = "item-title">20% off</h2>
                        </div>
                    </div>
			 </div>	
		 </div>	
	 </div>	
     
    
  <!-- Footer -->
   <footer class="footer">
	   <div class="inner-footer">
	      <div class="social-links">
		    <ul>
			  <li class="social-items"><a href="#"><i class="fab fa-facebook"></i></a></li>
			  <li class="social-items"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
			  <li class="social-items"><a href="#"><i class="fab fa-instagram"></i></a></li>
			  <li class="social-items"><a href="#"><i class="fab fa-tumblr-square"></i></a></li>
		   </ul>
		 </div>
		 
		 <div class="quick-links">
		    <ul>
              <li class="quick-items"><a href="hp.php">Home</a></li>	
              <li class="quick-items"><a href="aboutus.html">About us </a></li>
              <li class="quick-items"><a href="faq.html">FAQ</a></li>	
              <li class="quick-items"><a href="contact.php">Contact us</a></li>	
              <li class="quick-items"><a href="#">More</a></li>	 
			</ul>
		 </div>
	  </div>
	  
	  <div class="outer-footer">
	    Copright &copy; Easy Electronics.All Rights Reserved
	  </div>
	</footer>
  <!-- End Footer -->

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
</div>

    <script src="js/jquery.js"></script>
    <script src="js/my.js"></script>
		
</body>
</html>