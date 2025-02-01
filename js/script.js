"use strict";

import { showHomeSection } from "./home.js";
import { showGradeSection } from "./grade.js";

const mainDiv = document.getElementById("mainSection");

const homeButton = document.getElementById("page_home");
const aboutButton = document.getElementById("page_about");
const skilsButton = document.getElementById("page_skils");
const gradeButton = document.getElementById("grade_skils");
const hobbyButton = document.getElementById("pade_hobbies");
const contactsButton = document.getElementById("page_contacts");

const allButtons = document.querySelectorAll(".header__button");

let hideLastSection = showHomeSection();

const removeClassWithDelay = (elem, rem, add, time) => {
  elem.classList.remove(rem);
  elem.classList.add(add);
  setTimeout(() => elem.classList.remove(add), time);
};

const removeUnderscore = () => {
  allButtons.forEach((button) => {
    const isHaveOrangeUnderline = button.classList.contains(
      "orange-underline-on"
    );
    const isHaveGreenUnderline =
      button.classList.contains("green-underline-on");

    if (!(isHaveOrangeUnderline || isHaveGreenUnderline)) return;

    if (isHaveOrangeUnderline) {
      removeClassWithDelay(
        button,
        "orange-underline-on",
        "orange-underline-off",
        400
      );
      return;
    }

    removeClassWithDelay(
      button,
      "green-underline-on",
      "green-underline-off",
      400
    );
  });
};

const changeThemeOnLight = () => {
  if (!mainDiv.classList.contains("dark-theme-on")) return;
  removeClassWithDelay(mainDiv, "dark-theme-on", "dark-theme-off", 500);
};

const hidePreviousSectionAndChangeTheme = async () => {
  await hideLastSection();
  changeThemeOnLight();
};

const makeButtonActiveAndChangeSection = async (e) => {
  removeUnderscore();
  e.currentTarget.classList.add("orange-underline-on");
  await hidePreviousSectionAndChangeTheme();
};

homeButton.onclick = async (e) => {
  await makeButtonActiveAndChangeSection(e);
  hideLastSection = showHomeSection();
};

aboutButton.onclick = async (e) => {
  await makeButtonActiveAndChangeSection(e);
  const abouMetSection = await import("./aboutMe.js");
  hideLastSection = abouMetSection.show();
};

hobbyButton.onclick = async (e) => {
  await makeButtonActiveAndChangeSection(e);
  const hobbiesSection = await import("./hobbies.js");
  hideLastSection = hobbiesSection.show();
};

gradeButton.onclick = async (e) => {
  await makeButtonActiveAndChangeSection(e);
  hideLastSection = showGradeSection();
};

skilsButton.onclick = async (e) => {
  await makeButtonActiveAndChangeSection(e);
  const skilsSection = await import("./skils.js");
  hideLastSection = skilsSection.show();
};

contactsButton.onclick = async (e) => {
  removeUnderscore();
  e.currentTarget.classList.add("green-underline-on");
  await hideLastSection();
  mainDiv.classList.add("dark-theme-on");
  const contactsSection = await import("./contacts.js");
  hideLastSection = contactsSection.show();
};
