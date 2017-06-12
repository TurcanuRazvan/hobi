function retrieveStatisticsData() {
	// Retrieves data from DOM
	var elem = document.getElementById("statistics-info");
	
	if (elem) {
		var data = [];
		for (var i = 0; i < elem.childNodes.length; i++) {
			if (elem.childNodes[i].className == "stat") {
				data.push({
					name: elem.childNodes[i].getElementsByClassName("name")[0].textContent.toString().trim(),
					value: elem.childNodes[i].getElementsByClassName("value")[0].textContent.toString().trim().split(' ')[0]
				})
			}        
		}
		return data;
	} else {
		return [];
	}
}

document.getElementById("download-statistics-html").addEventListener("click", function(event) {
	// Export as HTML
	var a = document.body.appendChild(
		document.createElement("a")
	);
	a.download = "statistici.html";
	a.href = "data:text/html," + document.getElementById("statistics-info").innerHTML;
	a.click();
}, false);

document.getElementById("download-statistics-csv").addEventListener("click", function(event) {
	// Export as CSV
	var data = retrieveStatisticsData();
	var csvRows = [];
	if (data.length) {
		for (var i = 0; i < data.length; i++) {
			var row = [data[i].name, data[i].value];
			csvRows.push(row);
		}
		console.log(csvRows);
		var downloadData = "data:attachment/csv;charset=utf-8," + csvRows.join("%0A");
		var a = document.body.appendChild(
			document.createElement("a")
		);
		a.download = 'statistici.csv';
		a.href = downloadData;
		a.click();
	}
}, false)

document.getElementById("download-statistics-json").addEventListener("click", function(event) {
	// Export as JSON
	var data = retrieveStatisticsData();
	if (data.length) {
		var downloadData = "data:text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(data));
		var a = document.createElement('a');
		a.download = 'statistici.json';
		a.href = downloadData;
		a.click();
	}
}, false)

document.getElementById("download-statistics-svg").addEventListener("click", function(event) {
	// Export as SVG (Using 'dom-to-image' Library)
	domtoimage.toSvg(document.getElementById('statistics-info'), {quality: 1}).then(function (dataUrl) {
		var a = document.createElement('a');
		a.download = 'statistici.svg';
		a.href = dataUrl;
		a.click();
	});
}, false)