<?php	ob_start(); 	 ?>
 <?php   include("cms/std/cgncon.php");  ?> 
 
<?php  

function tr_strtolower($text)
{
    $search=array("Ç","İ","I","Ğ","Ö","Ş","Ü");
    $replace=array("ç","i","ı","ğ","ö","ş","ü");
    $text=str_replace($search,$replace,$text);
    $text=strtolower($text);
    return $text;
}

$sql = "select * from 35cgnmenu where menu_type = 0 order by menu_rank ASC"; 
$result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"]));  

echo "<ul id=\"navigation\" class=\"dd-menu sf-menu\">"; 

while($row = mysqli_fetch_array($result)) { 
    //***************************** Tanımlı Sayfalar ******************************//
    if(tr_strtolower($row['menu_name']) == 'anasayfa'  || tr_strtolower($row['menu_name']) == 'ana sayfa')
    { 
        echo "<li><a href=\"./ \">".$row["menu_title"]."</a></li>"; 
    }
	
    else if(tr_strtolower($row['menu_name']) == tr_strtolower('ürünler')  || tr_strtolower($row['menu_name']) == tr_strtolower('ürünlerimiz')) 
    {   
        echo "<li><a href=\"category.php?uid=0\">".$row["menu_title"]."</a>"; 
        $sql4 = "select * from 35cgncategory where parent_id = 0 and id<> 0"; 
					
					$result4 = mysqli_query($GLOBALS["___mysqli_ston_user"],  $sql4 );  
	         
        if(mysqli_num_rows($result4) > 0) 
        { 
            echo "<ul>"; 
            echo "<li><a href=\"category.php?uid=0\">Tüm Kategoriler</a></li>";
            while($row4 = mysqli_fetch_array($result4)) 
            {   echo "<li><a href=\"category.php?uid=".$row4['id']."\">".$row4["name"]."</a></li>";    } 
            echo "</ul></li>"; 
        } 
        else 
        {   echo "</li>";   } 
    }  	
	
	else if(tr_strtolower($row['menu_name']) == 'galeri'  || tr_strtolower($row['menu_name']) == 'gallery')  
    {   echo "<li><a href=\"gallery.php\">".$row["menu_title"]."</a></li>";  }     

    else if(tr_strtolower($row['menu_name']) == 'projeler'  || tr_strtolower($row['menu_name']) == 'projelerimiz') 
    {   echo "<li><a href=\"projects.php\">".$row["menu_title"]."</a></li>";    } 
 
    else if(tr_strtolower($row['menu_name']) == 'referanslar'  || tr_strtolower($row['menu_name']) == tr_strtolower('referanslarımız')) 
    {   echo "<li><a href=\"references_logos.php\">".$row["menu_title"]."</a></li>";    }

    else if(tr_strtolower($row['menu_name']) == tr_strtolower('iletişim') ) 
    {   echo "<li><a href=\"contact.php\">".$row["menu_title"]."</a></li>";    } 
 
    else if(tr_strtolower($row['menu_name']) == 'haberler') 
    {   echo "<li><a href=\"news.php\">".$row["menu_title"]."</a></li>";    }
         
    else 
    { 
        $sql3 = "SELECT * FROM 35cgnpage where menu_id=".$row['menu_id'];  
        $result3 = mysqli_query($GLOBALS["___mysqli_ston_user"],  $sql3 );  
         
        if(mysqli_num_rows($result3) > 0) 
        { 
            $tempfull="";
            $tempid="-1";
            
            while($row3 = mysqli_fetch_array($result3)) 
                {        
                    if(tr_strtolower($row3["page_name"]) == 'galeri'  || tr_strtolower($row3["page_name"]) == 'gallery')  
                    {    $tempfull = $tempfull. "<li><a href=\"gallery.php\">".$row3["page_name"]."</a></li>";  }     

                    else if(tr_strtolower($row3["page_name"]) == 'projeler'  || tr_strtolower($row3["page_name"]) == 'projelerimiz') 
                    {    $tempfull = $tempfull. "<li><a href=\"projects.php\">".$row3["page_name"]."</a></li>";    } 
                 
                    else if(tr_strtolower($row3["page_name"]) == 'referanslar'  || tr_strtolower($row3["page_name"]) == 'referanslarımız') 
                    {    $tempfull = $tempfull. "<li><a href=\"references_logos.php\">".$row3["page_name"]."</a></li>";    }

                    else{
                        if($tempid=="-1") $tempid=$row3['page_id'];        
                        $tempfull = $tempfull."<li><a href=\"page.php?id=".$row3['page_id']."\">".$row3["page_name"]."</a></li>";
                    }
                } 
                
            echo "<li><a href=\"page.php?menu=".$row['menu_id']."\">".$row["menu_title"]."</a><ul>"; 
            echo $tempfull;
            echo "</ul></li>"; 
            
        } 
        else 
        {   echo "<li><a href=\"page.php?menu=".$row['menu_id']."\">"."!-".$row["menu_title"]."</a></li>";   } 
    } 
} 
echo "</ul>"; 
?> 
<?php ob_flush(); ?>
