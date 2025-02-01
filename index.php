<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=1500" />
    <link rel="shortcut icon" href="img/otherr/portf.svg" type="image/png" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Портфолио</title>
  </head>
  <body>
    <div class="content" id="mainSection">
      <header class="header">
        <nav class="header__nav-bar">
          <ul class="header__list-of-elements">
            <li class="header__item">
              <button
                class="header__button orange-underline-on"
                id="page_home"
                tabindex="1"
              >
                home
              </button>
            </li>
            <li class="header__item">
              <button class="header__button" id="page_about" tabindex="2">
                about me
              </button>
            </li>
            <li class="header__item">
              <button class="header__button" id="pade_hobbies" tabindex="3">
                Hobbies
              </button>
            </li>
            <li class="header__item">
              <button class="header__button" id="grade_skils" tabindex="4">
                Grade
              </button>
            </li>
            <li class="header__item">
              <button class="header__button" id="page_skils" tabindex="5">
                Skils
              </button>
            </li>
            <li class="header__item">
              <button class="header__button" id="page_contacts" tabindex="6">
                contacts
              </button>
            </li>
          </ul>
        </nav>
      </header>
      <main class="main" id="mainElem">
        <section id = "gradeSection" class="hide">
          <h1 class="grade-page__title">Успеваемость</h1>
          <table class="grade-page__table">
            <thead>
              <tr class="grade-page__table-row_gray">
                <th class="grade-page__table-text grade-page__table-text_left">
                  Предмет
                </th>
                <th class="grade-page__table-text grade-page__table-text_right">
                  Оценка
                </th>
              </tr>
            </thead>
            <tbody>
              <?php include "./php/grade-table.php"?>
            </tbody>
          </table>
        </section>
      </main>
    </div>
    <script src="js/script.js" type="module"></script>
  </body>
</html>
