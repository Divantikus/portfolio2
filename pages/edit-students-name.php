<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/add-student.css">
  <title>Редактировать имя или фамилию</title>
</head>
<body class="flexContainer">
  <form class="form" action="../php/controllers/name-update-controller.php" method="POST">
    <h1 class="title">Редактировать имя или фамилию</h1>
    <label class="label">Редактировать</label>
    <div class="inputContainer">
      <select name="studentId" id="select" class="list">
        <?php include "../php/controllers/students-drop-down-list-controller.php"?>
      </select>
    </div>
    <div class="inputContainer">
      <input type="text" name="firstName" class="input" placeholder="Имя вводить сюда..." minlength="3" maxlength="20">
    </div>
    <label class="label">Фамилия</label>
    <div class="inputContainer">
      <input type="text" name="secondName" class="input" placeholder="Фамилию вводить сюда..." minlength="3" maxlength="20">
    </div>
    <a href="editing-page.php" class="link">Вернуться на страницу редактирования</a>
    <button class="submitBtn">Редактировать</button>
  </form>
</body>
</html>