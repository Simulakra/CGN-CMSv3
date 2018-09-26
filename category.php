<?php 
include("libraries/header.php");  

$sql = "select * from 35cgnmenu where menu_name = 'Ürünler' and menu_type=0"; 
$result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 
$row = mysqli_fetch_array($result); 
$title =$row['menu_title']; 
?> 

<div id="main-container">
<div class="content">

<?php include("modules/page_hero_area.php"); ?>
<div class="spacer-20"></div>

<div class="container">
<div class="row">

<div class="col-sm-3">			
<div class="accordion" id="accordionArea">
               
                    
                
                
            
<?php 
$sqlFooter = "select * from 35cgncategory where id > 0 AND parent_id=0"; 
$resultFooter = mysqli_query($GLOBALS["___mysqli_ston_user"], $sqlFooter) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 
$getId = $_GET['uid'];
$m_first=$getId;
while($rowFooter = mysqli_fetch_array($resultFooter)){
	$checkWhile = 1;
	$sqlFooter2= "select * from 35cgncategory where parent_id=".$rowFooter['id'];
	$sqlFooter3= "select id from 35cgncategory where parent_id=".$rowFooter['id'];
	$resultFooter2= mysqli_query($GLOBALS["___mysqli_ston_user"], $sqlFooter2) or die(mysqli_error($GLOBALS["___mysqli_ston_user"]));
	$resultFooter3 = mysqli_query($GLOBALS["___mysqli_ston_user"], $sqlFooter3) or die(mysqli_error($GLOBALS["___mysqli_ston_user"]));
		echo '<div class="accordion-group panel">
                    <div class="accordion-heading accordionize">
                        <a class="accordion-toggle ';

	while ( $rowFooter2 = mysqli_fetch_array($resultFooter2)) {


		if ($checkWhile == 1) {

			if($m_first == $rowFooter['id'] || $m_first == $rowFooter2['id']) echo ' active';
	        else echo ' inactive';

            echo'" data-toggle="collapse" data-parent="#accordionArea" href="#Area'.$rowFooter['id'].'">'.$rowFooter['name'].'<i class="fa fa-angle-down"></i> </a></div><div id="Area'.$rowFooter['id'].'" class="accordion-body ';
            if($m_first == $rowFooter['id']){ 
        		echo 'in';
        	}else{
        		$counter = 0;
        		 while($rowFooter3 = mysqli_fetch_array($resultFooter3)){
            		if($rowFooter3['id'] == $m_first){
            			echo 'in';
            		}
            	}
        	}
           

		}

        if($checkWhile == 1){
        	echo ' collapse"><div class="accordion-inner urunler-design"><ul>';
        	  $checkWhile = 0;
        }

		echo '<a href="../category/'.$rowFooter2['id'].'"><li>'.$rowFooter2['name'].'</li></a>';

					
 			
	}
	
 	echo "</ul></div></div></div>";
} 
?> 
</div>
</div>

<div class="col-sm-9">
<ul class="sort-destination isotope project-items" style="position: relative; overflow: hidden;">

<?php  

if($_GET['uid'] != 0) 
{ 
	$sql = 'select * from 35cgncategory where id='.$_GET['uid']; 
	$result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 
	$roww =  mysqli_fetch_array($result); 
	if($roww['is_leaf'] == 1) 
	{ 
		$iid = $_GET['uid']; 
		$sql = 'select * from 35cgnproduct where parent_id = '.$iid; 
		$result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 
		echo '<div class="fixed-row">'; 
		$i = 0; 
		while($rowx = mysqli_fetch_array($result)){ 
			$i++; 
			// KATEGORİYE AİT RESMİ ALAN KOD // 
			$dizin = "cms/modules/urunler/".$rowx['url'].""; 

			echo '<li class="col-md-4 grid-item"><div class="feature-block text-align-center">'; 
			echo '<div class="category-image">
					<a class="image-link" href="../product/'.$rowx['id'].'" class="imgeffect link">';

			if($rowx['display']==1) echo "<img src='../images/ribbon.png' style='width:25%;  position:absolute'>";

			echo '<img class="image-self" src="../'.$dizin.'" alt=" " width="100%"  /></a></div>'; 
			echo ' <div class="image-border-bottom"></div><!-- the underline for the image  -->'; 

			echo '<h5 class="text-center"><a href="../product/'.$rowx['id'].'" title="'.$rowx['name'].'">'.mb_strimwidth($rowx['name'], 0, 20,'...').'</a></h5>'; 
			echo '</div></li>'; 
			if($i % 3 == 0){ echo '</div><div class="fixed-row">'; }      
		} 
		echo '</div>'; 
	} 
	else { 

		$sql = 'select * from 35cgncategory where parent_id = '.$_GET['uid']; 
		$result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 
		echo '<div class="fixed-row">'; 
		$i = 0; 
		while($rowx = mysqli_fetch_array($result)){ 
			$i++; 

			echo '<li class="col-md-4 grid-item"><div class="feature-block text-align-center">'; 
			echo '<div class="category-image">
					<a class="image-link" href="../category/'.$rowx['id'].'" class="imgeffect link"><img class="image-self" src="../cms/modules/urunler/'.$rowx['url'].'" alt="" /></a>
				  </div>'; 
			echo ' <div class="image-border-bottom"></div><!-- the underline for the image  -->'; 
			echo '<h5 class="text-center"><a href="../category/'.$rowx['id'].'" title="'.$rowx['name'].'">'.mb_strimwidth($rowx['name'], 0, 20,'...').'</a></h5>'; 
			echo '</div></li>'; 
			if($i % 3 == 0){ 
				echo '</div><div class="fixed-row">'; 
			} 
		} 
		echo '</div>'; 
	} 
} 
else{ 
	//sadece fırsat çekme kodu gelecek
	$sql = 'select * from 35cgnproduct where display=1'; 
	$result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 
	echo '<div class="fixed-row">'; 
	$i = 0; 
	while($rowx = mysqli_fetch_array($result)){ 
		$i++; 
		// KATEGORİYE AİT RESİMİ ALAN KOD // 
		$dizin = "cms/modules/urunler/".$rowx['url'].""; 

		// KATEGORİYE AİT RESİMİ ALAN KOD SONU // 

		echo '<li class="col-md-4 grid-item"><div class="feature-block text-align-center">'; 
		echo '<div class="category-image">
				<a class="image-link" href="../product/'.$rowx['id'].'" class="imgeffect link">';

			if($rowx['display']==1) echo "<img src='../images/ribbon.png' style='width:25%; position:absolute'>";

			echo '<img class="image-self" src="../cms/modules/urunler/'.$rowx['url'].'" alt="" /></a>
			  </div>'; 
		echo ' <div class="image-border-bottom"></div><!-- the underline for the image  -->'; 

		echo '<h5 class="text-center"><a href="../category/'.$rowx['id'].'" title="'.$rowx['name'].'">'.mb_strimwidth($rowx['name'], 0, 20,'...').'</a></h5>'; 
		echo '</div></li>'; 
		if($i % 3 == 0){ 
			echo '</div><div class="fixed-row">'; 
		} 
	} 
	echo '</div>'; 
} 
?> 
</ul>
</div>





</div>
<div class="spacer-40"></div>
</div>
</div>
</div>
<?php include("libraries/footer.php"); ?>