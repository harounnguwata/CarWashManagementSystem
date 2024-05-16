<?php //error_reporting(0);
include 'includes/config.php'; 

if(isset($_POST['book']))
{
$ptype=$_POST['packagetype'];
$wpoint=$_POST['washingpoint'];   
$fname=$_POST['fname'];
$mobile=$_POST['contactno'];
$date=$_POST['washdate'];
$time=$_POST['washtime'];
$message=$_POST['message'];
$status='New';
$bno=mt_rand(100000000, 999999999);
$sql="INSERT INTO tblcarwashbooking(bookingId,packageType,carWashPoint,fullName,mobileNumber,washDate,washTime,message,status) VALUES(:bno,:ptype,:wpoint,:fname,:mobile,:date,:time,:message,:status)";
$query = $pdo->prepare($sql);
$query->bindParam(':bno',$bno,PDO::PARAM_STR);
$query->bindParam(':ptype',$ptype,PDO::PARAM_STR);
$query->bindParam(':wpoint',$wpoint,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':date',$date,PDO::PARAM_STR);
$query->bindParam(':time',$time,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $pdo->lastInsertId();
if($lastInsertId)
{
 
  echo '<script>alert("Your booking done successfully. Booking number is "+"'.$bno.'")</script>';
 echo "<script>window.location.href ='washing-plans.php'</script>";
}
else 
{
 echo "<script>alert('Something went wrong. Please try again.');</script>";
}

}

?>,