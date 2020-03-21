<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title></title>
    <style>
    body, html {
  height: 100%;
}
.bg { 
  background-image: url("img/anime.jpg");
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>
<?php require_once 'process.php'; ?>
<nav class="navbar navbar-darkk bg-dark">
  <span class="navbar-brand mb-0 h1 text-warning">The best media source</span>
  <a href="index.php" class="navbar-brand h3 text-white">Return</a>
</nav>
<div class="bg">
<form action="process.php" method ="post" class=" text-white row p-5">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <p>
       <label for= "Title" class="p-2 bg-dark">Title: </label>
       <input class="mr-5" type="text" name= "title" id="Title" value="<?php echo $titles; ?>">
    </p>
    <p>
       <label for= "Image" class="p-2 bg-dark">Image Link:</label>
       <input class="mr-5" type="text" name= "img" id="Image" value="<?php echo $img_links; ?>">
    </p>
    <p>
       <label  for="firstName" class="p-2 bg-dark">First Name:</label>
       <input class="mr-5" type="text" name= "firstname" id="firstName" value="<?php echo $firstN; ?>">
    </p>
    <p>
       <label for ="lastName" class="p-2 bg-dark">Last Name:</label>
       <input class="mr-5" type="text" name="lastname"  id="lastName" value="<?php echo $lastN; ?>">
    </p>
    <p>
       <label for ="ISBN_num" class="p-2 bg-dark">ISBN:</label>
       <input class="mr-5" type="text" name="ISBN"  id="ISBN_num" value="<?php echo $ISBNs; ?>">
    </p>
    <p>
       <label for ="Summary" class="p-2 bg-dark">Descripton:</label>
       <input class="mr-5" type="text" name="summary"  id="Summary" value="<?php echo $descs; ?>">
    </p>
    <p>
       <label for ="Publish_date" class="p-2 bg-dark">Publishing date:</label>
       <input class="mr-5" type="date" name="publish_date"  id="Publish_date" value="<?php echo $publish_dates; ?>">
    </p>
    <p>
       <label for ="Types" class="p-2 bg-dark">Type:</label>
       <input class="mr-5" type="text" name="types"  id="Types" value="<?php echo $types; ?>">
    </p>
    <p>
       <label for ="Genre" class="p-2 bg-dark" >genre:</label>
       <input class="mr-5" type="text" name="genre"  id="Genre" value="<?php echo $genres; ?>">
    </p>
    <p>
       <label for ="Publisher_size" class="p-2 bg-dark">Publisher size:</label>
       <input  class="mr-5" type="text" name="publisher_size"  id="Publisher_size" value="<?php echo $publisher_sizes; ?>">
    </p>
    <p>
       <label for ="Adress_publisher" class="p-2 bg-dark">adress:</label>
       <input  class="mr-5" type="text" name="adress_publisher"  id="Adress_publisher" value="<?php echo $adresss; ?>">
    </p>
    <p>
       <label for ="Contact" class="p-2 bg-dark">contact:</label>
       <input  class="mr-5" type="text" name="contact"  id="Contact" value="<?php echo $contacts; ?>">
    </p>
    <div class="text-center m-5">
  <?php 
  if ($update == true):
  ?>

  <button type= "submit" name="update" class="btn btn-info m-2 pl-5 pr-5">Update</button>
  <?php else: ?>
  <button type= "submit" name="save" class="m-2 btn btn-success pl-5 pr-5">Save</button>
  <?php endif; ?>
</div>
</form>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
