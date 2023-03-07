document.querySelector("#close-modal").addEventListener("click", () => {
    document.querySelector(".services-modal-container").style.display = "none";
    document.querySelector(".popup-background-shadow-box").style.display = "none";
});

document.querySelectorAll("#services-cards-open-modal").forEach((serviceCard) => {
    serviceCard.addEventListener("click", () => {

        let modal = document.querySelector(".service-modal");
        modal.innerHTML = serviceCard.innerHTML;

        description = modal.querySelector(".services-card-description");
        description.setAttribute("class", "services-card-description");

        img = modal.querySelector(".services-card-img");
        img.setAttribute("class", "services-card-img");

        document.querySelector(".popup-background-shadow-box").style.display = "block";
        document.querySelector(".services-modal-container").style.display = "flex";
    });
});

document.querySelector(".service-modal-redirect-button").addEventListener("click", () => {
    document.querySelector(".services-modal-container").style.display = "none";
    document.querySelector(".popup-background-shadow-box").style.display = "none";
});