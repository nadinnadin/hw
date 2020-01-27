const age = prompt('Сколько вам лет?');
const test = prompt('Было ли в этом году др?(Да-1; Нет-0)');

if(test == 0){
    let year = 2019 - age;  
    alert(year);
}

if(test == 1){
    let year = 2020 - age;  
    alert(year);s
}

