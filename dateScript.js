setInterval(function(){
    document.querySelector(".time").innerHTML = new Date(Date.now()).toUTCString();
}, 1000);

if(localStorage.getItem("lastVisit") == false){
    document.querySelector(".last-visit").innerHTML = "This is your first-time visit to this page";
} else{
    var lastVisit = localStorage.getItem("lastVisit");
    document.querySelector(".last-visit").innerHTML = new Date(parseInt(lastVisit)).toUTCString();
}