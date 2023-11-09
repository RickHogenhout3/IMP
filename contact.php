<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">  
    <title>IMP</title>
</head>
<body>
<?php include_once "header.php";?>
<h2 style="text-align: center;" id="contact">ContactFormulier</h2>
<form action="send.php" method="post">
  <div class="form-group">
    <label id="form" for="name">Name:</label>
    <input type="text" id="name" name="naam" required>
  </div>
  <div class="form-group">
    <label id="form" for="email">Email:</label>
    <input type="email" id="email" name="mail" required>
  </div>
  <div class="form-group">
    <label id="form" for="telefoon">Phonenumber:</label>
    <input type="tel" id="telefoon" name="phone">
  </div>
  <div class="form-group">
    <label id="form" for="datum">Service:</label> <br>
    <select name="service" id="service">
      <option value="1">Standard Services</option>
      <option value="2">Special Occation</option>
      <option value="3">Group Discount</option>
    </select>
  <div class="form-group">
    <label id="form" for="onderwerp">Title:</label>
    <input type="text" id="onderwerp" name="onderwerp" required>
  </div>
  <div class="form-group">
    <label id="form" for="bericht">Message:</label>
    <textarea name="bericht" id="bericht" cols="30" rows="3" required></textarea>
  </div>
  <input class="btn btn-danger" type="submit" name="submit" value="Verstuur">
</form>

</body>
</html>