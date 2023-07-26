<!DOCTYPE html>
<html>
<head>
  <title>Login Page 3</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #c1e3fc;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 300px;
      margin: 150px auto;
      background-color: #fff;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    input[type="submit"] {
      width: 100%;
      background-color: #00adf0;
      color: #fff;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #00adf0;
    }

    .form-group {
      margin-bottom: 10px;
    }

    .form-group:last-child {
      margin-bottom: 0;
    }

.heading {
    font-size: 4rem;
    margin-bottom: 3rem;
    text-align: center;
    color:#000000;
}
span {
    color :#00adf0;
}
  </style>
</head>
<body>
 
    <h2 class="heading">Lo<span>gin</span></h2>
     <div class="container">
            <form action="./conlog.php" method="POST">
                <div class="form-group">
                    <label for="Email">Email:</label>
                     <input type="text" id="username1" name="email" required>
                </div>
                <div class="form-group">
                      <label for="password1">Password:</label>
                     <input type="password" id="password1" name="password" required>
                </div>
                <input type="submit" name=submit value="Login">
            </form>
     </div>
</body>
</html>
