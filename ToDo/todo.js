document.addEventListener("DOMContentLoaded", () => {
    const todoList = document.querySelector("#todoList");
    const todoForm = document.querySelector("#todoForm");
    const todoSearch = document.querySelector("#todoSearch");
    const todoTextarea = todoForm.querySelector('#todoMessage');
    const list = document.querySelector('#list');

    function addTask(text) {
        list.innerHTML += "<h1>" + todoTextarea.value + "</h1>";
        
    }

    todoForm.addEventListener("submit", e => {
        e.preventDefault();

        if (todoTextarea.value !== "") {
            addTask(todoTextarea.value);
            todoTextarea.value = "";
        }
    });
});
