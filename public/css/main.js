
// Header Underline https://codepen.io/alphardex/pen/JjoqbNP
let underlineMenuItems = document.querySelectorAll(".underline-menu li");
underlineMenuItems[0].classList.add("active");
underlineMenuItems.forEach(item => {
    item.addEventListener("click", () => {
        underlineMenuItems.forEach(item => item.classList.remove("active"));
        item.classList.add("active");
    });
});
// Full Page Burger Navigation https://codepen.io/alphardex/pen/NWPBwYe
let burgerMenuToggle = document.querySelector("#burger-toggle");
let burgerMenuLinks = document.querySelectorAll(".burger-nav li a");
burgerMenuLinks.forEach(link => {
    link.addEventListener("click", () => {
        burgerMenuToggle.checked = false;
    });
});
// Cross Bar Glitch Text https://codepen.io/alphardex/pen/VwLLLNG
const random = (min, max) => min + Math.floor(Math.random() * (max - min + 1));
let crossBarGlitchTexts = document.querySelectorAll(".cross-bar-glitch");
crossBarGlitchTexts.forEach(text => {
    let content = text.textContent;
    text.textContent = "";
    let slice = text.dataset.slice;
    let glitchText = document.createElement("div");
    glitchText.className = "glitch";
    glitchText.style.setProperty("--slice-count", slice);
    for (let i = 0; i <= Number(slice); i++) {
        let span = document.createElement("span");
        span.textContent = content;
        span.style.setProperty("--i", `${i + 1}`);
        if (i !== Number(slice)) {
            span.style.animationDelay = `${800 + random(100, 300)}ms`;
        }
        glitchText.append(span);
    }
    text.appendChild(glitchText);
    let bars = document.createElement("div");
    bars.className = "bars";
    for (let i = 0; i < 5; i++) {
        let bar = document.createElement("div");
        bar.className = "bar";
        bars.append(bar);
    }
    text.append(bars);
});
// Staggered Rise In Text https://codepen.io/alphardex/pen/qBEmGbw
let staggeredRiseInTexts = document.querySelectorAll(".staggered-rise-in");
staggeredRiseInTexts.forEach(text => {
    let letters = text.textContent.split("");
    text.textContent = "";
    letters.forEach((letter, i) => {
        let span = document.createElement("span");
        span.textContent = letter;
        span.style.animationDelay = `${i / 20}s`;
        text.append(span);
    });
});
// Observe the elements which have animations to fire.
let observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("active");
        }
    });
}, { rootMargin: "0px 0px -140px" });
let titles = document.querySelectorAll(".titles > *");
titles.forEach(title => observer.observe(title));
let paragraphs = document.querySelectorAll("p");
paragraphs.forEach(p => observer.observe(p));
let span = document.querySelectorAll("span");
span.forEach(span => observer.observe(span));
let profileCards = document.querySelectorAll(".card");
profileCards.forEach(profileCard => observer.observe(profileCard));
let timeline = document.querySelector(".timeline");
observer.observe(timeline);
let marker = document.querySelector(".marker");
observer.observe(marker);
let placeName = document.querySelector(".place-name");
observer.observe(placeName);
let map = document.querySelector("#map");
observer.observe(map);
let sponsorList = document.querySelectorAll(".sponsors-list li");
sponsorList.forEach(sponsor => observer.observe(sponsor));
// Baidu Map API
// let bmap = new BMap.Map("map");
// let point = new BMap.Point(113.950148, 22.553891);
// bmap.centerAndZoom(point, 18);



















