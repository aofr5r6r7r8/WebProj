<?php
  include("header.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>

<?php
if(isset($_POST['add'])){
    $file = addslashes(file_get_contents($_FILES["pic"]["tmp_name"]));
    $query = "INSERT INTO movie (m_name,m_pic,m_video,m_desc,m_year,m_length,m_director,m_writer,m_imdb,m_actor)
            VALUES ('".$_POST["name"]."','$file','".$_POST["link"]."','".$_POST["desc"]."',
            '".$_POST["year"]."','".$_POST["length"]."','".$_POST["director"]."','".$_POST["writer"]."','".$_POST["imdb"]."','".$_POST["actor"]."')";

    if (mysqli_query($conn, $query)) {
        ?>
        <script>
            window.location.href = 'edit.php'
        </script>
        <?php
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
?>

<div id="main">
    <form action="" method="post" enctype="multipart/form-data" id="addmovie">
      <label><font size="3" color = "red" >ชื่อหนัง : <br> <input type="text" name = "name" size = "50" required></label><br><br>
      <label>รูปภาพ (153*214px) : <br> <input type="file" name = "pic" id = "pic" size = "20" required></label><br><br>
      <label>วิดีโอตัวอย่าง : <br> <input type="text" name = "link" size = "100" required></label><br><br>
      <label>รายละเอียด : <br><textarea cols = "100" rows = "10" name = "desc" required></textarea></label><br><br>
      <label>ปีที่ฉาย : <br> <input type="text" name = "year" size = "20" required></label><br><br>
      <label>ความยาวหนัง : <br> <input type="text" name = "length" size = "20" required></label><br><br>
      <label>ผู้กำกับภาพยนต์ : <br> <input type="text" name = "director" size = "100" required></label><br><br>
      <label>ผู้เขียนบท : <br> <input type="text" name = "writer" size = "100" required></label><br><br>
      <label>IMDb Rate : <br> <input type="text" name = "imdb" size = "20" required></label><br><br>
      <label>แหล่งข้อมูลหนัง : <br> <input type="text" name = "actor" size = "50" required></label><br><br>
      <button type="submit"class="btn btn-success" name="add" id="add" value="add">เพิ่ม</button>

    </form>
  </div>

  </body>
</html>
