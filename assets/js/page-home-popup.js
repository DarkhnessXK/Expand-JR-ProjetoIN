var is_popup_show = sessionStorage.getItem('alreadyShow');

window.addEventListener("load", () => {
    setTimeout(
        function open(event){
            if(is_popup_show != 'already shown'){
                document.querySelector(".popup").style.display = "flex";
                document.querySelector(".popup-background-shadow-box").style.display = "block";
                sessionStorage.setItem('alreadyShow','already shown');
            }
        },
        1000
    );
});

document.querySelector("#close").addEventListener("click", () => {
    document.querySelector(".popup").style.display = "none";
    document.querySelector(".popup-background-shadow-box").style.display = "none";
});
