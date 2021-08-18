 <?php 
$conn = mysqli_connect("localhost","root","","webmp3");


if(isset($_POST["username"])){

  $output ='';

  $username = mysqli_real_escape_string($conn, $_POST["username"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = md5($password);

  $sql = "INSERT INTO user VALUES('','$username','$password','$email')";

  $result = mysqli_query($conn, $sql);
}

?>