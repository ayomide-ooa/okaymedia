aler("You are about to enter this page, and this means u agree with the Terms & Condition");
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function openNav() {
    document.getElementById("sidebar")
    .style.width="300px";
}      
function closeNav() {
document.getElementById("sidebar")
    .style.width = "0";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/**
function() {
document.getElementById("logon")
    .style.height = "0";
alert("Login Successfully");
}
   **/
function openlogin() {
document.getElementById("logon")
    .style.height = "190px";
}
function closelogin() {
document.getElementById("logon")
    .style.height = "0";
}
function opensign() {
document.getElementById("sign")
    .style.height = "70%";
}
function closesign() {
document.getElementById("sign")
    .style.height = "0";
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/**
var myNodelist = document.getElementsByTagName("LI");

var i;
for(1=0; 1 < myNodelist.length; i++){
var span=document.createElement("SPAN");
    
 var txt=document.createTextNode("\u00D7");
    
span.className = "close";
    span.appendChild(txt);
    myNodelist[i].appendChild(span);
}

var close = document.getElementsByClassName("close");
var i;

for(i=0; i < close.lenght; i++){
close[i].onclick = function(){
var div = this.parentElement;
div.style.display = "none";
}
}

var list=document.querySelector('ul');
list.addEventListener('click',function(ev) {
if (ev.target.tagName === 'LI') {
ev.target.classList.togle('checked');
}
}, false);
            )
            **/
