<?php require 'header.php'; ?>
<?php require_once 'conn/conn.php'; ?>

<?php 
if (isset($_POST['submit'])) {
	$id_num = $_POST['user_id'];
	$email = $_POST['email'];
	$password = $_POST['password'];

		$query = $handler->prepare ("INSERT INTO Student (id, email, password) VALUES (?,?,?)");
		$query->bind_param("iss",$id_num, $email, $password);
		$query->execute();

		echo " Data inserted ";
	
}else {
	echo "didnt get any data.";
}



?>
