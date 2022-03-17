<?php require("libs/fetch_data.php");?>
<?php //code to get the item using its id
   include("database/conn.php");//database config file
   $id=$_REQUEST['id']; $query="SELECT * from blogs where id='".$id."'"; $result=mysqli_query($GLOBALS["___mysqli_ston"],$query) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
   $row = mysqli_fetch_assoc($result);
   //pageview count query
   $page=$row['title'];
   $count="SELECT * FROM page_hits WHERE page='".$page."'";$feedback=mysqli_query($GLOBALS["___mysqli_ston"],$count) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
   $roo=mysqli_fetch_assoc($feedback);?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="format-detection" content="telephone=no">
    <title>Solani</title>
   
    <link href="css/main.css" rel="stylesheet">
    <link href="css/blog_page.css" rel="stylesheet">
    <style>
      @keyframes animate-circle {
      	from {
      		transform: scale(0);
      		opacity: 1;
      	}
      	to {
      		transform: scale(1);
      		opacity: 0;
      	}
      }
      #preloader{
      	width: 100%;
      	height: 100%;
      	position: fixed;
      	top: 0;
      	left: 0;
      	z-index: 999;
      	background: #1C1C1C;
      	background: linear-gradient(to right, rgba(36, 31, 31, 1) 0%, rgba(36, 31, 31, 1) 32%, rgba(74, 71, 70, 1) 100%);
      }
      .loader {
      	position: fixed;
      	top: 50%;
      	left: 50%;
      	height: 10rem;
      	width: 10rem;
      	transform: translateX(-50%) translateY(-50%);
      }
      .loader > .circle {
      	position: absolute;
      	height: inherit;
      	width: inherit;
      	background: #B66449;
      	border-radius: 0;
      	animation: animate-circle 2s cubic-bezier(.9, .24, .62, .79) infinite;
      }
      .loader > .circle:nth-of-type(1) {
      	animation-delay: 0s;
      }
      .loader > .circle:nth-of-type(2) {
      	animation-delay: calc(2s / -3);
      }
      .loader > .circle:nth-of-type(3) {
      	animation-delay: calc(2s / -6);
      }
    </style>
  </head>
   <body>
      <!--Header-->
      <!--//header-->
      <!--update database on page views-->
      <?php  require_once('adminstats/conn.php');
         require_once('counter.php');
         $pn=updateCounter(''.$row['title'].''); // Updates page hits
         echo $pn;
         updateInfo(); // Updates hit info ?>
      <!--//banner-->
    <main class="main blog_page">
    <div class="header">
            <div class="header__left">
               <div class="header__letter">
               <img class="main_logo" src="images/logo_project.png" style="z-index: 999; font-size:48px "></div>
               
            </div>
            <div class="header__right">
               <ul class="header__menu">
                  <li><a class="js-scroll-link" href="index.php" data-link="0">HOME</a></li>
                  <li><a class="js-scroll-link" href="index.php" data-link="1">Areas</a></li>
                  <li  class="active"><a class="js-scroll-link" href="index.php" data-link="2">Projects</a></li>
                  <li><a class="js-scroll-link" href="index.php" data-link="3">CONTACT</a></li>
               </ul>
               <!-- <div class="header__phone"><a href="tel:+23155908368">+2(123) 123 123 123</a></div> -->
            </div>
         </div>
      <section class="blog_page-content">
      <div class="blog_page-container">
         <img src="blogadmin/images/<?php echo $row['photo']; ?>" class="baia_logo" style="object-fit:contain;">
         <div class="blog_page-text">
         <div class="row">
            <div class="column_2">
               <div class="blog_page-h2 mac__prjects_content">
               <h1 href="single.html"><?php echo $row['title']; ?></h1>
               </div>
            </div>
         </div>
            
            <div class="small">
            <?php echo $row['content']; ?>
         </div>
          </div>
           </div>
        </div>

        
      </section>
   </body>
</html>
