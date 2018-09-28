
<?php  
    include("libraries/header.php"); 
    $sql = "select * from 35cgnmenu where menu_name = 'Haberler' and menu_type=0"; 
    $result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 
    $row = mysqli_fetch_array($result); 
    $title = $row['menu_title']; 
?> 

    <div id="main-container">
    	<div class="content">
            
    <div class="hero-area">
        <div class="page-header dark">
            <div class="container">
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="index.html">Anasayfa</a></li>
                    <li class="active">Haberler</li>
                </ol>
                <h1>CGN Elektronik Haberleri  --> <?php if (isset($_GET['filter'])) echo $_GET['filter']; ?> </h1>
            </div>
        </div>
    </div>
                
            <div class="container">
                <div class="spacer-40"></div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
             <?php 
                if (!isset($_GET['filter'])) {
                    $sql = "select * from 35cgnpress ORDER BY date DESC"; 
                    $result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 
                 
                    while($haberler = mysqli_fetch_array($result)){ 
                        $summary = $haberler['desci']; 
                        echo "<div class='news-container blog-list-item format-standard'> 
                                <div class='row'> 
                                        <div class='col-md-3 col-sm-3'>
                                            <div class='news-page-image'>
                                                <img class='new-pre-img' src='cms/modules/news/".$haberler['link']."'>
                                            </div>
                                        </div>
                                        <div class='col-md-9 col-sm-9 news-padding'>
                                            <h3 class='blog-title'> 
                                                <a href=\"news_detail?id=".$haberler['id']."\">".$haberler['title']."</a> 
                                            </h3>     
                                            <p>" .strip_tags(mb_strimwidth($summary, 0, 291,"...")). "</p> 
                                            <a class='btn btn-primary btn-sm' href=\"news_detail?id=".$haberler['id']."\">Daha Fazla</a>
                                        </div>  
                                        
                                 </div> 
                              </div>"; 
                    }
                } else {
                    $sql = "SELECT * FROM 35cgnpress WHERE keywords LIKE '%".$_GET['filter']."%' ORDER BY date DESC"; 
                    $result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 
                 
                    while($haberler = mysqli_fetch_array($result)){ 
                        $summary = $haberler['desci']; 
                        echo "<div class='news-container blog-list-item format-standard'> 
                                <div class='row'> 
                                        <div class='col-md-3 col-sm-3'>
                                            <div class='news-page-image'>
                                                <img class='new-pre-img' src='cms/modules/news/".$haberler['link']."'>
                                            </div>
                                        </div>
                                        <div class='col-md-9 col-sm-9 news-padding'>
                                            <h3 class='blog-title'> 
                                                <a href=\"news_detail?id=".$haberler['id']."\">".$haberler['title']."</a> 
                                            </h3>     
                                            <p>" .strip_tags(mb_strimwidth($summary, 0, 291,"...")). "</p> 
                                            <a class='btn btn-primary btn-sm' href=\"news_detail?id=".$haberler['id']."\">Daha Fazla</a>
                                        </div>  
                                        
                                 </div> 
                              </div>";   
                }
                }          
            ?> 
                    </div>
                    
                </div>
            </div>
            <div class="spacer-20"></div>
            
            
        </div>
    </div>
            <?php include("libraries/footer.php"); ?>