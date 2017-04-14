<?php include ("includes/top.php");?>
<script>
    $(window).load(function() {
          $('.flexslider').flexslider({
            animation: "slide"
          });
        });
</script>
<!-- Main picture-->
    <main>
        <div class="flexslider">
          <ul class="slides">
            <li>
              <img src="images/slider3.jpg"/>
            </li>
            <li>
              <img src="images/slider2.jpg" />
            </li>
            <li>
              <img src="images/main.jpg" />
            </li>
            <li>
              <img src="images/slider4.jpg" />
            </li>
          </ul>
        </div>
    <!--<img src="images/main.jpg" alt="main" id="main">-->
<!-- three pictures-->    
    <section>
    <a href="about.php" onMouseover="chgImg('button1','button1Red')" onMouseout= "chgImg('button1','button1Blue')"><img src="images/old-machine.jpg"  name="button1"  alt="about" class="small"></a> 
    
    <a href="commodities.php" onMouseover="chgImg('button2','button2Red')" onMouseout="chgImg('button2','button2Blue')"><img src="images/veggie-basket.jpg"  name="button2" alt="commodities" class="small"></a> 
    
    <a href="foodsafety.php" onMouseover="chgImg('button3','button3Red')" onMouseout="chgImg('button3','button3Blue')"><img src="images/fs.jpg"  name="button3" alt="food safety" class="small"></a> 
    
     </section>
    </main>

<?php include ("includes/bottom.php");?>