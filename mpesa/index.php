<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>mpesa trial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
  <form action="vendor/safaricom/mpesa/src/Facade/mpesa.php" method="POST">
  <label>paybill</label>
  <input type="number" name="paybill">
  <label>Account</label>
  <input type="text" name="account">
  <label>paybill</label>
  <input type="number" name="number">
  <button name="submit" type="submit">Submit</button>



  </form>
    
</body>
</html>