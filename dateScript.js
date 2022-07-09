setInterval(function(){
    // document.querySelector(".date").innerHTML = new Date(Date.now()).toUTCString();
    var zone = Intl.DateTimeFormat().resolvedOptions().timeZone;
    document.querySelector(".date").innerHTML = new Date(Date.now()).toLocaleString({ timeZone: zone})
}, 1000);