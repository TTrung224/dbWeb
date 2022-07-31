document.querySelector("#todo-form").addEventListener("mousemove",function(){
    if(document.querySelector("#todo-form #category").value == "add new"){
        document.querySelector(".create-cat-form").classList.remove("non-display");
        document.querySelector("#new-task-submit").disabled = true;
    } else {
        document.querySelector("#new-task-submit").disabled = false;
        document.querySelector(".create-cat-form").classList.add("non-display");
    }
})

const btns = document.querySelectorAll(".edit[id^=edit]")

btns.forEach(btn => {
    btn.addEventListener('click', event => {
        var id = event.target.id.slice(4);
        var todo = "#task-edit-form #todo-" + id;
        var save = ".task #task-edit-form #save-edit-" + id;
        document.querySelector(todo).removeAttribute('readonly');
        document.querySelector(todo).classList.add('editable');
        document.querySelector(save).classList.remove("non-display");
    });
});
