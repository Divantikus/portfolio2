import { showSection } from "./showSection.js";

export const showHomeSection = () => {
  return showSection(
    "home",
    `
          <h1 class="home-page__title">Привет!
          </h1>
          <h2 class="home-page__sub-title accent-text">
            Я Иван, а это моё портфолио. 
          </h2>
          <img
            class="home-page__gif"
            src="./img/home-page/dance.gif"
            alt="gif"
          />
    `
  );
};
