const Russia = {
    outerwear : [40,42,44,46,48,50,52,54],
    Lingerie : [42,44,46,48,50,52,54,56],
    socks : [21,23,25,27]
}
const USA = {
    outerwear : [6,8,10,12,14,16,18,20],
    Lingerie : [8,10,12,14,16,18,20,22],
    socks : [8,9,10,11]
}
let check = prompt(`Выберите систему перевода пожалуйста
Россия - США (введите 1)
США - Россия (введите 0)`);
let typeOFclothes = prompt(`Верхняя одежда, платья и брюки (введите 0)
Женское белье (введите 1)
Чулки и носки (введите 2)`);
let size = +prompt('Введите размер')
if((check == 1) && (typeOFclothes == 0)){
    let presence = Russia.outerwear.indexOf(size);
    if (presence != -1){
        alert(USA.outerwear[presence])
    }else alert('Такого размера нет')
}
 else if((check == 1) && (typeOFclothes == 1)){
    let presence = Russia.Lingerie.indexOf(size);
    if (presence != -1){
        alert(USA.Lingerie[presence])
    }else alert('Такого размера нет')
}
else if((check == 1) && (typeOFclothes == 2)){
    let presence = Russia.socks.indexOf(size);
    if (presence != -1){
        alert(USA.socks[presence])
    }else alert('Такого размера нет')
}
else if((check == 0) && (typeOFclothes == 0)){
    let presence = USA.outerwear.indexOf(size);
    if (presence != -1){
        alert(Russia.outerwear[presence])
    }else alert('Такого размера нет')
}
else if((check == 0) && (typeOFclothes == 1)){
    let presence = USA.Lingerie.indexOf(size);
    if (presence != -1){
        alert(Russia.Lingerie[presence])
    }else alert('Такого размера нет')
}
else if((check == 0) && (typeOFclothes == 2)){
    let presence = USA.socks.indexOf(size);
    if (presence != -1){
        alert(Russia.socks[presence])
    }else alert('Такого размера нет')
}
else alert('Такого размера нет')

