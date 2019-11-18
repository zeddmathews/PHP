navigator.getUserMedia = ( 
	navigator.getUserMedia ||
	navigator.webkitGetUserMedia ||
	navigator.mozGetUserMedia ||
	navigator.msGetUserMedia);

var video;
var webcamStream;

function startCam() {
	if (navigator.getUserMedia) {
		navigator.getUserMedia (
			{
				video: true,
				audio: false
			},

			function(localMediaStream) {
				video = document.querySelector('video');
				video.src = window.URL.createObjectURL(localMediaStream);
				webcamStream = localMediaStream;
			},

			function(err) {
				console.log("The following error occured: " + err);
			}
		);
	}
	else {
	console.log("getUserMedia not supported");
	}  
}

function stopCam() {
	webcamStream.stop();
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