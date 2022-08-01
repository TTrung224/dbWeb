document.querySelector("#deadline-form").addEventListener("mousemove",function(){
    if(document.querySelector("#deadline-form #category").value == "..add new"){
        document.querySelector(".create-cat-form").classList.remove("non-display");
        document.querySelector("#new-deadline-submit").disabled = true;
    } else {
        document.querySelector("#new-deadline-submit").disabled = false;
        document.querySelector(".create-cat-form").classList.add("non-display");
    }
})

