const pdfCard = document.querySelector(".pdf-card");
const deleteButton = document.querySelector(".delete-btn");
const deleteModal = document.querySelector(".delete-modal");

const updateButton = document.querySelector(".update-btn");
const updateModal = document.querySelector(".update-modal");
const title = document.querySelector(".title > a");








renderSlideIn();
toggleDeleteModal();
toggleUpdateModal();

function toggleUpdateModal() {
    updateButton.addEventListener("click", (e) => {
        e.stopPropagation();
        console.log("update msg")
        updateModal.classList.add("is-open");
        deleteModal.classList.remove("is-open");
    })
    const closeButton = document.getElementById("close");
    closeButton.addEventListener("click", () => {
        updateModal.classList.remove("is-open");
    })
}

function toggleDeleteModal() {
    deleteButton.addEventListener("click", (e) => {
        e.stopPropagation();
        deleteModal.classList.add("is-open");
        updateModal.classList.remove("is-open");
    })

    const noButton = document.getElementById("no");
    noButton.addEventListener("click", () => {
        const modal = noButton.parentElement.parentElement;
        modal.classList.toggle("is-open");
    })
}

function renderSlideIn() {
    title.addEventListener("click", (e) => {
        e.stopPropagation();
    })

    pdfCard.addEventListener("click", () => {
        const slideIn = document.querySelector(".slide-in");
        slideIn.classList.toggle("show");
    })
}