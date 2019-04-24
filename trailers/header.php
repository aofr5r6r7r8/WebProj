ี
<?php
    session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Trailers</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>


<style>
.button {
  display: inline-block;
  padding: 5px 10px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #FF2D00;
  border: none;
  border-radius: 15px;
  float: right;

}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>

</head>
<body>

<?php
  include("db.php");

?>

<div id="shell">
  <div id="header">

    <button class="button" id='logout' onclick="window.location.href='http://localhost/WebProj/trailers/login/logout.php'" >Admin</button>
    <br> <br> <br>

    <p><center>
      <img src = "css/images/AOF/top.jpg"
           alt = "top" />
    </center></p>

    <div id="navigation">

    </div>
    <div id="sub-navigation">
      <ul>
        <li><a href="index2.php">หนังแนะนำ</a></li>
        <li><a href="MovieNew.php">หนังใหม่</a></li>
        <li><a href="movies.php">หนังทั่วไป</a></li>
        <li><a href="show_comment.php">COMMENTED</a></li>
        <li><a href="edit.php" id='edit' style="display:none">จัดการหนัง</a></li>

      </ul>
      <div class="header-search">
      <form action="https://cse.google.com/cse/publicurl">
      <div class="header-search-icon"><i class="fa fa-search"></i></div>
      <input type="hidden" name="cx" value="001791517197637832964:y2s55gg3-ks">
      <input type="text" name="q" class="header-search-input" placeholder="ค้นหา">
      <button type="submit" class="header-search-button">ค้นหา</button>
      </form>
      </div>
    </div>
  </div>


  <script>
  <?php
  if($_SESSION["username"]=='admin'){
  ?>
    $('#edit').show();
    $('#logout').show();
  <?php
}
  ?>
  </script>

</body>
</html>
