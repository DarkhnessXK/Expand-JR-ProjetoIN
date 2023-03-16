let interval = 2000;

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        const service = entry.target;
        if(entry.isIntersecting){
            let counterstart = parseInt(service.textContent);
            let counterend = parseInt(service.getAttribute("data-count"));
            let duration = Math.floor(interval / counterend);
            if(counterstart != counterend){
                let count = setInterval(() => {
                    counterstart += 1;
                    service.textContent = counterstart;
                    if(counterstart == counterend){
                        clearInterval(count);
                    }
                }, duration);
            }else{
                return;
            }
        }
        
    })
})

observer.observe(document.querySelector("#count-1"));
observer.observe(document.querySelector("#count-2"));
observer.observe(document.querySelector("#count-3"));
observer.observe(document.querySelector("#count-4"));
