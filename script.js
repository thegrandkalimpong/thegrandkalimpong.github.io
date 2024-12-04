// script.js
function openModal(src) {
    const modal = document.getElementById('modal');
    const modalImage = document.getElementById('modal-image');
    
    modal.style.display = "block"; // Show the modal
    modalImage.src = src; // Set the source of the modal image to the clicked thumbnail's source
}

function closeModal() {
    const modal = document.getElementById('modal');
    
    modal.style.display = "none"; // Hide the modal
}
