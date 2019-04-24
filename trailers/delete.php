<?php
include("db.php");

$m_id = $_GET['m_id'];

if(isset($_POST["delete"])){

    $sql = "DELETE FROM movie WHERE m_id = '$m_id' ";

    if (mysqli_query($conn, $sql)) {
        ?>
        <script>
            window.location.href = 'edit.php'
        </script>
        <?php
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    mysqli_close($conn);
}
?>
