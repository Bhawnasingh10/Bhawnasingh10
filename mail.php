<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\Complaints-master\phpmailer\src\Exception.php';
require 'C:\xampp\htdocs\Complaints-master\phpmailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\Complaints-master\phpmailer\src\SMTP.php';

$con = mysqli_connect("localhost", "root", "", "user");
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `comp` ";
$qry = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($qry)) {
    $act = $row['act'];
}




if(isset($_POST["submit"])){
	$mail=new PHPMailer(true);
	$mail->isSMTP();

	$mail-> Host='smtp.gmail.com';
	$mail->SMTPAuth =true;
	$mail->Username='singhbhawna1001@gmail.com';
	$mail->Password='kfukympqpkbrgfqc';
	$mail->SMTPSecure='ssl';
	$mail->Port=465;
	$mail->setFrom('singhbhawna1001@gmail.com','Grievance Management');
	$mail->addAddress("bhawna.singh100102@gmail.com");
	$mail->isHTML(true);
	$mail->Subject = 'Grievance';
	$mail->Body=$_POST["subject"];
	$mail->send();

	echo
	"
	<script>
	alert('sent Successfully');
	document.location.href='comp.php';
	</script>
	";

	if ($act === "NotYet") {
        sleep(5); // Wait for 5 seconds
        header("Location: escalate.php");
        exit;
    }

}

?>