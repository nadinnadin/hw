const check = prompt(`Сделал дз?
да - 1
нет - 0`);

if(check == 1){
    alert("Уважуха");
}
else if(check == 0){
    const question = prompt(`Уже начал?(Если нет, то когда начнешь)`);
    if(question.indexOf("потом") !== -1){
        alert('Очень плохо');
    } 
    else{
        alert('Удачки с дз');
    }
}