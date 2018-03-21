
<form method="POST" name="form">
    <input type = "text" name = "tu_khoa" placeholder="Tu Khoa..."> <br><br>
    <button type='Submit'>Tim</button> 
</form>

<?php
if(!empty($_POST['tu_khoa']))
{
    $ten = $_POST['tu_khoa'];
    echo ("Ket qua tim kiem voi tu khoa ".$ten);
}
?>