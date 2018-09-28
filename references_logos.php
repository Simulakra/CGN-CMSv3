					<?php 
					include("libraries/header.php"); 
					$sql = "select * from 35cgnmenu where menu_name = 'Referanslar' and menu_type=0"; 
					$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
					$row = mysqli_fetch_array($result); 
					$title = $row['menu_title']; 
					?> 

<div id="main-container">
<div class="content">

					<?php include("modules/hero_area.php"); ?>

<div class="spacer-40"></div>
<div class="container">
<div class="row">
<div class="col-sm-12">
<ul class="sort-destination isotope project-items"  style="position: relative; overflow: hidden;">
					<?php 
					$sql = ""; 
					$sql = "select * from 35cgnreferenceslogos where id > 0 ORDER BY id ASC;"; 
					$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
					while ($row = mysqli_fetch_array($result))
						{ 
							echo '<div class="profile">'; 
							echo '<li class="col-sm-4 col-md-3 col-xs-4 grid-item project-grid-item paving format-standard isotope-item ref-image"><img class="profile image-self" src="cms/modules/referenceslogos/' . $row['filename'] . '';  
							echo '" alt="" width="400" height="200"></a></li>'; 
							echo '</div>'; 
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