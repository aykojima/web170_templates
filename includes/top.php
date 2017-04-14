<?php include ("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$myTitle?></title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="css/fp.css" />
<link rel="stylesheet" href="css/nav.css" />
    
<!-- flexslider -->
<link rel="stylesheet" href="flexslider.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="jquery.flexslider.js"></script>
<!-- end of flexslider -->    
    
<script>
if (document.images) { 
      button1Red = new Image 
      button1Blue = new Image 
      button2Red = new Image 
      button2Blue = new Image
      button3Red = new Image 
      button3Blue = new Image
      button4Red = new Image 
      button4Blue = new Image 
      button5Red = new Image 
      button5Blue = new Image
      button6Red = new Image 
      button6Blue = new Image
      button7Red = new Image 
      button7Blue = new Image
      
      button1Red.src = "images/old-machine_hover.jpg" 
      button1Blue.src = "images/old-machine.jpg" 
      button2Red.src = "images/veggie-basket_hover.jpg" 
      button2Blue.src = "images/veggie-basket.jpg" 
      button3Red.src = "images/fs_hover.jpg" 
      button3Blue.src = "images/fs.jpg"
      button4Red.src = "images/broccoli_hover.jpg" 
      button4Blue.src = "images/broccoli.jpg"
      button5Red.src = "images/iceberg_hover.jpg" 
      button5Blue.src = "images/iceberg.jpg"
      button6Red.src = "images/romaine_hover.jpg" 
      button6Blue.src = "images/romaine.jpg"
      button7Red.src = "images/kale_hover.jpg" 
      button7Blue.src = "images/kale.jpg"
    }

    function chgImg(imgField,newImg) { 
      if (document.images) { 
        document[imgField].src = eval(newImg + ".src") 
      } 
    }
</script>
  </head>

<body>
<header> 
  <a href="index.php"><img src="images/sunAmerica-logo.png" class="logo" alt="logo" title="home" /></a>
  <!-- START NAVIGATION (Main) -->
  <nav>
    <ul class="topnav" id="myTopnav">
      <?=makeLinks($nav1)?>
      <li class="icon">
    	<a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  	  </li>
    </ul>
  </nav>
  <!-- END NAVIGATION (Main) --> 
  <h2 class="pageid"><?=$myPageID?></h2>
  
</header>
