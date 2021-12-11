// start buat time nya
const month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
const day = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

const date = new Date();
const dateText = document.getElementById("date");
const monthText = document.getElementById("month");
const yearText = document.getElementById("year");
const hoursText = document.getElementById("hours");
const minuteText = document.getElementById("minute");
const secondText = document.getElementById("second");

function clock() {
    date.setSeconds(date.getSeconds() + 1);

    dateText.innerHTML = date.getDate();
    monthText.innerHTML = month[date.getMonth()];
    yearText.innerHTML = date.getFullYear();
    hoursText.innerHTML = date.getHours();
    minuteText.innerHTML = date.getMinutes();
    secondText.innerHTML = date.getSeconds();
}
setInterval(clock, 1000);

// end buat time nya

// start buat timer refresh
var timeLeft = 30;
var elem = document.getElementById("Timer");

var timerId = setInterval(countdown, 1000);

function countdown() {
    if (timeLeft == 0) {
        clearTimeout(timerId);
    } else {
        elem.innerHTML = timeLeft + " seconds remaining";
        timeLeft--;
    }
}
// end buat timer refresh

const moveNavbar = document.getElementById("navbarContainer");
const moveTimer = document.getElementById("Timer");
const moveTitle = document.getElementsByClassName("liveMarket-Title");
const moveTable = document.getElementsByClassName("tableOutput");
const movePagination = document.getElementsByClassName("pagination");
const moveFooter = document.getElementsByClassName("footernya");

const tl = new TimelineMax();

tl.fromTo(moveNavbar, 0.8, { y: "-130", opacity: 0 }, { y: "0", opacity: 1 })
    .fromTo(moveTitle, 0.8, { y: "-130", opacity: 0 }, { y: "0", opacity: 1 })
    .fromTo(moveTimer, 0.8, { y: "-130", opacity: 0 }, { y: "0", opacity: 1 })
    .fromTo(moveTable, 0.8, { y: "130", opacity: 0 }, { y: "0", opacity: 1 })
    .fromTo(movePagination, 0.8, { y: "130", opacity: 0 }, { y: "0", opacity: 1 })
    .fromTo(moveFooter, 0.8, { y: "130", opacity: 0 }, { y: "0", opacity: 1 });
