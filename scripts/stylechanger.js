function setStyle(style, page) {
	sessionStorage.setItem("style", style);
	console.log("The session is now " + style);
	loadStyle(page);
}

function loadStyle(page) {
	var session = sessionStorage.getItem("style");
	console.log("Loading session style " + session);	
	console.log("Page is " + page);	
	console.log("Session === null? " + (session === null));	
	if(page == 'M' && session !== null)
		document.getElementById('styles').href="styles/" + session;
	else if(session !== null) {
		console.log("processor style should change to ../styles/" + session);
		document.getElementById('styles').href="../styles/" + session;
	}	
}

