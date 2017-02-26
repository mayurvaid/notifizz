
if (document.getElementById('gw_placeholder')) {
	document.body.removeChild(document.getElementById('gw_placeholder'));
}
var gw_modal = document.getElementById('gw_modal');

var gw_img = document.getElementsByTagName("img");
for (var i = 0; i < gw_img.length; i++) {
	if (gw_img[i].getAttribute("alt")
			&& !gw_img[i].getAttribute("gw_originalWidth")) {
		gw_img[i].setAttribute("gw_originalWidth", gw_img[i].naturalWidth);
		gw_img[i].setAttribute("gw_displayWidth", gw_img[i].clientWidth);
	}
}
var bodyhtml = document.body.innerHTML;

function gw_iframeLoaded() {
	var win = document.getElementById('gw_iframe').contentWindow;
	win.postMessage(bodyhtml, "*");

}


window.onclick = function(event) {
	if (event.target == gw_modal) {
		gw_modal.style.display = "none";
	}
}
// Put the object into storage
var html = "<style> .gw_modal { display: none; position: fixed; z-index: 1; padding-top: 100px; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.4); z-index:100000; } .gw_modal-content { position: relative; background-color: #fefefe; margin: auto; padding: 0; border: 1px solid #888; width: 80%; height: 80%; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19); -webkit-animation-name: animatetop; -webkit-animation-duration: 0.4s; animation-name: animatetop; animation-duration: 0.4s } @-webkit-keyframes animatetop { from {top:-300px; opacity:0} to {top:0; opacity:1} } @keyframes animatetop { from {top:-300px; opacity:0} to {top:0; opacity:1} } .gw_close { color: white; float: right; font-size: 28px; font-weight: bold; } .gw_close:hover, .gw_close:focus { color: #000; text-decoration: none; cursor: pointer; } .gw_modal-body {padding: 2px 16px;} </style> <div id='gw_modal' class='gw_modal'> <div class='gw_modal-content'> <iframe id='gw_iframe' src='//localhost/notifiz/plugin/iframe.php' width='100%' height='100%' onload='gw_iframeLoaded(this)'></iframe> </div> </div>";
var elem = document.createElement("div");
elem.id = 'gw_placeholder';
elem.innerHTML = html;
document.body.insertBefore(elem, document.body.childNodes[0]);

gw_modal = document.getElementById('gw_modal');
gw_modal.style.display = "block";
