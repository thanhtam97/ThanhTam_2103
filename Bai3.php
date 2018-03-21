
<form action = "Bai3.php" method="POST">
    Name:  <input type = "text" name = 'Ten'> <br><br>
    E-mail: <input type = "text" name = 'E-mail'> <br><br>
    Website: <input type = "text" name = 'Web'> <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea> <br><br>
    Female <input type="radio" name="gender" value="female" checked/>
    Male <input type="radio" name="gender" value="male" checked/> <br><br>
    <button type='Submit'>Submit</button> 
 </form>

<?php
  if(!empty($_POST['Ten']))
  {
      echo("Ten: ".$_POST['Ten'])."<br>";
  }
  if(!empty($_POST['E-mail']))
  {
      echo("E-mail: ".$_POST['E-mail'])."<br>";
  }
  if(!empty($_POST['Web']))
  {
      echo("Web: ".$_POST['Web'])."<br>";
  }
  if(!empty($_POST['comment']))
  {
      echo("comment: ".$_POST['comment'])."<br>";
  }
  if(!empty($_POST['gender']))
  {
      echo("gender: ".$_POST['gender'])."<br>";
  }
?>