<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/add-student.css">
  <title>Удалить студента</title>
</head>
<body class="flexContainer">
  <form class="form" action="../php/controllers/controller-delete-student.php" method="POST">
    <h1 class="title">Удалить студента</h1>
    <select name="studentId" id="select" class="list">
      <?php include "../php/controllers/students-drop-down-list-controller.php"?>
    </select>
    <a href="editing-page.php" class="link">Вернуться на страницу редактирования</a>
    <button class="submitBtn">Удалить студента</button>
  </form>
</body>
</html>