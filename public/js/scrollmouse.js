let logo = document.querySelector(".logo");
let lastScrollValue = 0;

document.addEventListener('scroll',() => {
		let top  = document.documentElement.scrollTop;
    if(lastScrollValue < top) {
    	logo.classList.add("hidden");
    } else {
    	logo.classList.remove("hidden");
    }
    lastScrollValue = top;
});