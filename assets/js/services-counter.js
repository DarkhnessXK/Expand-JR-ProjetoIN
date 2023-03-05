let countersDisplay = document.querySelectorAll(".results-card-counter");
let interval = 8000;

countersDisplay.forEach((counterDisplay) => {
    let counterstart = parseInt(counterDisplay.textContent);
    let counterend = parseInt(counterDisplay.getAttribute("data-count"));
    let duration = Math.floor(interval / counterend);
    let count = setInterval(() => {
        counterstart += 1;
        counterDisplay.textContent = counterstart;
        if(counterstart == counterend){
            clearInterval(count);
        }
    }, duration);
})
