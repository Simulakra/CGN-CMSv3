<div class="lgray-bg" style="background-repeat:repeat">
    <div class="container">
        <div class='spacer-10'></div>
        <div class="carousel-wrapper">
            <div class="row">
                <ul class="owl-carousel carousel-fw" id="projects-slider" data-columns="4" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                <?php  
                        $sql = ""; 
                        $sql = "select * from 35cgnourclients where id > 0;"; 
                        $result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 
                        while($row = mysqli_fetch_array($result)) 
                        { 
                            echo '<li class="item clients-image">' 
                                    . '<div class="project-grid-item format-image image-link">' 
                                        . '<img class="image-self" src="cms/modules/ourclients/'.$row['filename'].'" width="190" height="auto">' 
                                    . '</div>' 
                                . '</li>'; 
                        } 
                    ?> 
                  </ul>
            </div>
        </div>
    </div>
</div>