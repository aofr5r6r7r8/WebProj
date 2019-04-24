<!DOCTYPE html>
<html lang="en">
<head>
  <title>จัดการหนัง</title>

  <?php
    include("header.php");
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



  <style >
  table, th, td {
    border: 1px solid #A9A9A9;
    border-collapse: collapse;
    background-color: white;
    padding: 15px;
    }
    .btn {
    background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 12px 16px;
    font-size: 16px;
    cursor: pointer;
  }

  </style>

</head>
<body>


<div id="main">

  <p><center>
    <img src = "css/images/AOF/listmovie.jpg"
         alt = "list" />
  </center></p>

<div>
    <button type="button"  class="btn btn-success" style="float:right; margin:0 0 20px;"
    onclick="window.location.href='http://localhost/WebProj/trailers/addmovie.php'" />เพิ่ม</button>
  </div>


  <table class="table table-striped">
    <thead>
      <tr>
        <th>ลำดับ</th>
        <th>ชื่อหนัง</th>
        <th>IMDb Rate</th>
        <th>ลบ</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $num = 1;
        $sql_movie = "SELECT * FROM movie ";
        $result_movie = mysqli_query($conn, $sql_movie);
        while ($row = mysqli_fetch_array($result_movie)){
          $m_id = $row["m_id"];
      ?>
      <form action="delete.php?m_id=<?=$m_id;?>" method="post">
      <tr>
        <td><?php echo $num; ?></td>
        <td><?php echo $row["m_name"]; ?></td>
        <td><?php echo $row["m_imdb"]; ?></td>
        <td>
          <button class="btn" name="delete" onclick="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบรายการนี้ ?')"><i class="fa fa-trash"></i> ลบ</button>
        </td>
      </tr>
      </form>
      <?php
        $num++;
        }
      ?>
    </tbody>
  </table>

</div>

</body>
</html>
