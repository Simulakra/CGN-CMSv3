
<!-- CAROUSEL AREA -->
<div class="lgray-bg" style="background-image:url(images/leaves1.png); background-repeat:repeat">
    <div class="container">
        <div class="carousel-wrapper">
            <div class="row">
                <ul class="owl-carousel carousel-fw" id="services-slider" data-columns="4" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                    
              <?php  
                        if($_GET['uid'] != 0) 
                        { 
                            $sql = 'select * from 35cgncategory where id='.$_GET['uid']; 
                            $result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 
                            $roww =  mysqli_fetch_array($result); 
                            if($roww['is_leaf'] == 1) 
                            { 
                                $sql = 'select * from 35cgncategory where id > 0 ;'; 
                                $result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 

                                $i = 0; 
                                while($rowx = mysqli_fetch_array($result)){ 
                                    $i++; 
                                    // KATEGORİYE AİT RESİMİ ALAN KOD // 
                                    $dizin = "cms/modules/urunler/".$rowx['url'].""; 
                                    $tutucu = opendir($dizin);  
                                    while($dosya = readdir($tutucu)){  
                                    $resim = $dosya;  }  closedir($tutucu);  
                                    // KATEGORİYE AİT RESİMİ ALAN KOD SONU // 

                                    echo '<li class="item">' 
                                            . '<div class="service-grid-item grid-item format-standard feature-block" style="height: 320px;">'; 
                                        echo '<div><a href="kategori.php?uid='.$rowx['id'].'">' 
                                                . '<img src="cms/modules/urunler/'.$rowx['url'].'/" alt="ÜRÜN ÖZELLİKLERİ" width="400px;" />' 
                                            . '</a>'; 

                                        echo '<br>' 
                                            . '<h5>' 
                                                . '<a href="kategori.php?uid='.$rowx['id'].'" title="'.$rowx['name'].'">'.$rowx['name'].'</a>' 
                                            . '</h5></div>'; 
                                    echo '</li>'; 
                                    if($i % 3 == 0){ 
                                            echo '</div><div class="space margin-b30"></div><div class="fixed-row">'; 
                                    } 
                                } 
                                echo '<div class="space margin-b30"></div>'; 
                            } 
                            else { 
                                $sql = 'select * from 35cgncategory where id > 0 ;'; 
                                $result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 

                                $i = 0; 
                                while($rowx = mysqli_fetch_array($result)){ 
                                    $i++; 
                                    // KATEGORİYE AİT RESİMİ ALAN KOD // 
                                    $dizin = "cms/modules/urunler/".$rowx['url'].""; 
                                    $tutucu = opendir($dizin);  
                                    while($dosya = readdir($tutucu)){ 
                                    $resim = $dosya;  }  closedir($tutucu);  
                                    // KATEGORİYE AİT RESİMİ ALAN KOD SONU // 

                                    echo '<li class="item">' 
                                            . '<div class="service-grid-item grid-item format-standard feature-block" style="height: 320px;">'; 
                                        echo '<div><a href="kategori.php?uid='.$rowx['id'].'">' 
                                                . '<img src="cms/modules/urunler/'.$rowx['url'].'/" alt="ÜRÜN ÖZELLİKLERİ" width="400px;" />' 
                                            . '</a>'; 

                                        echo '<br>' 
                                            . '<h5>' 
                                                . '<a href="kategori.php?uid='.$rowx['id'].'" title="'.$rowx['name'].'">'.$rowx['name'].'</a>' 
                                            . '</h5></div>'; 
                                    echo '</li>'; 
                                    if($i % 3 == 0){ 
                                            echo '</div><div class="space margin-b30"></div><div class="fixed-row">'; 
                                    } 
                                } 
                                echo '<div class="space margin-b30"></div>'; 
                            } 
                        } 
                        else{ 
                            $sql = 'select * from 35cgncategory where id > 0 ;'; 
                            $result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 

                            $i = 0; 
                            while($rowx = mysqli_fetch_array($result)){ 
                                $i++; 
                                // KATEGORİYE AİT RESİMİ ALAN KOD // 
                                $dizin = "cms/modules/urunler/".$rowx['url'].""; 
                                $tutucu = opendir($dizin);  
                                while($dosya = readdir($tutucu)){  
                                $resim = $dosya;  }  closedir($tutucu);  
                                // KATEGORİYE AİT RESİMİ ALAN KOD SONU // 

                                echo '<li class="item">' 
                                        . '<div class="service-grid-item grid-item format-standard feature-block" style="height: 320px;">'; 
                                    echo '<div class="col-centered" style=""><a href="kategori.php?uid='.$rowx['id'].'">' 
                                            . '<img src="cms/modules/urunler/'.$rowx['url'].'/'.$resim.'" alt="ÜRÜN ÖZELLİKLERİ" width="400px;" />' 
                                        . '</a>'; 

                                    echo '<br>' 
                                        . '<h5>' 
                                            . '<a href="kategori.php?uid='.$rowx['id'].'" title="'.$rowx['name'].'">'.$rowx['name'].'</a>' 
                                        . '</h5></div>'; 
                                echo '</li>'; 
                            } 
                            echo '<div class="space margin-b30"></div>'; 
                        } 
                    ?>   
                </ul>
            </div>
        </div>
    </div>
    <div class="spacer-50"></div>
</div>