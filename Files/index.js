
const xhr = new XMLHttpRequest();
xhr.open("GET","jobinfo.php",true);
xhr.onload = function(){
let jobdisplay = document.querySelector(".job-display");
let html = "";
html += this.response;
jobdisplay.innerHTML = html;
}
xhr.send();
