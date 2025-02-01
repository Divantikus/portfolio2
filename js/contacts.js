import { showSection } from "./showSection.js";

export const show = () => {
  return showSection(
    "contacts",
    `
      <div class="contacts-page__container container">
            <h2 class="contacts-page__title">Контакты</h2>
            <div class="contacts-page__flex-container">
              <div class="contacts-page__card">
                <img
                  src="img/contacts/tg.svg"
                  alt="Телеграмм"
                  class="contacts-page__img"
                />
                <h3 class="contacts-page__sub-title">Телеграмм</h3>
                <a
                  href="https://t.me/sumrakevich"
                  class="contacts-page__link"
                  target="_blank"
                  >@sumrakevich</a
                >
              </div>
              <div class="contacts-page__card">
                <img
                  src="img/contacts/mail.svg"
                  alt="Почта"
                  class="contacts-page__img"
                />
                <h3 class="contacts-page__sub-title">Почта</h3>
                <a
                  href="mailto:ivanchengar@gmail.com"
                  class="contacts-page__link"
                  target="_blank"
                  >ivanchengar@gmail.com</a
                >
              </div>
              <div class="contacts-page__card">
                <img
                  src="img/contacts/telef.svg"
                  alt="Телефон"
                  class="contacts-page__img"
                />
                <h3 class="contacts-page__sub-title">Телефон</h3>
                <a href="tel:+79497183040" class="contacts-page__link"
                  >+79497183040</a
                >
              </div>
            </div>
      </div>
    `
  );
};
