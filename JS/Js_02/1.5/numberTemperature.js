const test = prompt(`Градус Цельсия => Градус Фаренгейта(1)
Градус Фаренгейта => Градус Цельсия(0)`);

if(test == 1){
    const cels = prompt('Введите температуру в Градус Цельсия');
    const fareng = cels*(9/5) + 32;
    alert(fareng + ' F');
}

if(test == 0){
    const fareng = prompt('Введите температуру в Градус Цельсия');
    const cels = (fareng - 32)*5/9; 
    alert(cels + ' C');
}