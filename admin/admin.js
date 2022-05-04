const pdfCards = document.querySelectorAll(".pdf-card");
pdfCards.forEach(pdfCard => {
    renderSlideIn(pdfCard);
})

function renderSlideIn(pdfCard) {
    const slideIn = pdfCard.querySelector(".slide-in");
    const title = pdfCard.querySelector(".title > a");
    const updateButton = slideIn.querySelector(".update-btn");
    const deleteButton = slideIn.querySelector(".delete-btn");
    const deleteModal = pdfCard.querySelector(".delete-modal");
    const updateModal = pdfCard.querySelector(".update-modal");

    // stopping the click event from bubbling up to the pdfCard event handler
    deleteModal.addEventListener("click", (e) => {
        e.stopPropagation()
    })
    updateModal.addEventListener("click", (e) => {
        e.stopPropagation()
    })

    title.addEventListener("click", (e) => {
        e.stopPropagation();
    })


    pdfCard.addEventListener("click", () => {
        slideIn.classList.toggle("show");
    })
    toggleDeleteModal(deleteModal, updateModal, deleteButton)
    toggleUpdateModal(updateModal, deleteModal, updateButton)
}

function toggleDeleteModal(deleteModal, updateModal, deleteButton) {
    const noButton = deleteModal.querySelector(".no");
    deleteButton.addEventListener("click", (e) => {
        e.stopPropagation();
        updateModal.classList.remove("is-open");
        deleteModal.classList.add("is-open")
    })
    noButton.addEventListener("click", (e) => {
        e.stopPropagation();
        deleteModal.classList.remove("is-open");
    })

}
function toggleUpdateModal(updateModal, deleteModal, updateButton) {
    const closeButton = updateModal.querySelector(".close");
    updateButton.addEventListener("click", (e) => {
        e.stopPropagation();
        deleteModal.classList.remove("is-open");
        updateModal.classList.add("is-open")
    })
    closeButton.addEventListener("click", (e) => {
        e.stopPropagation();
        updateModal.classList.remove("is-open");
    })

}