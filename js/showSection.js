export const showSection = (sectionName, content) => {
  const section = document.createElement("section");
  section.classList.add(`show-section_${sectionName}`);
  section.innerHTML = content;

  document.getElementById("mainElem").appendChild(section);

  const removeThisSection = () => {
    section.classList.remove(`show-section_${sectionName}`);
    section.classList.add(`hide-section_${sectionName}`);

    return new Promise((res) => {
      setTimeout(() => {
        section.remove();
        res();
      }, 200);
    });
  };
  return removeThisSection;
};
