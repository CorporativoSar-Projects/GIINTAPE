let images = [
    "images/FeedCeroes3.svg",
    "images/FeedFlakos.svg",
    "images/FeedNachilis.svg",
    "images/FeedVillasMalaki.svg",
    "images/Feed_Giintape.svg"
];

let currentIndex = 0;

function openModal(index) {
    currentIndex = index;
    let modal = document.getElementById("modal");
    let modalImg = document.getElementById("modal-img");

    modalImg.src = images[currentIndex];
    modal.classList.add("show");
    modalImg.classList.add("fade-in");
}

function closeModal() {
    let modal = document.getElementById("modal");
    modal.classList.remove("show");
    let modalImg = document.getElementById("modal-img");
    modalImg.classList.remove("fade-in");
}

function changeImage(direction) {
    let modalImg = document.getElementById("modal-img");

    modalImg.classList.add("fade-out");

    setTimeout(() => {
        currentIndex += direction;

        if (currentIndex < 0) {
            currentIndex = images.length - 1;
        } else if (currentIndex >= images.length) {
            currentIndex = 0;
        }

        modalImg.src = images[currentIndex];

        modalImg.classList.remove("fade-out");
        modalImg.classList.add("fade-in");
    }, 400); // Debe coincidir con la duración de la animación CSS
}
