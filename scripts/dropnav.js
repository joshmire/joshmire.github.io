function myFunction() {
	var x = document.getElementById("myDropNav");
	if (x.className === "dropnav") {
		x.className += " responsive";
	} else {
		x.className = "dropnav";
	}
}