    <?php  
        $_GLOBALS['currentpage']='page';
        include("libraries/header.php"); 

        $id = $_GET['id']; 

        if(isset($_GET['menu'])) 
        { 
            $sql = "select * from 35cgnmenu where menu_id=".$_GET['menu']; 
            
            $result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 
            $row3 = mysqli_fetch_array($result); 
            $title = $row3['menu_title']; 
            $keywords = $row3['menu_keys']; 
            $content = $row3['content']; 
        } 
        else 
        { 
            $id = $_GET['id']; 
            $sql = "select * from 35cgnpage where page_id=".$id; 
            $result = mysqli_query($GLOBALS["___mysqli_ston_user"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston_user"])); 
            $row3 = mysqli_fetch_array($result); 

            $title = $row3['page_title']; 
            $content = $row3['page_context']; 
             
        } 
    ?> 

<div id="main-container">
<div class="content">

<?php include("modules/hero_area.php"); ?>
<?php include("modules/single_text.php"); ?>
<?php// include ("modules/our_clients.php"); ?>

</div>
</div>

<?php include("libraries/footer.php"); ?>