const credentials = {
    login: 'admin',
    password: 'qwerty',
};

let pwd = "";
let log = "";

const login = document.querySelector("#exampleInputEmail1");
const password = document.querySelector("#exampleInputPassword1");

password.addEventListener("input", event => {
    pwd = event.target.value;
});
login.addEventListener("input", event => {
    log = event.target.value;
});
    

    
const button = document.querySelector(".btn-primary");

button.addEventListener("click", event => {
    event.preventDefault();
    console.log('Event', event);
    if ((log === credentials.login) && (pwd === credentials.password)) {
        event.target.style.backgroundColor = "green";
        event.target.innerText = "Вау, ты знаешь пароль";
    } else {
        event.target.style.backgroundColor = "red";
        event.target.textContent = "Ошибочка";
    }
});

