import { showSection } from "./showSection.js";

export const show = () => {
  return showSection(
    "hobbies",
    `
          <div class="hobbies-page__container container">
            <h2 class="hobbies-page__title">Хобби</h2>
            <div class="hobbies-page__flex-container">
              <div class="hobbies-page__column">
                <div class="hobbies-page__card">
                  <div class="hobbies-page__img-container">
                    <img
                      src="img/hobbies/bike.jpg"
                      alt="Велосипед"
                      class="hobbies-page__img"
                    />
                  </div>
                  <h3 class="hobbies-page__sub-title">
                    Покатушки на велосипеде
                  </h3>
                  <p class="hobbies-page__text">
                    Лучший способ активно отдохнуть летним вечером -
                    <span class="accent-text">прокатиться на велосипеде.</span>
                  </p>
                </div>
              </div>

              <div class="hobbies-page__column">
                <div class="hobbies-page__card">
                  <div class="hobbies-page__img-container">
                    <img
                      src="img/hobbies/wb.jpg"
                      alt="Мяч"
                      class="hobbies-page__img"
                    />
                  </div>
                  <h3 class="hobbies-page__sub-title">Волейбол</h3>
                  <p class="hobbies-page__text">
                    Что может быть лучше чашки кофе с утра? Правильно, волейбол.
                  </p>
                </div>
              </div>

              <div class="hobbies-page__column">
                <div class="hobbies-page__card">
                  <div class="hobbies-page__img-container">
                    <img
                      src="img/hobbies/sky.jpg"
                      alt="Небо"
                      class="hobbies-page__img"
                    />
                  </div>
                  <h3 class="hobbies-page__sub-title">Сон</h3>
                  <p class="hobbies-page__text">
                    Здоровый сон - залог продуктивного дня. Любимейшее занятие
                    ночью.
                  </p>
                </div>
              </div>
            </div>
          </div>
    `
  );
};
