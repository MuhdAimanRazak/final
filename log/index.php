<!DOCTYPE html>
<html>
  <head>
    <title>Log Masuk</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="login-box">
      <h2>Login</h2>
      <form method="post" action="login.php">
        <div class="user-box">
          <input type="text" id="idpengguna" name="idpengguna" required>
          <label for="username">Username</label>
        </div>
        <div class="user-box">
          <input type="password" id="katalaluan" name="katalaluan" required>
          <label for="katalaluan">Password</label>
        </div>
        <button type="submit" value="Login" name="login-btn">Login</button><br>
        <a href="http://localhost/fyp2/design/index.php" class= btn1><button type="button">Cancel</button></a>
      </form>
    </div>
  </body>
</html>
