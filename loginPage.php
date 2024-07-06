<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="login.css" />
    <style>
              .btn1 {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            color: #ffffff;
            border: none;
            border-radius: 4px;
        }
        .btn1:hover {
            background-color: #075bb4;
        }
    </style>
  </head>
  <body>
    <div class="container">

      <div class="form">
        <div class="pd">
          <h2>Hi, nice to see you</h2><br>
          <?php
            include 'includes/messages.inc.php';
          ?>
          <form action="includes/login.inc.php" method="POST">
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" id="email" name="email" required />
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" id="password" name="password" required />
            </div>
              <button type="submit" class="btn1" style="background: blue; cursor: pointer; ">
                  Login                
              </button>
            <br />

          </form>
          <p> <a href="#"> Forget password</a></p>
          <p><a href="registerPage.php">Don't have an account? Register</a></p>
        </div>
      </div>

        <img src="/blackdark.jpg" alt="Descriptive Alt Text">


  </body>
</html>
