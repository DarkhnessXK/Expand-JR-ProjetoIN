window.addEventListener("load", () => {
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "flex";
            document.querySelector(".popup").style.justifyContent = "flex-end";
        },
        1000
    )
});

document.querySelector("#close").addEventListener("click", () => {
    document.querySelector(".popup").style.display = "none";
    document.querySelector(".popup-background-shadow-box").style.display = "none";
});