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
