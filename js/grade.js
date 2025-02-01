import { showSection } from "./showSection.js";

const gradeSection = document.getElementById("gradeSection");
const gradeSectionContent = gradeSection.innerHTML;
gradeSection.remove();

export const showGradeSection = () => {
  return showSection("grade", gradeSectionContent);
};
