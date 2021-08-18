<?php 

session_start();

$conn = mysqli_connect("localhost","root","","webmp3");


if(isset($_POST["username"])){

  $output ='';

  $username = $_POST["username"];
  $password = md5($_POST["password"]);

    $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);

    $cek = mysqli_num_rows($result);

    if($cek > 0){ 

      $row = mysqli_fetch_assoc($result);

      $_SESSION["username"] = $_POST["username"];
      $_SESSION["id_user"] = $row["id_user"];
      header("location: home.php");
    }
    else
    {
      echo "no";
    }
    echo $output;
}
  ?>