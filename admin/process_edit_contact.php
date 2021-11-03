<?php 
include('../config/connect.php');


if(isset($_POST['submit'])){
    $hotline = $_POST['hotline'];
    $contactTime = $_POST['ctTime'];
    $location = $_POST['location'];
    $facebook = $_POST['fb'];
    $ins = $_POST['ins'];
    $twitter = $_POST['tw'];
    $email = $_POST['email'];
    $banner = $_POST['banner'];

    
$sql = "update `contact` set Hotline='$hotline', ContactTime='$contactTime', location='$location', LinkFaceBook='$facebook',
        LinkInsta='$ins', LinkTwitter='$twitter', Email='$email', Banner = '$banner'";


$result = mysqli_query($conn, $sql);

if($result>0){
echo $sql;
header("Location:contact.php");}
else
echo $sql;}

