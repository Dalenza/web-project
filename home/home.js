firstYearSubjects = ["analyse", "algebre"];
secondYearSubjects = ["theorie de langage", "technique de compilation", "web"];
thirdYearSubjects = ["framework"];

initSubjectMenu();

const yearSelect = document.getElementById("year");
yearSelect.addEventListener("change", () => {
    switch (yearSelect.value) {
        case '1': updateSubjectsInSelectMenu(firstYearSubjects); break;
        case '2': updateSubjectsInSelectMenu(secondYearSubjects); break;
        case '3': updateSubjectsInSelectMenu(thirdYearSubjects); break;
        default: initSubjectMenu();
    }
})

function initSubjectMenu() {
    const subjects = firstYearSubjects.concat(secondYearSubjects).concat(thirdYearSubjects);
    updateSubjectsInSelectMenu(subjects)
}

function updateSubjectsInSelectMenu(array) {
    const subjectSelect = document.getElementById("subject")
    subjectSelect.innerHTML = "<option value=''>---</option>";
    array.forEach(ele => {
        const option = document.createElement("option");
        option.value = ele;
        option.innerHTML = ele;
        subjectSelect.appendChild(option);
    })
}