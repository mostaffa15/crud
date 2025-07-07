<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>
<body>
<form action="create.php" method="POST">
  <div class="mb-3">
    <input type="text" name="fname" class="form-control" placeholder="First name" aria-label="First name">
  </div>

  <div class="mb-3">
    <input type="text" name="lname" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>

  <div class="mb-3">
    <input type="number" name="age" class="form-control" placeholder="Age" aria-label="Age">
  </div>

  <button type="submit" class="btn btn-primary">submit</button>
</form>

</body>
</html>