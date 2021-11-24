darkOn = sessionStorage.getItem("dark") == "true" ? true : false

function setTheme(){
  if(darkOn){
    document.body.classList.add("dark-mode");
	document.querySelector("#dark-mode-btn").classList.remove("fa-moon")
	document.querySelector("#dark-mode-btn").classList.add("fa-sun")
	document.getElementById("dark-mode-link").setAttribute("title", "Light Mode")
	if (document.getElementById("about-pic") != null) {
		document.getElementById("about-pic").setAttribute("href", "images/me/02.jpg")
		document.getElementById("about-pic").setAttribute("x", "-30")
	}

	sessionStorage.setItem("dark", "true")
  }
  else{
    document.body.classList.remove("dark-mode")
	document.querySelector("#dark-mode-btn").classList.remove("fa-sun")
	document.querySelector("#dark-mode-btn").classList.add("fa-moon")
	document.getElementById("dark-mode-link").setAttribute("title", "Dark Mode")
	if (document.getElementById("about-pic") != null) {
		document.getElementById("about-pic").setAttribute("href", "images/me/01.jpg")
		document.getElementById("about-pic").setAttribute("x", "0")
	}
	sessionStorage.setItem("dark", "false")
  }
}

setTheme()

function toggle(){
  darkOn = !darkOn
  setTheme()
}

document.getElementById("dark-mode-btn").addEventListener("click", toggle)