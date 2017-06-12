function checkIfEmailAlreadyExists(email) {
	var elem = document.getElementById("message-notification");
	
	// If input's length is 0, we hide the message box, else we display the message received
    if (email.length == 0) { 
        elem.innerHTML = "";
		if (document.querySelector('.notification.display') !== null) {
			elem.classList.remove('display');
		}
        return;
    } else {
		// Handling XML HTTP 
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                elem.innerHTML = this.responseText;
				if (document.querySelector('.notification.display') == null) {
					elem.classList.add('display');
				}
            }
        };

        xmlhttp.open("GET", "./lib/handlers/checkIfEmailAlreadyExists.php?req=" + email, true);
        xmlhttp.send();
    }
}

function sendTestAnswers() {
	// We prevent redirect
	event.preventDefault();
	
	// Checking if all Yes/No questions have an answer
	if ((document.getElementById('q1a').checked || document.getElementById('q1b').checked) && 
	(document.getElementById('q2a').checked || document.getElementById('q2b').checked) &&
	(document.getElementById('q3a').checked || document.getElementById('q3b').checked) &&
	(document.getElementById('q4a').checked || document.getElementById('q4b').checked) &&
	(document.getElementById('q5a').checked || document.getElementById('q5b').checked) &&
	(document.getElementById('q6a').checked || document.getElementById('q6b').checked)) {
		// Retrieving all Test fields
		// We set '0' to unanswered questions
		var data = {};
		data.i1 = document.getElementById('q1a').checked ? 1 : 0;
		data.i2 = document.getElementById('q2a').checked ? 1 : 0;
		data.i3 = document.getElementById('q3a').checked ? 1 : 0;
		data.i4 = document.getElementById('q4a').checked ? 1 : 0;
		data.i5 = document.getElementById('q5a').checked ? 1 : 0;
		data.i6 = document.getElementById('q6a').checked ? 1 : 0;
		data.i7_intuneric = document.getElementById('intuneric').checked ? 1 : 0;
		data.i7_soareci = document.getElementById('soareci').checked ? 1 : 0;
		data.i7_ascutit = document.getElementById('ascutit').checked ? 1 : 0;
		data.i7_lift = document.getElementById('lift').checked ? 1 : 0;
		
		var submitStatus = document.getElementById("submit-status");
		var submitBtn = document.getElementById("submit-btn");
		
		// Handling XML HTTP 
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == XMLHttpRequest.DONE ) {
			   if (xmlhttp.status == 200) {
					submitStatus.innerHTML = xmlhttp.responseText;
					submitStatus.classList.remove('hidden');
					submitBtn.classList.add('hidden');
			   } else if (xmlhttp.status == 400) {
					submitStatus.innerHTML = "Datele nu au putut fi colectate!";
					submitStatus.classList.remove('hidden');
					submitBtn.classList.add('hidden');
			   } else {
					submitStatus.innerHTML = "Datele nu au putut fi colectate!";
					submitStatus.classList.remove('hidden');
					submitBtn.classList.add('hidden');
			   }
			}
		};

		xmlhttp.open("GET", "./lib/handlers/sendTestAnswers.php?i1=" + data.i1 + "&i2=" + data.i2 + "&i3=" + data.i3 + "&i4=" + data.i4 + "&i5=" + data.i5 + "&i6=" + data.i6 + "&i7_intuneric=" + data.i7_intuneric + "&i7_soareci=" + data.i7_soareci + "&i7_ascutit=" + data.i7_ascutit + "&i7_lift=" + data.i7_lift, true);
		xmlhttp.send();
	} else {
		alert('Trebuie sa raspundeti la toate intrebarile cu Da/Nu (*)');
	}
}