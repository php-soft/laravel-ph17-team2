<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <form action="{{ url('manager-user/'.$user->id) }}">
    <div class="form-group">
      <label for="text">Thay đổi Tên :</label>
      <input type="text" class="form-control" id="name" placeholder="Edit tên" name="name">
    </div>
    <div class="form-group">
      <label for="email">Thay đổi Email :</label>
      <input type="email" class="form-control" id="email" placeholder="Edit Email" name="email">
    </div>
    <div class="form-group">
      <label for="password">Change Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Edit password" name="password">
    </div>
    <button type="submit" class="btn btn-default">cập Nhật</button>
  </form>
</div>

</body>
</html>
