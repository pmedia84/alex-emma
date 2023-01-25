//nav button active states
const navBtn = document.querySelector('.nav-btn');
const navLinks = document.querySelector('.nav-links');

navBtn.addEventListener('click', ()=>{
    const isOpened = navBtn.getAttribute('aria-expanded') ==="true";

    if (isOpened ? closenavLinks() : opennavLinks());
})

function opennavLinks(){
    navBtn.setAttribute('aria-expanded', "true");
    navLinks.setAttribute('data-state', "opened");
}
function closenavLinks(){
    navBtn.setAttribute('aria-expanded', "false");
    navLinks.setAttribute('data-state', "closing");
    navLinks.addEventListener('animationend', ()=> {
        navLinks.setAttribute('data-state', "closed");
        console.log("clos");
    }, {once:true})
}

//countdown


function getTimeRemaining(endtime) {
    const total = Date.parse(endtime) - Date.parse(new Date());
    const seconds = Math.floor((total / 1000) % 60);
    const minutes = Math.floor((total / 1000 / 60) % 60);
    const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
    const days = Math.floor(total / (1000 * 60 * 60 * 24));

    return {
        total,
        days,
        hours,
        minutes,
        seconds
    };
}

function initializeClock(id, endtime) {
    const clock = document.getElementById("clockdiv");
    const daysSpan = clock.querySelector('.days');
    const hoursSpan = clock.querySelector('.hours');
    const minutesSpan = clock.querySelector('.minutes');
    const secondsSpan = clock.querySelector('.seconds');
    function updateClock() {
        const t = getTimeRemaining(endtime);
        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML =  ('0' + t.seconds).slice(-2);
        if (t.total <= 0) {
            clearInterval(timeinterval);
        }
    }

    updateClock(); // run function once at first to avoid delay
    var timeinterval = setInterval(updateClock, 1000);
}

///Intersection Observer
const navbar = document.querySelector(".nav-container");
const hero = document.querySelector(".hero-title");
const options = {
    threshold: [0.9],
   rootMargin: "-125px 0px 0px 0px",
};

const heroobserver = new IntersectionObserver(function(entries, heroobserver) {
    entries.forEach(entry =>{
        if(!entry.isIntersecting){
            navbar.classList.add("nav-scrolled");
        }
        else{
            navbar.classList.remove("nav-scrolled");
        }
    });
},options);
heroobserver.observe(hero);
/////////////////////////////

