<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title>หนังใหม่</title>
  </head>
  <body>
  <?php
  include("header.php");
  ?>
    <div id="main">
      <div id="content">

        <div class="box">
          <?php
            $sql_movie = "SELECT * FROM movie WHERE m_year >= 2018";
            $result_movie = mysqli_query($conn, $sql_movie);
            while ($row = mysqli_fetch_array($result_movie)){
              $m_id = $row["m_id"];
          ?>

          <div class="movie last">
            <div class="movie-image"> <a href="http://localhost/WebProj/trailers/shooter.php?m_id=<?=$m_id;?>">
              <span class="play"><span class="name"><?php echo $row["m_name"]; ?></span></span>
              <?php
                  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['m_pic']).'">';

              ?>
            </a>
          </div>
            <div class="rating">
              <p>RATING</p>
              <div class="stars">
                <div class="stars-in"> </div>
              </div>
              <span class="comments">12</span>

            </div>
          </div>

          <?php
            }
          ?>

      </div>

  </body>
</html>
