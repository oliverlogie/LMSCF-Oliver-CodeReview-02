<html lang="en">
<head>
<meta charset="UTF-8">
<title>Library</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
   #jumbo{
      background-image: url("img/film.gif");
      height:200px;
   }
   body, html {
  height: 100%;
}
.background { 
  background-image: url("img/anime.jpg");
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body >
<nav class="navbar navbar-dark bg-dark">
  <span class="navbar-brand mb-0 h1 text-warning">The best media source</span>
  <a href="insert.php" class="navbar-brand h3 text-white">Add Media</a>
</nav>

  <?php require_once 'process.php'; ?>
  
  <?php 

if (isset($_SESSION['message'])):?>

<div class ="alert m-0 alert-<?= $_SESSION['msg_type'] ?>">
  <?php 
  echo $_SESSION['message'];
  ?>
</div>
<?php endif ?>
  <?php 

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}

$sql = "SELECT * FROM media";
$result = mysqli_query($conn, $sql);
?>

<div class="jumbotron m-0" id="jumbo"> </div>

<div class="container-fluid  background">
  <div class="row justify-content-center">
    <table class="table bg-success col-10">
      <thead>
        <tr>
          <th>Title</th>
          <th>Link</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>ISBN</th>
          <th>Descripton</th>
          <th>publish date</th>
          <th>type</th>
          <th>genre</th>
          <th>publisher size</th>
          <th>adress</th>
          <th>contact</th>
        </tr>
      </thead>

  <?php 
  while ($row = $result-> fetch_assoc()): 
  ?>
  <tr>
    <td><?php echo $row['title']; ?></td>
    <td><a><?php echo $row['img']; ?></a></td>
    <td><?php echo $row['firstname']; ?></td>
    <td><?php echo $row['lastname']; ?></td>
    <td><?php echo $row['ISBN']; ?></td>
    <td><?php echo $row['summary']; ?></td>
    <td><?php echo $row['publish_date']; ?></td>
    <td><?php echo $row['types']; ?></td>
    <td><?php echo $row['genre']; ?></td>
    <td><?php echo $row['publisher_size']; ?></td>
    <td><?php echo $row['adress_publisher']; ?></td>
    <td><?php echo $row['contact']; ?></td>
    <td>
      <a href="insert.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary" >Edit</a>
      <a href="index.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger" >Delete</a>
    </td>
  </tr>
  <?php endwhile; ?>
    </table>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>