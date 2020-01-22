const credentials = {
    login: 'admin',
    password: 'qwerty',
};

let pwd = "";
let log = "";

const login = document.getElementById("exampleInputEmail1");
const password = document.getElementById("exampleInputPassword1");

password.addEventListener("input", event => {
    pwd = event.target.value;
});
login.addEventListener("input", event => {
    log = event.target.value;
});
    
    
const button = document.querySelector(".btn-primary");

button.addEventListener("click", event => {
    event.preventDefault();
    const div = document.querySelector("#div");
    if ((log === credentials.login) && (pwd === credentials.password)) {
        div.style.backgroundColor = "green";
        div.textContent = "Вау, ты знаешь пароль";
    } else {
        div.style.backgroundColor = "red";
        div.textContent = "Ошибочка";
    }
});
