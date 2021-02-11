<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Validation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>

<div class="container">
  <h2>Registration form</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</div>

</body>
</html>