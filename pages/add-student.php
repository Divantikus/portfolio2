<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=1500" />
  <link rel="stylesheet" href="../css/add-student.css">
  <title>Добавить студента</title>
</head>
<body class="flexContainer">
  <form action="../php/controllers/student-addition-controller.php" class="form" method="POST">
    <h1 class="title">Добавить студента</h1>
    <label class="label">Имя</label>
    <div class="inputContainer">
      <input type="text" name="firstName" class="input" placeholder="Имя вводить сюда..." minlength="3" maxlength="20" required>
    </div>
    <label class="label">Фамилия</label>
    <div class="inputContainer">
      <input type="text" name="secondName" class="input" placeholder="Фамилию вводить сюда..." minlength="3" maxlength="20" required>
    </div>
    <a href="editing-page.php" class="link">Вернуться на страницу редактирования</a>
    <button class="submitBtn">Отправить</button>
  </form>
</body>
</html>