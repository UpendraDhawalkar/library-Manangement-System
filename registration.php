<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   

  <style type="text/css">
    section
    {
      margin-top: -20px;
      height: 630px;
      width: 1260px;
      background-image:url("images/d.jpg") ;
      background-repeat:no-repeat;
    }
    .box1
{
	height: 400px;
	width: 450px;
	background-color: black;
	margin: 0px auto;
	opacity: .8;
	color: white;
	padding: 20px;
  padding-top: 60px;
}
label{
  font-weight:600;
  font-size: 18px;
}
  </style>   
</head>
<body>

<section><br><br><br><br><br>
<div class="box1"><br><br><br><br>
        <form  name="sign up" action="" method="post">
        <b><p style="padding-left: 50px; font-size: 16px; font-weight: 700;">Sign Up as:</p></b>

        <input style="margin-left: 50px; width: 18px;" type="radio" name="user" id="admin" value="admin">
        <label for="admin" >Admin</label>
        <input style="margin-left: 50px; width: 18px;" type="radio" name="user" id="student" value="student" checked="">
        <label for="sudent">Student</label>&nbsp&nbsp&nbsp&nbsp

        <button class="btn btn-default" type="submit" name="submit1" style="color: black; font-weight: 700px; width: 70px; height: 30px;">Ok</button>
        </form>
</div>
<?php
   if(isset($_POST['submit1']))
   {
    if($_POST['user']=='admin')
    {
      ?>
      <script type="text/javascript">
        window.location="Admin/registration.php"
      </script>
    <?php
    }
    else
    {
      ?>
      <script type="text/javascript">
        window.location="Student/registration.php"
      </script>
    <?php
    }
   }        
?>
  
</section>

    

</body>
</html>