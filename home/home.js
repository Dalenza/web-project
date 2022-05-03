firstYearSubjects = [
  "analyse1", "algebre1", "algorithmique et structure de données", "atelier de programmation1", "système d'expoloitation1", "système logique et architecture des ordinateurs",
  "logique formelle", "technologies multimédia", "Anglais1", "technique de communication1",
  "algebre2", "analyse2", "algorithmique et complexité", "atelier de programmation2",
  "programmation Python", "systeme d'exploitation2", "fondements des réseaux", "fondements des base de données",
  "anglais2", "technique de communication2", "culture et compétences"
];
secondYearSubjects = [
  "probabilité et statistiques", "théorie des langages et des automates", "graphes et optimisation",
  "conception des systèmes d'information", "programmation java", "ingénierie des base de données",
  "services des réseaux", "anglais3", "gestion d'entreprise", "outils de travail collaboratif",
  "systèmes d'information géographique", "entrepôt de données", "administration des bases de données",
  "techniques d'indexation et de recherche", "technologies et programmation web", "techniques de compilation",
  "tests des logiciels", "fondements de l'intelligence artificielle", "anglais4", "droit informatique", "projet fedéré",
  "ERP"
];
thirdYearSubjects = [
  "framework et technologie Big", "virtualisation et cloud", "développement mobile",
  "développement d'applications réparties", "Machine learning", "sécurité informatique", "Architecture SOA et services web",
  "anglais5", "entrepreuneriat", "préparation à l'environnement professionnel"
];

initSubjectMenu();

const yearSelect = document.getElementById("year");
yearSelect.addEventListener("change", () => {
  switch (yearSelect.value) {
    case "1":
      updateSubjectsInSelectMenu(firstYearSubjects);
      break;
    case "2":
      updateSubjectsInSelectMenu(secondYearSubjects);
      break;
    case "3":
      updateSubjectsInSelectMenu(thirdYearSubjects);
      break;
    default:
      initSubjectMenu();
  }
});

function initSubjectMenu() {
  const subjects = firstYearSubjects
    .concat(secondYearSubjects)
    .concat(thirdYearSubjects);
  updateSubjectsInSelectMenu(subjects);
}

function updateSubjectsInSelectMenu(array) {
  const subjectSelect = document.getElementById("subject");
  subjectSelect.innerHTML = "<option value=''>---</option>";
  array.forEach((ele) => {
    const option = document.createElement("option");
    option.value = ele;
    option.innerHTML = ele;
    subjectSelect.appendChild(option);
  });
}


function renderUserAvatar() {
  let backgroundColors = [
    "var(--yellow)", "#F5B25D", "#F57E5D", "#F5645D", "#F5E65D", "#E9F55D",
    "#CFF55D", "#B5F55D", "#81F55D", "#F55DA4", "#665CF5", "#5CF5CC"
  ]
  let randomIndex = Math.floor(Math.random() * backgroundColors.length)
  let backgroundColor = backgroundColors[randomIndex]
  const userAvatar = document.getElementById("img")
  const userName = document.getElementById("user-name");
  userNameValue = userName.innerText;
  userAvatar.innerText = userNameValue[0] + userNameValue[1];
  userAvatar.style.backgroundColor = backgroundColor;
}

renderUserAvatar();