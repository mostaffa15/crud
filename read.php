<?php
include 'db.php';
$result = $conn->query("SELECT * FROM users");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">achtion</th>

    </tr>
  </thead>
  <tbody class="table-group-divider">

     <?php while($row= $result->fetch_assoc()):?>
        <tr>
      <th scope="row"> <?= $row["id"]?> </th>
      <td> <?= $row["fname"]?>  </td>
      <td> <?= $row["lname"]?> </td>
      <td> <?= $row["age"]?> </td>
     <td><a href="delete.php?id=<?php$row[]?>" class="btn btn-danger btn-lg">Delete</a>   </td> 
     <td><a href="update.php?id=<?php$row[]?>" class="btn btn-success btn-lg">Update</a> </td>
    </tr>
    
    <?php endwhile; ?>

  </tbody>
</table>
</body>
</html>