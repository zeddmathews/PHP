var webcamStream;

function startCam() {
	if (navigator.mediaDevices.getUserMedia) {
		navigator.mediaDevices.getUserMedia ({video: true,audio: false}
		).then( function(localMediaStream) {
			var video = document.querySelector("#video");
			video.srcObject = localMediaStream;
		}).catch( function(err) {
				console.log("The following error occured: " + err);
			}
		);
	}
	else {
	console.log("getUserMedia not supported");
	}
}

// // window.addEventListener("load", startCam);

// $.ajax("urlthaticameupwith.com", {info: thoy}).then((res) => {

// }).catch ((err) => {

// }) USEFUL STUFF FOR LATER

// var req = new XMLHttpRequest();
// req.addEventListener("load", () => {
// 	console.log(req.responseText);
// })
// req.open("GET", "urlthatilike.com");
// req.setRequestHeader("Content-Type", "application/JSON");

// req.send("{info: stuff}");

function stopCam() {
	video.srcObject = null;
}

var canvas;
var ctx;

function init() {
	canvas = document.getElementById("myCanvas");
	ctx = canvas.getContext('2d');
}

function takeSnap() {
	ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
}

function saveSnap() {
	let data = 'data='+document.getElementById("img_up").value;
	let xhr = new XMLHttpRequest();
	xhr.open('POST', '../upload_image.php',true);
	xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhr.send(data);
}