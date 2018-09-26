 <?php 
    $_GLOBALS['currentpage']='news';
    include("libraries/header.php"); 
    $sql = "select * from 35cgnpress WHERE id=".mysqli_real_escape_string($GLOBALS["___mysqli_ston_user"], $_GET['id']); 
    $result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 
    while($haberler = mysqli_fetch_array($result)){ 
        $title = $haberler['title']; 
        $des = $haberler['desci']; 
        $date =  $haberler['date']; 
        $link = $haberler['link'];
        $keywords=$haberler['keywords'];
    } 
     
?> 

    <div id="main-container">
    	<div class="content">
            
            <?php include("modules/hero_area.php"); ?>
                
            <div class="container">
                <div class="spacer-40"></div>
                <div class="row">
                    <div class="post-content">
                        <?php echo $des; ?>
                    </div>
                </div>
                <?php			 
                    echo $haberler['desci'];                 
                    $keywords=explode(',',$keywords);
                ?>
				
                <ul>
                    <?php 
                    foreach ($keywords as $value) {
                        echo '<li><a href="../newsfilter/'.$value.'">'.$value.'</a></li>';
                    }
                    ?>
                </ul>
                <a class='btn btn-primary btn-sm pull-right news-btn' href="../news/">Haberlere geri dön</a> 
            </div>          
        </div>
    </div>
            <?php include("libraries/footer.php"); ?>