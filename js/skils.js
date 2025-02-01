import { showSection } from "./showSection.js";

export const show = () => {
  return showSection(
    "skils",
    `
      <div class="skils-page__container container">
              <h2 class="skils-page__title">Навыки</h2>
              <div class="skils-page__statistics">
                <h3 class="skils-page__sub-title">
                  Примерная статистика моих познаний в программировании
                </h3>
                <div class="skils-page__text">
                  <p class="skils-page__point skils-page__point_orange">
                    35% HTML
                  </p>
                  <p class="skils-page__point skils-page__point_blue">35% CSS</p>
                  <p class="skils-page__point skils-page__point_yellow">10% JS</p>
                  <p class="skils-page__point skils-page__point_green">
                    10% Python
                  </p>
                  <p class="skils-page__point skils-page__point_purple">10% C#</p>
                </div>
              </div>
              <div class="skils-page__chart circle-anim"></div>
        </div>  
    `
  );
};
