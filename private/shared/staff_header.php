<?php 
  if(!isset($page_title)) {
    $page_title ='Staff Area';
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GBI - <?php echo $page_title ?></title>
  <link rel="stylesheet" href="../stylesheets/staff.css">
</head>

<body>

<header>
  <h1>
    GBI - <?php echo $page_title ?>
  </h1>
</header>

<navigation>
  <ul>
    <li>
      <a href="<?php echo WWW_ROOT . '/staff/index.php' ?>">Menu</a>
    </li>
  </ul>
</navigation>