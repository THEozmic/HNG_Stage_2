function updateScreen() {
  document.querySelector(".background").classList.add("night");

  let time = moment().format('hh:mm a');
  if (time.includes("am")) {
    document.querySelector(".background").classList.remove("night");
    document.querySelector(".background").classList.add("day");
  }

  document.querySelector(".time").innerHTML = time;
}

updateScreen();

setInterval(updateScreen, 1000);
