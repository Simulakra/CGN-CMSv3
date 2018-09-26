<?php ob_start(); ?>
<?php
include("../../std/cgncon.php");
include("../../std/check.php");
include("../../std/lmenu.php");
error_reporting(0);
?>
<?php 
$i      = 1; 
$sql="SELECT * FROM 35cgnuser"; 
$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql); 

echo "<table border='0'><tr><th>#</th><th>Kullan�c� Ad�</th><th>�ifre</th><th>Se�im</th></tr>"; 
while($row = mysqli_fetch_array($result)) 
{ 
    $name=stripslashes($row['username']); 
    $password=$row['userpass']; 
    $id = $row['id']; 
    echo "<tr>"; 
    echo "<td width='5%'>" . $i . "</td>"; 
    echo "<td width='40%'>" . $name . "</td>"; 
    echo "<td width='45%'>" . $password . "</td>"; 
    echo "<td width='10%'> 
    <a href = '#' onclick = 'modifyUser(".$id.");'> 
    <img src=\"images/Edit.png\" alt=\"\" width=\"24\" height=\"24\"/></a> 
    <a href = '#' onclick = 'delUser(".$id.");'> 
    <img src=\"images/Delete.png\" alt=\"\" width=\"24\" height=\"24\"/></a> 
     
    </td>"; 
    echo "</tr>"; 
    $i++; 
} 
echo "</table>"; 
echo " <div id='divbuttons'>"; 
echo "<table border='0'>"; 
echo "    <input type=\"submit\" name=\"button\" id=\"add\" value=\"yeni kullan�c� ekle\" onclick = \"addUser();\"/>"; 
echo "</table>"; 
echo "</div>"; 
((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res); 
?> 
<?php? ob_flush(); ?>
