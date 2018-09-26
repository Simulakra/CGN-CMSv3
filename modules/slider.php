<!-- SLİDER AREA-->
<!--
-------------------------------		FLEX SLIDER OPTIONS		----------------------

animation: 						Accepts: "fade" or "slide"
direction:							Accepts: "horizontal" or "vertical
reverse: 							Accepts: Boolean
animationLoop 				Accepts: Boolean
smoothHeight				Accepts: Boolean
startAt								Default: 0 		Accepts: Number
slideshow						Default: true 	Accepts: Boolean
slideshowSpeed			Default: 7000 	Accepts Number
animationSpeed			Defaults: 600 		Accepts: Number
randomize						Defaults: false 	Accepts: Boolean
pauseOnAction				Defaults: true 		Accepts: Boolean
pauseOnHover				Defaults: false 	Accepts: Boolean
touch									Defaults: true 		Accepts: Boolean

-->



<script type="text/javascript">

	jQuery(window).load(function() {
	jQuery('#unique_1_slider').flexslider({
	animation: "fade",
			controlsContainer: "#unique_1_slider .flex-nav-container",
			smoothHeight: true,
			directionNav: true,
			controlNav:false,
			prevText: "<<", 
			nextText: ">>" 
	});
	});

</script>

<div class="hero-area">
	<div class="flexslider heroflex hero-slider" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="fade" data-pause="yes">
		<ul class="slides">
		
<?php   
    include("cms/std/cgncon.php");  

    $sql = "select * from 35cgnslider order by id DESC";  
    $result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"]));  
    $folder = "cms/modules/slider/uploads";  
      
        if(is_dir($folder)){  
            $handler = opendir($folder);  
              
            while($files = readdir($handler)) {  
                while($row = mysqli_fetch_array($result)){  

                        $sliderlink = $row['tlink'];
                        if(strrpos($sliderlink, 'http')===false)
                            $sliderlink = "http://".$sliderlink;
                        if(empty($row['tlink']))
                            $sliderlink = "#";
                        echo '<li class="parallax" style="background-image: url(cms/modules/slider/'; echo $row['link']; echo ');"><a href="'.$sliderlink.'" target="_blank">'  
                                . '<div class="flex-caption text-align-center">'  
                                    . '<div class="container">'  
                                        . '<div class="flex-caption-table">'  
                                            . '<div class="flex-caption-cell">'  
                                                . '<div class="flex-caption-text col-md-6 col-sm-6 col-xs-6 col-lg-6 col-md-offset-3">'  
                                                    . '<h2>'; echo $row['caption']; echo'</h2>'  
                                                . '</div>'  
                                            . '</div>'  
                                        . '</div>'  
                                    . '</div>'  
                                . '</div></a>' 
                            . '</li>';  
                         
            

                }  
            }     
        }  
      
?>  
			
		</ul>
	</div>
</div> 