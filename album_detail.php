<?php  
    include("libraries/header.php"); 
    $sql1 = "select * from 35cgnmenu where menu_name = 'GALERİ'"; 
    $result1 = mysqli_query($GLOBALS["___mysqli_ston"], $sql1) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
    $row1 = mysqli_fetch_array($result1); 
    $title1 = $row1['menu_title']; 

    $id = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_GET ['id']); 
    $sql = 'select * from 35cgnalbum where id = ' . $id; 
    $result = mysqli_query($GLOBALS["___mysqli_ston"],  $sql ) or die( mysqli_error($GLOBALS["___mysqli_ston"]) ); 
    $row = mysqli_fetch_array( $result ); 
    $title = $row['folder']; 
     
?> 

    <div id="main-container">
    	<div class="content">
            
            <?php include("modules/hero_area.php"); ?>         
            
            <div class="spacer-40"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <ul class="sort-destination isotope project-items format-gallery"  style="position: relative; overflow: hidden;">
    <?php 
                                $sql = "select * from 35cgngallery where album= '".$id."' "; 
                                $result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
                                while($row = mysqli_fetch_array($result)) { 
                                    echo '<li class="col-sm-12 col-md-4 col-xs-12 grid-item project-grid-item  format-image news-page-image">' 
                                            . "<a class='popup-image media-box image-link' href='cms/modules/gallery/".$row['link']."' class='popup-image media-box'  data-title=".$row['id']."> 
                                                <img class='image-self' src='cms/modules/gallery/".$row['tlink']."'  width='250' height='250' alt=''/>" 
                                            . "</a></li>"; 
                                } 
                            ?> 
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-4">
                    	<div class="widget sidebar-widget widget_custom_menu">
                            <ul>
               <?php 
                                    $sql = "select * from 35cgnalbum where id > 0"; 
                                    $result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
                                     
                                    while($row = mysqli_fetch_array($result)) { 
                                        echo "<li> <a href=\"album_detail?id=".$row['id']."\">".$row['folder']."</a></li>"; 
                                    } 
                                ?> 
                            </ul>
                        </div>
                        <a class='btn btn-primary btn-sm pull-right' href='gallery'>Galeriye Geri Dön</a>
                    </div>
                </div>
            </div>
            
            <?php include("libraries/footer.php"); ?>
            
        </div>
    </div>