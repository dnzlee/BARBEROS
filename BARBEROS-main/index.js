

const menubar = document.querySelector("#menubar");
const navLinks = document.querySelector(".navLinks");
const icon = document.querySelector(".fa-bars");

menubar.addEventListener("click", () => {
  navLinks.classList.toggle("active");
  if (navLinks.classList.contains("active")) {
    icon.classList.replace("fa-bars", "fa-times");
  } else {
    icon.classList.replace("fa-times", "fa-bars");
  }
});

function playPause() { 
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
} 

