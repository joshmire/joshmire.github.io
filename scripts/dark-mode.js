darkOn = sessionStorage.getItem("dark") == "true" ? true : false;

function setTheme(){
  if(darkOn){
    document.body.classList.add("dark-mode");
	document.querySelector("#dark-mode-btn").classList.remove("fa-moon");
	document.querySelector("#dark-mode-btn").classList.add("fa-sun");
	sessionStorage.setItem("dark", "true")
  }
  else{
    document.body.classList.remove("dark-mode");
	document.querySelector("#dark-mode-btn").classList.remove("fa-sun");
	document.querySelector("#dark-mode-btn").classList.add("fa-moon");
	sessionStorage.setItem("dark", "false")
  }
}

setTheme();

function toggle(){
  darkOn = !darkOn;
  setTheme();
}

var togButton = document.getElementById("dark-mode-btn");

togButton.addEventListener("click", toggle);
