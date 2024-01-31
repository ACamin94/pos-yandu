<?php
    include "../koneksi.php";

    $query =mysqli_query($sambung, "SELECT * FROM dataibu WHERE idibu = '".$_GET['idibu']."'");
    $data = mysqli_fetch_array($query);
    echo json_encode($data);

?>