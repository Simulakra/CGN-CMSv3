


<?php  
    
    include("libraries/header.php"); 


?> 

    <div id="main-container">
    	<div class="content">
            
    <div class="hero-area">
        <div class="page-header dark">
            <div class="container">
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="index.html">Anasayfa</a></li>
                    <li class="active">Arama</li>
                </ol>
                <h1>Arama</h1>
            </div>
        </div>
    </div>
                
            <div class="container">
                <div class="spacer-40"></div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                    	<?php 
                    		if (strip_tags(strlen($_GET['keyword']))>=3 && !strip_tags(ctype_space($_GET['keyword'])) && strip_tags($_GET['keyword'])!=='' ) {
                    			
                    		
                    		$keyword=strip_tags($_GET['keyword']);	
                    		echo "<h1>".$keyword."</h1>";
                		?>
                	<div class="col-md-8">
                		<h1>HABERLER</h1>
                		<?php 
                			$sql1="SELECT * FROM 35cgnpress WHERE desci LIKE '%".$keyword."%' OR title LIKE '%".$keyword."%' OR keywords LIKE '%".$keyword."%' ";
                			$result=mysqli_query($GLOBALS["___mysqli_ston_user"],$sql1);
                			//$mysqli=mysqli_fetch_array($result);
                			//var_dump(mysqli)
                			while ($row=mysqli_fetch_array($result)) {
                				echo "<div class='news-container blog-list-item format-standard'> 
                                <div class='row'> 
                                        <div class='col-md-3 col-sm-3'>
                                            <div class='news-page-image'>
                                                <img class='new-pre-img' src='cms/modules/news/".$row['link']."'>
                                            </div>
                                        </div>
                                        <div class='col-md-9 col-sm-9 news-padding'>
                                            <h3 class='blog-title'> 
                                                <a href=\"news_detail?id=".$row['id']."\">".$row['title']."</a> 
                                            </h3>     
                                            <p>" .strip_tags(mb_strimwidth($summary, 0, 291,"...")). "</p> 
                                            <a class='btn btn-primary btn-sm' href=\"news_detail?id=".$row['id']."\">Daha Fazla</a>
                                        </div>  
                                        
                                 </div> 
                              </div>"; 

                			}
                		?>
                	</div>
                	<div class="col-md-8">
                		<h1>URUNLER</h1>
                		<?php 



                			$sql2="SELECT * FROM 35cgnproduct WHERE desci LIKE '%".$keyword."%' OR page LIKE '%".$keyword."%' OR name LIKE '%".$keyword."%' OR code LIKE '%".$keyword."%' ";
                			$result2=mysqli_query($GLOBALS["___mysqli_ston_user"],$sql2);
                			//$mysqli=mysqli_fetch_array($result2);
                			//var_dump(mysqli)
                			while ($row=mysqli_fetch_array($result2)) {
                				echo "<div class='news-container blog-list-item format-standard'> 
                                <div class='row'> 
                                        <div class='col-md-3 col-sm-3'>
                                            <div class='news-page-image'>
                                                <img class='new-pre-img' src='cms/modules/urunler/".$row['url']."'>
                                            </div>
                                        </div>
                                        <div class='col-md-9 col-sm-9 news-padding'>
                                            <h3 class='blog-title'> 
                                                <a href=\"product?id=".$row['id']."\">".$row['name']."</a> 
                                            </h3>     
                                            <p>" .strip_tags(mb_strimwidth($summary, 0, 291,"...")). "</p> 
                                            <a class='btn btn-primary btn-sm' href=\"product?id=".$row['id']."\">Daha Fazla</a>
                                        </div>  
                                        
                                 </div> 
                              </div>"; 

                			}
                		?>
                	</div>
                	<div class="col-md-8">
                		<h1>SAYFALAR</h1>
                		<?php 
                			$sql3="SELECT * FROM 35cgnpage WHERE page_name LIKE '%".$keyword."%' OR page_context LIKE '%".$keyword."%' OR keywords LIKE '%".$keyword."%' OR description LIKE '%".$keyword."%' OR page_title LIKE '%".$keyword."%' ";
                			$result3=mysqli_query($GLOBALS["___mysqli_ston_user"],$sql3);
                			//$mysqli=mysqli_fetch_array($result3);
                			//var_dump(mysqli)
                			while ($row=mysqli_fetch_array($result3)) {
                				echo "<div class='news-container blog-list-item format-standard'> 
                                <div class='row'> 
                                        <div class='col-md-12 col-sm-12 news-padding'>
                                            <h3 class='blog-title'> 
                                                <a href=\"page?id=".$row['page_id']."\">".$row['page_name']."</a> 
                                            </h3>     
                                            <p>" .strip_tags(mb_strimwidth($row['page_context'], 0, 291,"...")). "</p> 
                                            <a class='btn btn-primary btn-sm' href=\"page?id=".$row['page_id']."\">Daha Fazla</a>
                                        </div>  
                                        
                                 </div> 
                              </div>"; 

                			}


                			$sql4="SELECT * FROM 35cgnmenu WHERE menu_name LIKE '%".$keyword."%' OR content LIKE '%".$keyword."%' OR keywords LIKE '%".$keyword."%' OR description LIKE '%".$keyword."%' OR menu_title LIKE '%".$keyword."%' ";
                			$result4=mysqli_query($GLOBALS["___mysqli_ston_user"],$sql4);
                			//$mysqli=mysqli_fetch_array($result4);
                			//var_dump(mysqli)
                			while ($row=mysqli_fetch_array($result4)) {
                				echo "<div class='news-container blog-list-item format-standard'> 
                                <div class='row'> 
                                        <div class='col-md-12 col-sm-12 news-padding'>
                                            <h3 class='blog-title'>";
                                            if(tr_strtolower($row['menu_name'])=='anasayfa' || tr_strtolower($row['menu_name'])=='ana sayfa' || tr_strtolower($row['menu_name'])=='homepage' || tr_strtolower($row['menu_name'])=='home page' || tr_strtolower($row['menu_name'])=='home' ) {
                                              echo  "<a href=\"..\index\\\">".$row['menu_name']."</a>" ;
                                            } else if (tr_strtolower($row['menu_name'])=='iletişim') {
                                            	echo  "<a href=\"..\contact\\\">".$row['menu_name']."</a>" ;
                                            } else if (tr_strtolower($row['menu_name'])=='galeri' || tr_strtolower($row['menu_name'])=='gallery'){
                                            	echo  "<a href=\"..\gallery\\\">".$row['menu_name']."</a>" ;
                                            } else if (tr_strtolower($row['menu_name'])=='referanslar' || tr_strtolower($row['menu_name'])=='referanslarımız'){
                                            	echo  "<a href=\"..\\references\\\">".$row['menu_name']."</a>" ;
                                            } else if (tr_strtolower($row['menu_name'])=='projeler' || tr_strtolower($row['menu_name'])=='projelrimiz'){
                                            	echo  "<a href=\"..\projects\\\">".$row['menu_name']."</a>" ;
                                            } else if (tr_strtolower($row['menu_name'])=='haberler'){
                                            	echo  "<a href=\"..\\news\\\">".$row['menu_name']."</a>" ;
                                            } else if (tr_strtolower($row['menu_name'])=='ürünler' || tr_strtolower($row['menu_name'])=='ürünlerimiz'  ) {
                                            	echo "<a href=\"..\category\\0\">".$row["menu_title"]."</a>"; 
                                            } else {
                                            	echo "<a href=\"page?menu=".$row['menu_id']."\">".$row['menu_name']."</a>"; 
                                            }
                                            
                               			echo "</h3>     
                                            <p>" .strip_tags(mb_strimwidth($row['content'], 0, 291,"...")). "</p>";
                                            if(tr_strtolower($row['menu_name'])=='anasayfa' || tr_strtolower($row['menu_name'])=='ana sayfa' || tr_strtolower($row['menu_name'])=='homepage' || tr_strtolower($row['menu_name'])=='home page' || tr_strtolower($row['menu_name'])=='home' ) {
                                              echo  "<a class='btn btn-primary btn-sm' href=\"..\index\\\">Daha Fazla</a>" ;
                                            } else if (tr_strtolower($row['menu_name'])=='iletişim') {
                                            	echo  "<a class='btn btn-primary btn-sm' href=\"..\contact\\\">Daha Fazla</a>" ;
                                            } else if (tr_strtolower($row['menu_name'])=='galeri' || tr_strtolower($row['menu_name'])=='gallery'){
                                            	echo  "<a class='btn btn-primary btn-sm' href=\"..\gallery\\\">Daha Fazla</a>" ;
                                            } else if (tr_strtolower($row['menu_name'])=='referanslar' || tr_strtolower($row['menu_name'])=='referanslarımız'){
                                            	echo  "<a class='btn btn-primary btn-sm' href=\"..\\references\\\">Daha Fazla</a>" ;
                                            } else if (tr_strtolower($row['menu_name'])=='projeler' || tr_strtolower($row['menu_name'])=='projelrimiz'){
                                            	echo  "<a class='btn btn-primary btn-sm' href=\"..\projects\\\">Daha Fazla</a>" ;
                                            } else if (tr_strtolower($row['menu_name'])=='haberler'){
                                            	echo  "<a class='btn btn-primary btn-sm' href=\"..\\news\\\">Daha Fazla</a>" ;
                                            } else if (tr_strtolower($row['menu_name'])=='ürünler' || tr_strtolower($row['menu_name'])=='ürünlerimiz'  ) {
                                            	echo "<a class='btn btn-primary btn-sm' href=\"..\category\\0\">Daha Fazla</a>"; 
                                            } else {
                                            	echo "<a class='btn btn-primary btn-sm' href=\"page?menu=".$row['menu_id']."\">Daha Fazla</a>";
                                            }
                                         
                                       echo "</div>  
                                        
                                 </div> 
                              </div>"; 
								}
                		} else	{
                			echo "<h3>Arama uzunluğu en az 3 karakter olmalıdır ve tamamen boşluklardan oluşamaz</h3>";
                		}
                		?>
                	</div>
                    </div>
                </div>
            </div>
            <div class="spacer-20"></div>
            
            
        </div>
    </div>
            <?php include("libraries/footer.php"); ?>	
	