<?php  ob_start(); ?>

<?php
include("../../std/check.php");
include("../../std/lmenu.php");
error_reporting(0);
?>

</nav>

<div id="page-wrapper">
    <div class="row"> <!-- ROW -->
        <div class="col-lg-12"><h1 class="page-header">Haber Yönetimi / Haber Düzenle</h1></div>
        <div class="col-lg-12"><!-- RESİMLER PANELİ -->
            <div class="panel panel-default">
                <div class="panel-body">

        <?php 

                    if (isset($_POST['submit'])) { 
                        $nname = $_POST['oldtitle']; 
                        $newstitle = $_POST['newstitle']; 
                        $news_date = $_POST['newsdate']; 
                        $page_keys = $_POST['page_keys']; 
                        $desc = $_POST['desci']; 
                        $link = $_POST['link']; 

                        $sql = "UPDATE 35cgnpress SET title = '$newstitle', desci = '" . $desc . "',    date = '" . $news_date . "' ,keywords = '" . $page_keys . "' WHERE id =" . $_POST['onself'];
                        mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"])); 
                        ((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
                        echo "<script language=\"javascript\">  alert(\"DÜZENLEME BAŞARILI\");  window.location.href='index.php';</script>"; 
                    } else { 
                        $newsid = $_GET['id']; 
                        $fromdb = mysqli_query($GLOBALS["___mysqli_ston"], "select * from 35cgnpress where id = " . $newsid); 
                        $info = mysqli_fetch_array($fromdb); 

                    } 
                    ?> 

                    <form name="modifynews" method="post" action="modifynews.php" enctype="multipart/form-data">

                        <table class="table ">
                            <tr>
                                <td>Başlık:</td>
                                <td><input type="hidden" name="onself" value="<?php echo "$info[id]"; ?>"/> <input
                                        class="form-control" type="text" name="newstitle"
                                        value="<?php echo "$info[title]"; ?>" maxlength="100"></td>
                            </tr>
                            <tr>
                                <td>Tarih (YYYY-AA-GG):</td>
                                <td><input class="form-control" type="text" name="newsdate"
                                           value="<?php echo date_format(date_create($info[date]), 'Y-m-d'); ?>"
                                           maxlength="40"></td>
                            </tr>
                            <tr>
                                <td>Sayfada görüntülenecek anahtar kelimeler:</td>
                                <td><input class="form-control" type="text" value="<?php echo "$info[keywords]"; ?>"
                                           name="page_keys" size="80"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><textarea id="editor1" class="ckeditor"
                                                          name="desci"><?php echo "$info[desci]"; ?></textarea></td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-primary " type="submit" name="submit"> Haberi Düzenle</button>
                                    <button class="btn btn-default " onClick="window.location.href='index.php'; return false;">Geri Dön</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div> <!-- // ROW -->
        </div>        <!-- /#page-wrapper -->


        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">


                    <form action="modifynewsimage.php" enctype="multipart/form-data" method="POST">
                        <input type="hidden" name="id" value="<?php echo "$info[id]"; ?>"/>
                        <input name="userfile" type="file" required/><br/>
                        <input type="submit" class="btn btn-primary" value="Haber İçin Resmi Güncelle"/>
                    </form>


                </div> <!-- //panel-body -->
            </div>    <!-- //panel-page -->
        </div> <!-- // column -->
    </div>        <!-- /#row -->
</div>    <!-- /#page-wrapper -->
</body>
</html>
<?php  ob_flush(); ?>