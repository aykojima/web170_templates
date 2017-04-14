<?php
/*
config.php - will allow us to swap html pieces dynamically
include this file at the top 'top.php'!
*/

//Here are the keys for the server: web-students.com
$siteKey = "6Lf8FMkSAAAAAIR0DTQO4f0zjP-hlyBVcVTjRNB-";
$secretKey = "6Lf8FMkSAAAAAKsfveeLDuVJBWTNOm8PvRqL9lNm";

//place URL & labels in the variable/array here for navigation:
$nav1['index.php'] = "HOME";
$nav1['about.php'] = "ABOUT";
$nav1['commodities.php'] = "COMMODITIES";
$nav1['foodsafety.php'] = "FOOD SAFETY";
$nav1['contact.php'] = "CONTACT";

//this line below identifies the current page
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

/* below we can create 'case' statements to accommodate
 unique data items (title, a page id and an image) that will
reside in the 'top.php' file
*/
switch(THIS_PAGE)
{
  case "index.php":
  $myTitle = "Sun America";
  $myPic = "";
  $myAlt = "HOME";
  $myPageID = "Welcome!";
  break;
  
  case "about.php":
  $myTitle = "About";
  $myPic = "";
  $myAlt = "About";
  $myPageID = "About";
  break; 
  
  case "commodities.php":
  $myTitle = "Commodities";
  $myPic = "";
  $myAlt = "Commodities";
  $myPageID = "Commodities";
  break; 
  
  case "foodsafety.php":
  $myTitle = "Food safety";
  $myPic = "";
  $myAlt = "Food safety";
  $myPageID = "Food safety";
  break;
  
  case "contact.php":
  $myTitle = "Contact";
  $myPic = "";
  $myAlt = "Contact";
  $myPageID = "Contact";
  break;
  
 

  //fallback values for undefined pages
  default:
  $myTitle = THIS_PAGE; #the file name is unique
  $myPic = "";
  $myAlt = "Sun Amerivs"; 
  $myPageID = "Sun America";
  /*$myToolTip = */
}
//--------------END CONFIG AREA --------------------------------
/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//current page - add class reference
	    	$myReturn .= '<li class="current"><a href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>