import { showSection } from "./showSection.js";

export const show = () => {
  return showSection(
    "about",
    `
          <div class="about-page__text-container">
            <h2 class="about-page__title">Обо мне</h2>
            <p class="about-page__text">
              Самый обычный студент, который живёт размеренной жизнь и стремится
              к своей мечте.
            </p>
            <p class="about-page__text">
              Вы можете узнать о моих хобби, перейдя по ссылочке ниже.
            </p>
            <button class="about-page__button" id="reed_more" tabindex="5">
              Узнать больше
              <img
                class="about-page__arrow"
                src="img/about-page/Right.svg"
                alt="arrow"
              />
            </button>
          </div>
          <div class="about-page__img-container">
            <img
              src="img/about-page/photo-fone.jpg"
              alt="фото-1"
              class="about-page__img"
            />
            <img
              src="img/about-page/photo-1.jpg"
              alt="фото-2"
              class="about-page__img"
            />
            <img
              src="img/about-page/photo-2.jpg"
              alt="фото-3"
              class="about-page__img"
            />
            <img
              src="img/about-page/photo-3.jpg"
              alt="фото-4"
              class="about-page__img"
            />
          </div>
    `
  );
};
