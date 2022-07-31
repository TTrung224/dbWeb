document.querySelector("#todo-form").addEventListener("mousemove",function(){
    if(document.querySelector("#todo-form #category").value == "add new"){
        document.querySelector(".create-cat-form").classList.remove("non-display");
        document.querySelector("#new-task-submit").disabled = true;
    } else {
        document.querySelector("#new-task-submit").disabled = false;
        document.querySelector(".create-cat-form").classList.add("non-display");
    }
})
