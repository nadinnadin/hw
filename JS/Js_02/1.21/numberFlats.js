const flat = prompt('Номер квартиры')

const numberOFFlats = 4;
const numberOFfloors = 9;
const flatsINporch = numberOFFlats * numberOFfloors;
if(flat <= 0){
    alert('Такой квартиры не существует');
}
else if(isNaN(flat)){
    alert('Не является номером квартиры');
}
else{
let porch = Math.ceil(flat/flatsINporch)
let floor = Math.ceil((flat - (porch -1)*flatsINporch) / numberOFFlats)

alert(`${porch}  подъезд 
${floor}  этаж`);
}