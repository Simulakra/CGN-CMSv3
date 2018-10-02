<?php 
function getSqlResult($sql)
{
   $result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"]));
   return $result;
}
function getFirst($sql){
   $result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"]));
   return mysqli_fetch_array($result)[0];
}
?>

<div class="col-sm-3"> 
<div class="accordion" id="accordionArea">
   <?php 
   $getID = -1;
   $getUID= -1;
   if(isset($_GET['uid'])) $getId = $_GET['uid'];
   if(isset($_GET['id'])) $getId = $_GET['id'];
   $setCAT= -1;
   if(isset($_GET['id'])){
      $sql2 = "SELECT parent_id FROM 35cgnproduct WHERE id=".$getID;
      $res2 = getSqlResult($sql2);
      $getUID = mysqli_fetch_array($res2)[0];
   }
   if(isset($_GET['uid'])){
      $spinForMainCategory = True;
      while($spinForMainCategory){
         $sql2 = "SELECT parent_id FROM 35cgncategory WHERE id=".$getUID;
         $res2 = getSqlResult($sql2);
         $temp = mysqli_fetch_array($res2)[0];
         if($temp == 0){
            $spinForMainCategory = False;
            $setCAT = $getUID;
         }
         else{
            $getUID = $temp;
         }
      }
   }

   $sql1 = "SELECT * FROM 35cgncategory WHERE id>0 AND parent_id=0";
   $res1 = getSqlResult($sql1);
   while ($row1 = mysqli_fetch_array($res1)) {
      $tempUID = $row1['id'];
      if(getFirst("SELECT Count(*) FROM 35cgncategory WHERE parent_id=".$tempUID)==0){
         echo '<div class="accordion-inner urunler-design">';
         echo '<ul>';
         echo '<a href="category.php?uid='.$row1['id'].'"><li>'.$row1['name'].'</li></a>';
         echo '</ul>';
         echo '</div>';
      }
      else{
         $aktif = ($tempUID === $setCAT);
         echo '<div class="accordion-group panel">';
         echo '<div class="accordion-heading accordionize">';
         echo '<a class="accordion-toggle ';
         if($aktif) echo "active";
         else echo "inactive collapsed";
         echo '" data-toggle="collapse" data-parent="#accordionArea" href="#Area'.$tempUID.'">';
         echo $row1['name'];
         echo '<i class="fa fa-angle-down"></i>';
         echo '</a>';
         echo '</div>';
         echo '<div id=Area'.$tempUID.' class="accordion-body collapse ';
         if($aktif) echo 'in';
         echo '">';
         echo '<div class="accordion-inner urunler-design">';
         echo '<ul>';

         $sql3 = "SELECT * FROM 35cgncategory WHERE id>0 AND parent_id=".$tempUID;
         $res3 = getSqlResult($sql3);
         while ($row3 = mysqli_fetch_array($res3)) {
            echo '<a href="category.php?uid='.$row3['id'].'"><li>'.$row3['name'].'</li></a>';
         }

         echo '</ul>';
         echo '</div>';
         echo '</div>';
         echo '</div>';
      }
   }
   ?>
</div>
</div>