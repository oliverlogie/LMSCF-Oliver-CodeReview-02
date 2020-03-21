<?php 

session_start();
$titles = '';
$img_links='';
$firstN = '';
$lastN = '';
$ISBNs = '';
$descs = '';
$publish_dates = '';
$types = '';
$genres ='';
$publisher_sizes='';
$adresss ='';
$contacts ='';


$update = false;
$id = 0;

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "cr10_oliverkraus_biglibrary";
//check connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//if conn fails print
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}
//delete media
if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$conn->query("DELETE FROM `media` WHERE `media`.`id`=$id") or die($conn->error());
	unset($_SESSION['message']);
	$_SESSION['message'] = "Record has been deleted";
	$_SESSION['msg_type'] = "danger";

	header("location: index.php");
		
}
//insert media
if (isset($_POST['save'])){
	$title = $_POST ['title'];
	$img_link= $_POST['img'];
	$first = $_POST['firstname'];
	$last = $_POST['lastname'];
	$ISBN = $_POST['ISBN'];
	$desc = $_POST['summary'];
	$publish_date = $_POST['publish_date'];
	$type = $_POST['types'];
	$genre =$_POST['genre'];
	$publisher_size=$_POST['publisher_size'];
	$adress =$_POST['adress_publisher'];
	$contact =$_POST['contact'];

	$conn->query("INSERT INTO media (title, img, firstname, lastname, ISBN, summary, publish_date,types,genre,publisher_size,adress_publisher,contact)
	VALUES ('$title','$img_link','$first', '$last', '$ISBN','$desc','$publish_date','$type','$genre','$publisher_size','$adress','$contact')");
	unset($_SESSION['message']);
	$_SESSION['message'] = "Record has been saved";
	$_SESSION['msg_type'] = "success";

	header("location: index.php");
}
//edit media
if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	//select specific row
	$result = $conn->query("SELECT * FROM `media` WHERE `media`.`id`=$id") or die($conn->error());
	if ($result->num_rows){
		$row = $result->fetch_array();
		$titles = $row['title'];
		$img_links= $row['img'];
		$firstN = $row['firstname'];
		$lastN = $row['lastname'];
		$ISBNs = $row['ISBN'];
		$descs = $row['summary'];
		$publish_dates = $row['publish_date'];
		$types = $row['types'];
		$genres =$row['genre'];
		$publisher_sizes=$row['publisher_size'];
		$adresss =$row['adress_publisher'];
		$contacts =$row['contact'];
	}
}
// update media
if (isset($_POST['update'])){
	$id = $_POST['id'];
	$title = $_POST ['title'];
	$img_link= $_POST['img'];
	$first = $_POST['firstname'];
	$last = $_POST['lastname'];
	$ISBN = $_POST['ISBN'];
	$desc = $_POST['summary'];
	$publish_date = $_POST['publish_date'];
	$type = $_POST['types'];
	$genre =$_POST['genre'];
	$publisher_size=$_POST['publisher_size'];
	$adress =$_POST['adress_publisher'];
	$contact =$_POST['contact'];

	$conn->query("UPDATE `media`SET title='$title', img='$img_link',firstname='$first', lastname='$last', ISBN='$ISBN',summary='$desc',publish_date='$publish_date',types='$type',genre='$genre',publisher_size='$publisher_size',adress_publisher='$adress', contact='$contact' WHERE `media`.`id`=$id") or die($conn->error());
	unset($_SESSION['message']);
	$_SESSION['message'] = "Record has been changed";
	$_SESSION['msg_type'] = "info";

	header("location: index.php");
}
?>