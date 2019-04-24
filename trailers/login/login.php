<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<?php
    session_start();
		include("../db.php");

    if(isset($_POST['login'])){
      $sql = "SELECT * FROM login WHERE username = '".$_POST["username"]."' and password = '".$_POST["password"]."' ";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);

      $_SESSION['username'] = $row["username"];

      if($row == 0){
        echo '
            <div class="alert alert-warning" role="alert">
              ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง กรุณาลองใหม่อีกครั้งครับ!
            </div>
        ';
      }else{
        echo "<script>window.location.href='../index2.php'</script>";
      }
    }

?>

<title>Administrator</title>
<body background="http://apps.ksusb.co.id/eps/resource/1.jpg">

<div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" method="post">
			<fieldset>
				<center><h2>Administrator</h2></center>
				<hr class="colorgraph">
				<div class="form-group">
            <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username">
				</div>
				<div class="form-group">
            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
				</div>

				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
              <input type="submit" class="btn btn-lg btn-success btn-block" name="login" value="Sign In">
					</div>
          <div class="col-xs-6 col-sm-6 col-md-6">
      						<a href="../index2.php" class="btn btn-lg btn-primary btn-block">Enter Site</a>
      					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>

</div>
