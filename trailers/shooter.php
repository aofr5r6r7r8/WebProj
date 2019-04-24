<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Shooter</title>
<style>

  .navbar {
    margin-bottom: 0;
    border-radius: 0;
  }

  .row.content {height: 450px}

  .sidenav {
    padding-top: 20px;
    background-color: #f1f1f1;
    height: 100%;
  }

  footer {
    background-color: #555;
    color: white;
    padding: 15px;
  }

  table, th, td {
border: 1px solid white;
border-collapse: collapse;

}
  th, td {
  padding: 15px;
}

  @media screen and (max-width: 767px) {
    .sidenav {
      height: auto;
      padding: 15px;
    }
    .row.content {height:auto;}
  }
</style>
</head>
<body>
<?php
  include("header.php");
?>
  <div id="main">
    <div id="content">

      <?php
        $m_id = $_GET["m_id"];
        $sql_movie = "SELECT * FROM movie WHERE m_id = $m_id ";
        $result_movie = mysqli_query($conn, $sql_movie);
        while ($row = mysqli_fetch_array($result_movie)){
      ?>
      <div class="col-sm-8 text-left">
        <h1><?php echo $row["m_name"]; ?></h1>
        <p><?php echo $row["m_desc"]; ?></p>
        <hr>
        <p><center><iframe width="560" height="315" src="<?php echo $row["m_video"]; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></center></iframe><p>

          <table align="center"> <table style="width:60%">
              <tr>
                <td><font color=white>ปีที่ฉาย</td>
                <td><font color=white><?php echo $row["m_year"]; ?></td>
              </tr>
              <tr>
                <td><font color=white>ความยาวหนัง</td>
                <td><font color=white><?php echo $row["m_length"]; ?></td>
              </tr>
              <tr>
                <td><font color=white>ผู้กำกับภาพยนต์</td>
                <td><font color=white><?php echo $row["m_director"]; ?></td>
              </tr>
              <tr>
                <td><font color=white>ผู้เขียนบท</td>
                <td><font color=white><?php echo $row["m_writer"]; ?></td>
              </tr>
              <tr>
                <td><font color=white>IMDb Rate</td>
                <td><font color=white><?php echo $row["m_imdb"]; ?></td>
              </tr>
            </table>
            <hr>
            <h3>แหล่งข้อมูลและรายละเอียดหนัง</h3>
            <p><a href="<?php echo $row["m_actor"]; ?>" style="color: #FFFFFF" target="_blank"><?php echo $row["m_actor"]; ?></a></p><br>
            <?php
            }
            ?>

            <ul class="nav navbar-nav">
              <li class="active"><a href="index2.php">Home</a></li>
            </ul>
      </div>

    </div>
</div>

<!-- END PAGE SOURCE -->
</body>
</html>
