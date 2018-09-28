<div class="dgray-bg parallax-light" style="background-repeat:repeat">
<div class="container">
<h4 class="stacked-title">PORTFOYÜMÜZDEN SEÇTİKLERİMİZ</h4>
<div class="spacer-30"></div>
<div class="carousel-wrapper">
<div class="row">
<ul class="owl-carousel carousel-fw" id="projects-slider" data-columns="4" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">



<?php  
$sql = ""; 
include("cms/std/cgncon.php"); 
$sql = "select  link from 35cgnfromportfolio where id > 0;"; 
$result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 
while($row = mysqli_fetch_array($result)) 
{ 
echo '<li class="item">' 
. '<div class="project-grid-item format-image">' 
. '<a href="cms/modules/fromportfolio/'.$row['link'].'" class="magnific-image media-box"><img src="cms/modules/fromportfolio/'.$row['link'].'" width="auto" height="180" alt="ARTS MİMARLIK"></a>' 
. '</div>' 
. '</li>'; 
} 
?> 

</ul>
</div>
</div>
<div class="spacer-30"></div>
</div>
</div>