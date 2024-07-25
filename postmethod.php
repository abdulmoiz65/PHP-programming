<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <form action="" method="post">
   <div class="mb-3">
     <label for="" class="form-label">Name</label>
     <input type="text" name="userName" id="" class="form-control" placeholder="" aria-describedby="helpId">
     <small id="helpId" class="text-muted">Help text</small>


   </div>
   <div class="mb-3">
     <label for="" class="form-label">Email</label>
     <input type="text" name="userEmail" id="" class="form-control" placeholder="" aria-describedby="helpId">
     <small id="helpId" class="text-muted">Help text</small>
   </div>
<button name="userData" type="submit">submit</button>

   </form>
</div>

<?php
if(isset($_POST['userData'])){
    $stdname=($_POST['userName']);
    $stdmail=($_POST['userEmail']);
    echo $stdname  . " " . $stdmail;
}



?>


</body>
</html>