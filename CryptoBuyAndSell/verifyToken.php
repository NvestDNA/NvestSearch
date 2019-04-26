<?php
/** @var \pmill\AwsCognito\CognitoClient $client */
$client = require(__DIR__ . '/bootstrap.php');
if(isset($_POST['u']))
{
$username=$_POST['u'];

print_r($username);
}

echo"
<!DOCTYPE html>
<html lang='en'>

<head>
    <title>Exchange Bitcoins Locally | Nvest Local Search</title>
    <!-- META TAGS -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel='shortcut icon' href='images/Nicon Logo - Blue.png' type='image/x-icon'>
    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700' rel='stylesheet'>
    <!-- FONTAWESOME ICONS -->
    <link rel='stylesheet' href='css/font-awesome.min.css'>
    <!-- ALL CSS FILES -->
    <link href='css/materialize.css' rel='stylesheet'>
    <link href='css/stylemain2.css' rel='stylesheet'>
    <link href='css/bootstrap.css' rel='stylesheet' type='text/css' />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href='css/responsive.css' rel='stylesheet'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src='js/html5shiv.js'></script>
    <script src='js/respond.min.js'></script>
    <![endif]-->
</head>

<body>
    <!--PRE LOADING-->
    <div id='preloader'>
        <div id='status'>&nbsp;</div>
    </div>
    <!--BANNER AND SERACH BOX-->
    <section class='dir3-home-head'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-7 col-sm-7 col-xs-12'>
                    <div class='dir-ho-tl' style='float: right;'>
                        <ul>
                            <li>
                                <a href='index.html'><img src='images/NvestSearch Logo1.png' alt='' style='width: 200px;'> </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class='col-md-5 col-sm-5'>
                    <div class='dir-ho-tr'>
                        <ul>
                            <li><a href='register.php'>Register</a> </li>
                            <li><a href='login.php'>Sign In</a> </li>
                            <li><a href='TradeRegistration.php'>Post Trade</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class='container dir-ho-t-sp'>
            <div class='row'>
                <div class='dir-hr1 dir-cat-search'>
                    <div class='dir-ho-t-tit'>
                        <h1>Buy And Sell Bitcoins Near You<br>Instant. Private. Secure.</h1>
                        <p>Trade Bitcoins In 16,620 Cities And 248 Countries Including India.</p>
                    </div>
                    <form class='cate-search-form' action='CryptoBuyAndSell.php' method='get'>
                        <div class='input-field'>
                            <input type='number' id='select-search' class='autocomplete' placeholder='Amount'>
                            <!-- <label for='select-search'>Amount</label> -->
                        </div>
                        <div class='input-field'>
                            <select class='form-control form-control-lg cityselect'>
                                 <option selected>Currency</option>
							 <option value='USD'>USD</option>
							  <option value='INR'>INR</option>
							   <option value='GBP'>GBP</option>
							    <option value='CAD'>CAD</option>
								<option value='BTC'>BTC</option>
                            </select>
                        </div>
                        <div class='input-field'>
                            <select class='form-control form-control-lg cityselect'>
                                <option selected>Country</option>
							 <option value='india'>INDIA</option>
							  <option value='australia'>Australia</option>
							   <option value='newzealand'>Newzealand</option>
							    <option value='germany'>Germany</option>
								<option value='china'>China</option>
                            </select>
                        </div>
                        <div class='input-field'>
                            <select class='form-control form-control-lg cityselect' name='paymentmethod'>
                                <option selected>Payment</option>
							 <option value='nvestpay'>NvestPay</option>
							  <option value='paytm'>Paytm</option>
							   <option value='nvestwallet'>NvestWallet</option>
							    <option value='phonepay'>PhonePay</option>
								<option value='paypal'>Paypal</option>
                            </select>
                        </div>

                        <div class='input-field'>
                            <input type='submit' value='search' class='btn waves-effect waves-light tourz-sear-btn' style='padding-left:15px;background-color: #0d1f47;'>
                        </div>
                    </form>";?>
					
					
					<?php
		
		
		
		if(isset($_GET['paymentmethod']))
{
$paymentmethod=$_GET['paymentmethod'];
$sql="select sn,username,paymentmethod,minamount,maxamount,image from traderegistration where paymentmethod LIKE ('%$paymentmethod%')";
$result = mysqli_query($conn, $sql);

}

 ?>
					
					
					
					
					
					
					
					
					
				<?php
echo"				
                </div>
            </div>
        </div>
    </section>
    <!--TOP SEARCH SECTION-->
    <section id='myID' class='bottomMenu hom3-top-menu'>
        <div class='container top-search-main'>
            <div class='row'>
                <div class='ts-menu'>
                    <!--SECTION: LOGO-->
                    <div class='ts-menu-1'>
                        <a href='index-1.html'><img src='images/aff-logo.png' alt=''> </a>
                    </div>
                    <!--SECTION: BROWSE CATEGORY(NOTE:IT'S HIDE ON MOBILE & TABLET VIEW)-->
                    <div class='ts-menu-2'><a href='#' class='t-bb'>All Pages <i class='fa fa-angle-down' aria-hidden='true'></i></a>
                        <!--SECTION: BROWSE CATEGORY-->
                        <div class='cat-menu cat-menu-1'>
                            <div class='dz-menu'>
                                <div class='dz-menu-inn'>
                                    <h4>Frontend Pages</h4>
                                    <ul>
                                        <li><a href='index-1.html'>Home 1</a></li>
                                        <li><a href='index-2.html'>Home 2</a></li>
                                        <li><a href='index-3.html'>Home 3</a></li>
                                        <li><a href='index-4.html'>Home 4</a></li>
                                        <li><a href='list.html'>All Listing</a></li>
                                        <li><a href='listing-details.html'>Listing Details </a> </li>
                                        <li><a href='price.html'>Add Listing</a> </li>
                                        <li><a href='list-lead.html'>Lead Listing</a></li>
                                        <li><a href='list-grid.html'>Listing Grid View</a></li>
                                    </ul>
                                </div>
                                <div class='dz-menu-inn'>
                                    <h4>Frontend Pages</h4>
                                    <ul>
                                        <li><a href='new-business.html'> New Listings </a> </li>
                                        <li><a href='nearby-listings.html'>Nearby Listings</a> </li>
                                        <li><a href='customer-reviews.html'> Customer Reviews</a> </li>
                                        <li><a href='trendings.html'> Top Trendings</a> </li>
                                        <li><a href='how-it-work.html'> How It Work</a> </li>
                                        <li><a href='advertise.html'> Advertise with us</a> </li>
                                        <li><a href='price.html'> Price Details</a> </li>
                                    </ul>
                                </div>
                                <div class='dz-menu-inn'>
                                    <h4>Frontend Pages</h4>
                                    <ul>
                                        <li><a href='about-us.html'> About Us</a> </li>
                                        <li><a href='customer-reviews.html'> Customer Reviews</a> </li>
                                        <li><a href='contact-us.html'> Contact Us</a> </li>
                                        <li><a href='blog.html'> Blog Post</a> </li>
                                        <li><a href='blog-content.html'> Blog Details</a> </li>
                                        <li><a href='elements.html'> All Elements </a> </li>
                                        <li><a href='shop-listing-details.html'> Shop Details </a> </li>
                                        <li><a href='property-listing-details.html'> Property Details </a> </li>
                                    </ul>
                                </div>
                                <div class='dz-menu-inn'>
                                    <h4>Dashboard Pages</h4>
                                    <ul>
                                        <li><a href='dashboard.html'> Dashboard</a> </li>
                                        <li><a href='db-invoice.html'> Invoice</a> </li>
                                        <li><a href='db-setting.html'> User Setting</a> </li>
                                        <li><a href='db-all-listing.html'> All Listings</a> </li>
                                        <li><a href='db-listing-add.html'> Add New Listing</a> </li>
                                        <li><a href='db-review.html'> Listing Reviews</a> </li>
                                        <li><a href='db-payment.html'> Listing Payments </a> </li>
                                    </ul>
                                </div>
                                <div class='dz-menu-inn'>
                                    <h4>Dashboard Pages</h4>
                                    <ul>
                                        <li><a href='register.html'> User Register</a> </li>
                                        <li><a href='login.html'> User Login</a> </li>
                                        <li><a href='forgot-pass.html'> Forgot Password</a> </li>
                                        <li><a href='db-message.html'> Messages</a> </li>
                                        <li><a href='db-my-profile.html'> Dashboard Profile</a> </li>
                                        <li><a href='db-post-ads.html'> Post Ads </a> </li>
                                        <li><a href='db-invoice-download.html'> Download Invoice </a> </li>
                                    </ul>
                                </div>
                                <div class='dz-menu-inn lat-menu'>
                                    <h4>Admin Panel Pages</h4>
                                    <ul>
                                        <li><a target='_blank' href='admin.html'> Admin</a> </li>
                                        <li><a target='_blank' href='admin-all-listing.html'> All Listing</a> </li>
                                        <li><a target='_blank' href='admin-all-users.html'> All Users</a> </li>
                                        <li><a target='_blank' href='admin-analytics.html'> Analytics</a> </li>
                                        <li><a target='_blank' href='admin-ads.html'> Advertisement</a> </li>
                                        <li><a target='_blank' href='admin-setting.html'> Admin Setting </a> </li>
                                        <li><a target='_blank' href='admin-payment.html'> Payments </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class='dir-home-nav-bot'>
                                <ul>
                                    <li>A few reasons you’ll love Online Business Directory <span>Call us on: +01 6214 6548</span> </li>
                                    <li><a href='advertise.html' class='waves-effect waves-light btn-large'><i class='fa fa-bullhorn'></i>
                                            Advertise with us</a>
                                    </li>
                                    <li><a href='db-listing-add.html' class='waves-effect waves-light btn-large'><i class='fa fa-bookmark'></i>
                                            Add your business</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--SECTION: SEARCH BOX-->
                    <div class='ts-menu-3'>
                        <div class=''>
                            <form class='tourz-search-form tourz-top-search-form'>
                                <div class='input-field'>
                                    <input type='text' id='top-select-city' class='autocomplete'>
                                    <label for='top-select-city'>Enter city</label>
                                </div>
                                <div class='input-field'>
                                    <input type='text' id='top-select-search' class='autocomplete'>
                                    <label for='top-select-search' class='search-hotel-type'>Search your services like hotel, resorts, events and
                                        more</label>
                                </div>
                                <div class='input-field'>
                                    <input type='submit' value='' class='waves-effect waves-light tourz-top-sear-btn'> </div>
                            </form>
                        </div>
                    </div>
                    <!--SECTION: REGISTER,SIGNIN AND ADD YOUR BUSINESS-->
                    <div class='ts-menu-4'>
                        <div class='v3-top-ri'>
                            <ul>
                                <li><a href='login.html' class='v3-menu-sign'><i class='fa fa-sign-in'></i> Sign In</a> </li>
                                <li><a href='db-listing-add.html' class='v3-add-bus'><i class='fa fa-plus' aria-hidden='true'></i> Add Listing</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--MOBILE MENU ICON:IT'S ONLY SHOW ON MOBILE & TABLET VIEW-->
                    <div class='ts-menu-5'><span><i class='fa fa-bars' aria-hidden='true'></i></span> </div>
                    <!--MOBILE MENU CONTAINER:IT'S ONLY SHOW ON MOBILE & TABLET VIEW-->
                    <div class='mob-right-nav' data-wow-duration='0.5s'>
                        <div class='mob-right-nav-close'><i class='fa fa-times' aria-hidden='true'></i> </div>
                        <h5>Business</h5>
                        <ul class='mob-menu-icon'>
                            <li><a href='price.html'>Add Business</a> </li>
                            <li><a href='#!' data-toggle='modal' data-target='#register'>Register</a> </li>
                            <li><a href='#!' data-toggle='modal' data-target='#sign-in'>Sign In</a> </li>
                        </ul>
                        <h5>All Categories</h5>
                        <ul>
                            <li><a href='list.html'><i class='fa fa-angle-right' aria-hidden='true'></i> Help Services</a> </li>
                            <li><a href='list.html'><i class='fa fa-angle-right' aria-hidden='true'></i> Appliances Repair & Services</a>
                            </li>
                            <li><a href='list.html'><i class='fa fa-angle-right' aria-hidden='true'></i> Furniture Dealers</a> </li>
                            <li><a href='list.html'><i class='fa fa-angle-right' aria-hidden='true'></i> Packers and Movers</a> </li>
                            <li><a href='list.html'><i class='fa fa-angle-right' aria-hidden='true'></i> Pest Control </a> </li>
                            <li><a href='list.html'><i class='fa fa-angle-right' aria-hidden='true'></i> Solar Product Dealers</a> </li>
                            <li><a href='list.html'><i class='fa fa-angle-right' aria-hidden='true'></i> Interior Designers</a> </li>
                            <li><a href='list.html'><i class='fa fa-angle-right' aria-hidden='true'></i> Carpenters</a> </li>
                            <li><a href='list.html'><i class='fa fa-angle-right' aria-hidden='true'></i> Plumbing Contractors</a> </li>
                            <li><a href='list.html'><i class='fa fa-angle-right' aria-hidden='true'></i> Modular Kitchen</a> </li>
                            <li><a href='list.html'><i class='fa fa-angle-right' aria-hidden='true'></i> Internet Service Providers</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--HOME PROJECTS-->
    <section>
        <div class='land-full land-packages'>
            <div class='container'>
                <div class='com-title'>
                    <h2>How <span>To's</span></h2>
                    <p>Click Any Of The Boxes Below And Talk To One Of Our Certified <a href='http://www.cryptoconsultation.com/'>CryptoConsultants.</a></p>
                </div>
                <div class='land-pack'>
                    <ul>
                        <li>
                            <div class='land-pack-grid'>
                                <div class='land-pack-grid-img'>
                                    <img src='images/services/20.jpeg' alt=''>
                                </div>
                                <div class='land-pack-grid-text'>
                                    <h4>Buy Bitcoins</h4>
                                    <a href='service-booking.html' class='land-pack-grid-btn'>Get Started</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class='land-pack-grid'>
                                <div class='land-pack-grid-img'>
                                    <img src='images/services/p1.jpg' alt=''>
                                </div>
                                <div class='land-pack-grid-text'>
                                    <h4>Sell Bitcoins</h4>
                                    <a href='service-booking.html' class='land-pack-grid-btn land-pack-grid-btn-blu'>Get Started</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class='land-pack-grid'>
                                <div class='land-pack-grid-img'>
                                    <img src='images/services/10.jpeg' alt=''>
                                </div>
                                <div class='land-pack-grid-text'>
                                    <h4>Set Up Wallet</h4>
                                    <a href='service-booking.html' class='land-pack-grid-btn land-pack-grid-btn-yel'>Get Started</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class='land-pack-grid'>
                                <div class='land-pack-grid-img'>
                                    <img src='images/services/ser5.jpg' alt=''>
                                </div>
                                <div class='land-pack-grid-text'>
                                    <h4>Exchange For Tokens</h4>
                                    <a href='service-booking.html' class='land-pack-grid-btn land-pack-grid-btn-red'>Get Started</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--BEST THINGS-->
    <section class='com-padd com-padd-redu-bot'>
        <div class='container dir-hom-pre-tit'>
            <div class='com-title'>
                <h2>Live Offers In <span>Your City</span></h2>
                
                
                <p>Explore some of the best P2P cryptocurrency deals taking place in your city right now.</p>
				
            </div>
            
			
			
			
			
			
			<button class='btn arrow-display-right' onclick='plusDivs(1)'>&#10095;</button>
			
            <div class='row mySlides'>
                <h2 style='padding: 0 0 20px 15px;'>Buy Bitcoin</h2>";?>
				
				<?php
include_once('nvestbuysellconfig.php');

$sql = "SELECT sn,username,paymentmethod,minamount,maxamount,image FROM traderegistration";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
			
		echo"	
				 <div class='col-md-6'>
                    <div>
			<!--POPULAR LISTINGS-->
<div class='home-list-pop'>
<!--POPULAR LISTINGS IMAGE-->
<div class='col-md-3'><img src='data:image/jpeg;base64,".base64_encode($row["image"])."'/> </div>
<!--POPULAR LISTINGS: CONTENT-->
<div class='col-md-9 home-list-pop-desc'> <a href='TraderDetails.php?sn=".$row["sn"]."'>
<h3><td>".$row["username"]."</td></h3>
</a>
<h2 class='text-success'>$3057.54</h2>
<h4>Payment Method : <td>".$row["paymentmethod"]."</td> </h4>
<p>Limits : <td>".$row["minamount"]."</td>-<td>".$row["maxamount"]."</td></p>
<!-- <span class='home-list-pop-rat'>4.2</span> -->
<div class='home-list-pop-rat'>
<ul>
<li><a href='#!'><img class='iconincard' src='images/Nicon Logo - Blue.png' alt=''/> 4.2</a> </li>
<li><a href='#!'><i class='fa fa-exchange' aria-hidden='true'></i> 435+</a> </li>
<li><a href='#!'><i class='fa fa-bullseye' aria-hidden='true'></i> 94%</a> </li>
<li><a href='#!'><img class='iconincard' src='images/Nvest DNA Icon.png' alt=''/> 145</a> </li>
</ul>
</div>
</div>
</div>	
				

				
               
                        
                    </div>
                </div>";
	}
}
?>
				
			</div>	

			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<?php
			echo"
            <!-- adding slider start -->
            <div class='row mySlides'>
                    <h2 style='padding: 0 0 20px 15px;'>Sell bitcoin</h2>";
					?>
					
					<?php
include_once('nvestbuysellconfig.php');

$sql = "SELECT sn,username,paymentmethod,minamount,maxamount,image FROM traderegistration";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
			
		echo"	
                    
                            <div class='col-md-6'>
                    <div>
                        <!--POPULAR LISTINGS-->
                        <div class='home-list-pop'>
                            <!--POPULAR LISTINGS IMAGE-->
                            <div class='col-md-3'> <img src='data:image/jpeg;base64,".base64_encode($row["image"])."' />  </div>
                            <!--POPULAR LISTINGS: CONTENT-->
                            <div class='col-md-9 home-list-pop-desc'> <a href='TraderDetails.php?sn=".$row["sn"]."'>
                                    <h3><td>".$row["username"]."</td></h3>
                                </a>
                                <h4>Payment Method : <td>".$row["paymentmethod"]."</td> </h4>
								<h4>Price : $3880</h4>
								<h4>Limit : <td>".$row["minamount"]."</td> - <td>".$row["maxamount"]."</td></h4>
                                <span class='home-list-pop-rat'>4.2</span>
                                <div class='hom-list-share'>
                                    <ul>
                                        <li><a href='#!'><i class='fa fa-bar-chart' aria-hidden='true'></i> 52</a> </li>
                                        <li><a href='#!'><i class='fa fa-heart-o' aria-hidden='true'></i> 32</a> </li>
                                        <li><a href='#!'><i class='fa fa-eye' aria-hidden='true'></i> 420</a> </li>
                                        <li><a href='#!'><i class='fa fa-share-alt' aria-hidden='true'></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR LISTINGS-->
                        
                        <!--POPULAR LISTINGS-->
                        
                        <!--POPULAR LISTINGS-->
                        
                    </div>
                </div>";

	}
}
?>
</div>
<?php
		echo"		
            <script>
                    var slideIndex = 1;
                    showDivs(slideIndex);
                    
                    function plusDivs(n) {
                     showDivs(slideIndex += n);
                    }
                    
                    function showDivs(n) {
                     var i;
                     var x = document.getElementsByClassName('mySlides');
                     if (n > x.length) {slideIndex = 1}
                     if (n < 1) {slideIndex = x.length}
                     for (i = 0; i < x.length; i++) {
                        x[i].style.display = 'none'; 
                     }
                     x[slideIndex-1].style.display = 'block'; 
                    }
                    </script>
                    
            <!-- adding slider end -->
        </div>
    </section>

    <!--FIND YOUR SERVICE-->
    <section class='com-padd com-padd-redu-bot1 pad-bot-red-40'>
        <div class='container'>
            <div class='row'>
                <div class='com-title'>
                    <h2>Need More <span>Security</span></h2>
                    <p>NvestBank offers a wide array of clearning hourse services for P2P spot trades for both online and offine transactions.</p>
                </div>
                <div class='dir-hli'>
                    <ul>
                        <!--=====LISTINGS======-->
                        <li class='col-md-3 col-sm-6'>
                            <a href='list.html'>
                                <div class='dir-hli-5'>
                                    <div class='dir-hli-1'>
                                        <div class='dir-hli-3'><img src='images/hci1.png' alt=''> </div>
                                        <div class='dir-hli-4'> </div> <img src='images/services/15.jpg' alt=''>
                                    </div>
                                    <div class='dir-hli-2'>
                                        <h4>Hotels & Resorts <span class='dir-ho-cat'>Show All (940)</span></h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!--=====LISTINGS======-->
                        <li class='col-md-3 col-sm-6'>
                            <a href='list-grid.html'>
                                <div class='dir-hli-5'>
                                    <div class='dir-hli-1'>
                                        <div class='dir-hli-3'><img src='images/hci1.png' alt=''> </div>
                                        <div class='dir-hli-4'> </div> <img src='images/services/13.jpg' alt=''>
                                    </div>
                                    <div class='dir-hli-2'>
                                        <h4>Hospitals <span class='dir-ho-cat'>Show All (174)</span></h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!--=====LISTINGS======-->
                        <li class='col-md-3 col-sm-6'>
                            <a href='list.html'>
                                <div class='dir-hli-5'>
                                    <div class='dir-hli-1'>
                                        <div class='dir-hli-3'><img src='images/hci1.png' alt=''> </div>
                                        <div class='dir-hli-4'> </div> <img src='images/services/9.jpg' alt=''>
                                    </div>
                                    <div class='dir-hli-2'>
                                        <h4>Transportation <span class='dir-ho-cat'>Show All (624)</span></h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!--=====LISTINGS======-->
                        <li class='col-md-3 col-sm-6'>
                            <a href='list-grid.html'>
                                <div class='dir-hli-5'>
                                    <div class='dir-hli-1'>
                                        <div class='dir-hli-3'><img src='images/hci1.png' alt=''> </div>
                                        <div class='dir-hli-4'> </div> <img src='images/services/12.jpeg' alt=''>
                                    </div>
                                    <div class='dir-hli-2'>
                                        <h4>Property <span class='dir-ho-cat'>Show All (960)</span></h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!--=====LISTINGS======-->
                        <li class='col-md-3 col-sm-6'>
                            <a href='list.html'>
                                <div class='dir-hli-5'>
                                    <div class='dir-hli-1'>
                                        <div class='dir-hli-3'><img src='images/hci1.png' alt=''> </div>
                                        <div class='dir-hli-4'> </div> <img src='images/services/2.jpeg' alt=''>
                                    </div>
                                    <div class='dir-hli-2'>
                                        <h4>Automobilers <span class='dir-ho-cat'>Show All (745)</span></h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!--=====LISTINGS======-->
                        <li class='col-md-3 col-sm-6'>
                            <a href='list-grid.html'>
                                <div class='dir-hli-5'>
                                    <div class='dir-hli-1'>
                                        <div class='dir-hli-3'><img src='images/hci1.png' alt=''> </div>
                                        <div class='dir-hli-4'> </div> <img src='images/services/6.jpeg' alt=''>
                                    </div>
                                    <div class='dir-hli-2'>
                                        <h4>Electricals <span class='dir-ho-cat'>Show All (865)</span></h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!--=====LISTINGS======-->
                        <li class='col-md-3 col-sm-6'>
                            <a href='list.html'>
                                <div class='dir-hli-5'>
                                    <div class='dir-hli-1'>
                                        <div class='dir-hli-3'><img src='images/hci1.png' alt=''> </div>
                                        <div class='dir-hli-4'> </div> <img src='images/services/16.jpeg' alt=''>
                                    </div>
                                    <div class='dir-hli-2'>
                                        <h4>Education <span class='dir-ho-cat'>Show All (935)</span></h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!--=====LISTINGS======-->
                        <li class='col-md-3 col-sm-6'>
                            <a href='list-grid.html'>
                                <div class='dir-hli-5'>
                                    <div class='dir-hli-1'>
                                        <div class='dir-hli-3'><img src='images/hci1.png' alt=''> </div>
                                        <div class='dir-hli-4'> </div> <img src='images/services/8.jpeg' alt=''>
                                    </div>
                                    <div class='dir-hli-2'>
                                        <h4>Sports <span class='dir-ho-cat'>Show All (361)</span></h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--EXPLORE CITY LISTING-->
    <!-- <section class='com-padd com-padd-redu-top'>
        <div class='container'>
            <div class='row'>
                <div class='com-title'>
                    <h2>Explore your <span>City Listings</span></h2>
                    <p>Explore some of the best business from around the world from our partners and friends.</p>
                </div>
                <div class='col-md-6'>
                    <a href='list-lead.html'>
                        <div class='list-mig-like-com'>
                            <div class='list-mig-lc-img'> <img src='images/listing/home.jpg' alt='' /> </div>
                            <div class='list-mig-lc-con'>
                                <div class='list-rat-ch list-room-rati'> <span>4.0</span> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star-o' aria-hidden='true'></i> </div>
                                <h5>United States</h5>
                                <p>21 Cities . 2045 Listings . 3648 Users</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class='col-md-3'>
                    <a href='list-lead.html'>
                        <div class='list-mig-like-com'>
                            <div class='list-mig-lc-img'> <img src='images/listing/home2.jpg' alt='' /> </div>
                            <div class='list-mig-lc-con list-mig-lc-con2'>
                                <h5>United Kingdom</h5>
                                <p>18 Cities . 1454 Listings</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class='col-md-3'>
                    <a href='list-lead.html'>
                        <div class='list-mig-like-com'>
                            <div class='list-mig-lc-img'> <img src='images/listing/home3.jpg' alt='' /> </div>
                            <div class='list-mig-lc-con list-mig-lc-con2'>
                                <h5>Australia</h5>
                                <p>14 Cities . 1895 Listings</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class='col-md-3'>
                    <a href='list-lead.html'>
                        <div class='list-mig-like-com'>
                            <div class='list-mig-lc-img'> <img src='images/listing/home4.jpg' alt='' /> </div>
                            <div class='list-mig-lc-con list-mig-lc-con2'>
                                <h5>Germany</h5>
                                <p>12 Cities . 1260 Listings</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class='col-md-3'>
                    <a href='list-lead.html'>
                        <div class='list-mig-like-com'>
                            <div class='list-mig-lc-img'> <img src='images/listing/home1.jpg' alt='' /> </div>
                            <div class='list-mig-lc-con list-mig-lc-con2'>
                                <h5>India</h5>
                                <p>24 Cities . 4152 Listings</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section> -->
    <!--ADD BUSINESS-->
    <section class='com-padd quic-book-ser-full'>
        <div class='quic-book-ser'>
            <div class='quic-book-ser-inn'>
                <div class='quic-book-ser-left'>
                    <div class='land-com-form'>
                        <h2>Quick service request</h2>
                        <form>
                            <ul>
                                <li>
                                    <div class='row'>
                                        <div class='input-field col s12'>
                                            <input type='text' class='validate' required placeholder='Name'>
                                            <!-- <label>Name</label> -->
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class='row'>
                                        <div class='input-field col s12'>
                                            <input type='number' class='validate' required placeholder='Phone number'>
                                            <!-- <label>Phone number</label> -->
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class='row'>
                                        <div class='input-field col s12'>
                                            <input type='email' class='validate' required placeholder='Email id'>
                                            <!-- <label>Email id</label> -->
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class='row'>
                                        <div class='input-field col s12'>
                                            <input type='text' id='select-category1' class='autocomplete auto-category' placeholder='Select your Service'>
                                            <!-- <label for='select-category1'>Select your Service</label> -->
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class='row'>
                                        <div class='input-field col s12'>
                                            <input type='submit' value='Send Request'>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>Praesent felis velit, maximus at dapibus semper, fermentum sagittis diam. <a href='#'>Privacy Policy</a></p>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
                <div class='quic-book-ser-right'>
                    <div class='hom-cre-acc-left'>
                        <h3>What service do you need? <span>Business Directory</span></h3>
                        <p>Tell us more about your requirements so that we can connect you to the right service provider.</p>
                        <ul>
                            <li> <img src='images/icon/7.png' alt=''>
                                <div>
                                    <h5>Tell us more about your requirements</h5>
                                    <p>Imagine you have made your presence online through a local online directory, but your competitors have..</p>
                                </div>
                            </li>
                            <li> <img src='images/icon/5.png' alt=''>
                                <div>
                                    <h5>We connect with right service provider</h5>
                                    <p>Advertising your business to area specific has many advantages. For local businessmen, it is an
                                        opportunity..</p>
                                </div>
                            </li>
                            <li> <img src='images/icon/6.png' alt=''>
                                <div>
                                    <h5>Happy with our service</h5>
                                    <p>Your local business too needs brand management and image making. As you know the local market..</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--CREATE FREE ACCOUNT-->
    <!--<section class='com-padd sec-bg-white'>
        <div class='container'>
            <div class='row'>
                <div class='com-title'>
                    <h2>Create a free <span>Account</span></h2>
                    <p>Explore some of the best tips from around the world from our partners and friends.</p>
                </div>
                <div class='col-md-6'>
                    <div class='hom-cre-acc-left'>
                        <h3>A few reasons you’ll love Online <span>Business Directory</span></h3>
                        <p>5 Benefits of Listing Your Business to a Local Online Directory</p>
                        <ul>
                            <li> <img src='images/icon/7.png' alt=''>
                                <div>
                                    <h5>Enhancing Your Business</h5>
                                    <p>Imagine you have made your presence online through a local online directory, but your competitors have..</p>
                                </div>
                            </li>
                            <li> <img src='images/icon/5.png' alt=''>
                                <div>
                                    <h5>Advertising Your Business</h5>
                                    <p>Advertising your business to area specific has many advantages. For local businessmen, it is an opportunity..</p>
                                </div>
                            </li>
                            <li> <img src='images/icon/6.png' alt=''>
                                <div>
                                    <h5>Develop Brand Image</h5>
                                    <p>Your local business too needs brand management and image making. As you know the local market..</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class='col-md-6'>
                    <div class='hom-cre-acc-left hom-cre-acc-right'>
                        <form>
                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input id='acc-name' type='text' class='validate'>
                                    <label for='acc-name'>Name</label>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input id='acc-mob' type='number' class='validate'>
                                    <label for='acc-mob'>Mobile</label>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input id='acc-mail' type='email' class='validate'>
                                    <label for='acc-mail'>Email</label>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input id='acc-pass' type='password' class='validate'>
                                    <label for='acc-pass'>Password</label>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col s12 hom-cr-acc-check'>
                                    <input type='checkbox' id='test5' />
                                    <label for='test5'>By signing up, you agree to the Terms and Conditions and Privacy Policy. You also agree to receive product-related emails.</label>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='input-field col s12'> <a class='waves-effect waves-light btn-large full-btn' href='#!'>Submit Now</a> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!--MOBILE APP-->
    <section class='web-app com-padd'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-6 web-app-img'> <img src='images/mobile.png' alt='' /> </div>
                <div class='col-md-6 web-app-con'>
                    <h2>Looking for the Best Service Provider? <span>Get the App!</span></h2>
                    <ul>
                        <li><i class='fa fa-check' aria-hidden='true'></i> Find nearby listings</li>
                        <li><i class='fa fa-check' aria-hidden='true'></i> Easy service enquiry</li>
                        <li><i class='fa fa-check' aria-hidden='true'></i> Listing reviews and ratings</li>
                        <li><i class='fa fa-check' aria-hidden='true'></i> Manage your listing, enquiry and reviews</li>
                    </ul> <span>We'll send you a link, open it on your phone to download the app</span>
                    <form>
                        <ul>
                            <li>
                                <input type='text' placeholder='+01' /> </li>
                            <li>
                                <input type='number' placeholder='Enter mobile number' /> </li>
                            <li>
                                <input type='submit' value='Get App Link' /> </li>
                        </ul>
                    </form>
                    <a href='#'><img src='images/android.png' alt='' /> </a>
                    <a href='#'><img src='images/apple.png' alt='' /> </a>
                </div>
            </div>
        </div>
    </section>
    <!--FOOTER SECTION-->
    <footer id='colophon' class='site-footer clearfix'>
        <div id='quaternary' class='sidebar-container ' role='complementary'>
            <div class='sidebar-inner'>
                <div class='widget-area clearfix'>
                    <div id='azh_widget-2' class='widget widget_azh_widget'>
                        <div data-section='section'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-sm-4 col-md-3 foot-logo'> <img src='images/foot-logo.png' alt='logo'>
                                        <p class='hasimg'>Worlds's No. 1 Local Business Directory Website.</p>
                                        <p class='hasimg'>It is a long established fact that a reader will be distracted by the readable content of a
                                            page when looking at its layout. </p>
                                    </div>
                                    <div class='col-sm-4 col-md-3'>
                                        <h4>Support & Help</h4>
                                        <ul class='two-columns'>
                                            <li> <a href='advertise.html'>Advertise us</a> </li>
                                            <li> <a href='about-us.html'>About Us</a> </li>
                                            <li> <a href='customer-reviews.html'>Review</a> </li>
                                            <li> <a href='how-it-work.html'>How it works </a> </li>
                                            <li> <a href='add-listing.html'>Add Business</a> </li>
                                            <li> <a href='#!'>Register</a> </li>
                                            <li> <a href='#!'>Login</a> </li>
                                            <li> <a href='#!'>Quick Enquiry</a> </li>
                                            <li> <a href='#!'>Ratings </a> </li>
                                            <li> <a href='trendings.html'>Top Trends</a> </li>
                                        </ul>
                                    </div>
                                    <div class='col-sm-4 col-md-3'>
                                        <h4>Popular Services</h4>
                                        <ul class='two-columns'>
                                            <li> <a href='#!'>Hotels</a> </li>
                                            <li> <a href='#!'>Hospitals</a> </li>
                                            <li> <a href='#!'>Transportation</a> </li>
                                            <li> <a href='#!'>Real Estates </a> </li>
                                            <li> <a href='#!'>Automobiles</a> </li>
                                            <li> <a href='#!'>Resorts</a> </li>
                                            <li> <a href='#!'>Education</a> </li>
                                            <li> <a href='#!'>Sports Events</a> </li>
                                            <li> <a href='#!'>Web Services </a> </li>
                                            <li> <a href='#!'>Skin Care</a> </li>
                                        </ul>
                                    </div>
                                    <div class='col-sm-4 col-md-3'>
                                        <h4>Cities Covered</h4>
                                        <ul class='two-columns'>
                                            <li> <a href='#!'>Atlanta</a> </li>
                                            <li> <a href='#!'>Austin</a> </li>
                                            <li> <a href='#!'>Baltimore</a> </li>
                                            <li> <a href='#!'>Boston </a> </li>
                                            <li> <a href='#!'>Chicago</a> </li>
                                            <li> <a href='#!'>Indianapolis</a> </li>
                                            <li> <a href='#!'>Las Vegas</a> </li>
                                            <li> <a href='#!'>Los Angeles</a> </li>
                                            <li> <a href='#!'>Louisville </a> </li>
                                            <li> <a href='#!'>Houston</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-section='section' class='foot-sec2'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-sm-3'>
                                        <h4>Payment Options</h4>
                                        <p class='hasimg'> <img src='images/payment.png' alt='payment'> </p>
                                    </div>
                                    <div class='col-sm-4'>
                                        <h4>Address</h4>
                                        <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To Airport</p>
                                        <p> <span class='strong'>Phone: </span> <span class='highlighted'>+01 1245 2541</span> </p>
                                    </div>
                                    <div class='col-sm-5 foot-social'>
                                        <h4>Follow with us</h4>
                                        <p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
                                        <ul>
                                            <li><a href='#!'><i class='fa fa-facebook' aria-hidden='true'></i></a> </li>
                                            <li><a href='#!'><i class='fa fa-google-plus' aria-hidden='true'></i></a> </li>
                                            <li><a href='#!'><i class='fa fa-twitter' aria-hidden='true'></i></a> </li>
                                            <li><a href='#!'><i class='fa fa-linkedin' aria-hidden='true'></i></a> </li>
                                            <li><a href='#!'><i class='fa fa-youtube' aria-hidden='true'></i></a> </li>
                                            <li><a href='#!'><i class='fa fa-whatsapp' aria-hidden='true'></i></a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .widget-area -->
            </div>
            <!-- .sidebar-inner -->
        </div>
        <!-- #quaternary -->
    </footer>
    <!--COPY RIGHTS-->
    <section class='copy'>
        <div class='container'>
            <p>copyrights © 2017 RN53Themes.net. &nbsp;&nbsp;All rights reserved. </p>
        </div>
    </section>
    <!--QUOTS POPUP-->
    <section>
        <!-- GET QUOTES POPUP -->
        <div class='modal fade dir-pop-com' id='list-quo' role='dialog'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header dir-pop-head'>
                        <button type='button' class='close' data-dismiss='modal'>×</button>
                        <h4 class='modal-title'>Get a Quotes</h4>
                        <!--<i class='fa fa-pencil dir-pop-head-icon' aria-hidden='true'></i>-->
                    </div>
                    <div class='modal-body dir-pop-body'>
                        <form method='post' class='form-horizontal'>
                            <!--LISTING INFORMATION-->
                            <div class='form-group has-feedback ak-field'>
                                <label class='col-md-4 control-label'>Full Name *</label>
                                <div class='col-md-8'>
                                    <input type='text' class='form-control' name='fname' placeholder='' required> </div>
                            </div>
                            <!--LISTING INFORMATION-->
                            <div class='form-group has-feedback ak-field'>
                                <label class='col-md-4 control-label'>Mobile</label>
                                <div class='col-md-8'>
                                    <input type='text' class='form-control' name='mobile' placeholder=''> </div>
                            </div>
                            <!--LISTING INFORMATION-->
                            <div class='form-group has-feedback ak-field'>
                                <label class='col-md-4 control-label'>Email</label>
                                <div class='col-md-8'>
                                    <input type='text' class='form-control' name='email' placeholder=''> </div>
                            </div>
                            <!--LISTING INFORMATION-->
                            <div class='form-group has-feedback ak-field'>
                                <label class='col-md-4 control-label'>Message</label>
                                <div class='col-md-8 get-quo'>
                                    <textarea class='form-control'></textarea>
                                </div>
                            </div>
                            <!--LISTING INFORMATION-->
                            <div class='form-group has-feedback ak-field'>
                                <div class='col-md-6 col-md-offset-4'>
                                    <input type='submit' value='SUBMIT' class='pop-btn'> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- GET QUOTES Popup END -->
    </section>
    <!--SCRIPT FILES-->
    <script src='js/jquery.min.js'></script>
    <script src='js/bootstrap.js' type='text/javascript'></script>
    <!-- <script src='js/materialize.min.js' type='text/javascript'></script> -->
    <script src='js/custom.js'></script>
</body>

</html>"
?>