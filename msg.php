<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecommerce</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php if (isset($_SESSION['error_message']) && $_SESSION['error_message']) : ?>
    <?= $_SESSION['error_message'] ?>
    <?php unset($_SESSION['error_message']); ?>
<?php endif; ?>
<?php if (isset($_SESSION['success_message']) && $_SESSION['success_message']) : ?>
    <?= $_SESSION['success_message'] ?>
    <?php unset($_SESSION['success_message']); ?>
<?php endif; ?>
</body>
</html>