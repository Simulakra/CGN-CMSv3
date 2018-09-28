
<?php 
    include("libraries/header.php"); 
    $sql = "select * from 35cgnmenu where menu_name = 'Projelerimiz' and menu_type=0"; 
    $result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
    $row = mysqli_fetch_array($result); 
    $title = $row['menu_title']; 
     
    if(!isset($_GET['albumname'])){             header("Location: index.php");     } 
?> 


    <div id="main-container">
    	<div class="content">
            
            <?php include("modules/hero_area.php"); ?>
                        
            <div class="spacer-20"></div>
            <div class="container">
			
<div style="border: 2px solid whitesmoke; margin: 2%; color: #5e5e5e;">
		<?php 
		$sql = ""; 
		$sql = "select * from 35cgnprojects where id = ".$_GET['albumname']." order by id asc;"; 
		$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
		while($row = mysqli_fetch_array($result)){ echo "<div class='panel-heading'>".
            "<h3 style='margin:unset;'>".$_GET['name']."</h3>"
            ."<b>" .$row['info']. "</b></div>"; } 
		?> 
</div>
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="sort-destination isotope project-items format-gallery" data-sort-id="projects" style="position: relative; overflow: hidden;">
                            <div class="spacer-20"></div>
                            <?php                           
                                $sql = ""; 
                                $sql = "select * from 35cgnprojectdetail where ref_id = ".$_GET['albumname']." order by id asc;"; 
                                $result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
                                $count = 0;
                                while($row = mysqli_fetch_array($result)){
                                    if($count == 0){
                                        echo '<div class= "row">';
                                    }
                                    echo '<li class="col-md-4 col-sm-6 col-xs-6 grid-item project-grid-item paving format-image projectt-image">' 
                                        . '<a href="cms/modules/projects/'. $row['link'].' "class="popup-image media-box image-link" data-title='.$row['title'].'>' 
                                            . '<img class="image-self" src="cms/modules/projects/'.$row['link'].''; 
                                        echo '" class="project-image">' 
                                        . '</a>' 
                                    . '</li>';
                                           $count = $count+1;
                                    if($count == 3){
                                        echo '</div>';
                                        $count = 0;
                                    }
                             
                                } 
                            ?> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <?php include("libraries/footer.php"); ?>