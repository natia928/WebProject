<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $subject = htmlspecialchars($_POST['subject'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Submitted</title>
</head>
<body>
  <h2>Thank you for contacting me!</h2>
  <p>Name: <?php echo $name; ?></p>
  <p>Email: <?php echo $email; ?></p>
  <p>Phone: <?php echo $phone; ?></p>
  <p>Subject: <?php echo $subject; ?></p>
  <p>Message: <?php echo $message; ?></p>
</body>
</html>
<?php
} else {
    echo "Please submit the form.";
}
?>
