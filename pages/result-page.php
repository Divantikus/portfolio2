<?php
  include "../php/getInfo-about-operation-results.php";
  $info = new GetInfoAboutOperationResults();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=1500" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/result-of-adding.css">
  <title><?php echo $info->text?></title>
</head>
<body class="flexContainer">
  <div class="container">
    <h1 class="title"><?php echo $info->text?></h1>
    <a href="<?php echo $info->linkAddress?>" class="link"><?php echo $info->linkText?></a>
    <a href="editing-page.php" class="link">Вернуться в меню редактирования</a>
  </div>
</body>
</html>