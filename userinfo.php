
<?php
$con = mysqli_connect('localhost','root');

if ($con) {
    echo "conect yessssssss";
}
else{
    echo "notttttt";
}
mysqli_select_db($con,'ytbdata');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comints = $_POST['comints'];

$query = "insert into uinfodata (name,email,mobile,comints)
values ('$name','$email','$mobile','$comints')";

mysqli_query($con,$query);

header('location:index.php');



?>










<!-- ?> -->
<!-- ?> -->