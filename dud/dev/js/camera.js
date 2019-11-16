navigator.getUserMedia = (
	navigator.getUserMedia ||
	navigator.webkitGetUserMedia ||
	navigator.mozGetUserMedia ||
	navigator.msGetUserMedia
);

var video;
var webcamStream;

function startCam() {
	if (navigator.getUserMedia) {
		navigator.getUserMedia (
			{
				video = true,
				audio = false
			},

			function(mediaStream) {
				video = document.querySelector('video');
				video.src = window.URL.createObjectURL(mediaStream);
				webcamStream = mediaStream;
			},

			function(err) {
				console.log("This shit broke: " + err);
			}
		);
	}
	else {
		console.log("getUserMedia not supported");
	}

}
