
<?php  
    include("libraries/header.php"); 
    $sql = "select * from 35cgnmenu where menu_name ='Galeri'"; 
    $result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
    $row = mysqli_fetch_array($result); 
    $title = $row['page_title']; 
?> 

    <div id="main-container">
    	<div class="content">
            
            <?php include("modules/hero_area.php"); ?>
            
            <div class="spacer-40"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <ul class="sort-destination isotope project-items" data-sort-id="projects" style="position: relative; overflow: hidden;">
                            <div class="spacer-20"></div>
          <?php 
                                $sql = ""; 
                                $sql = "select * from 35cgnalbum where id > 0;"; 
                                $result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
                                 while($row = mysqli_fetch_array($result)) { 
                                    echo '<li class="col-sm-12 col-md-4 col-xs-12 grid-item project-grid-item paving format-standard isotope-item">' 
                                            . '<div class="panel panel-default project-image-div">'
                                                . "<a href='album_detail?id=".$row['id']."'> 
                                                    <img src='cms/modules/gallery/".$row['avatar']."'  width='500' height='500' class='gallery-image'/>" 
                                                . "</a>"
                                            . "</div>" 
                                        . "</li>"; 
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
                    </div>
                </div>
            </div>                      
        </div>
    </div>
            <?php include("libraries/footer.php"); ?>