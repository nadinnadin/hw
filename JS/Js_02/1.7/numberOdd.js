let number = Number(prompt("Введите число"))
if (isNaN(number)) {
    alert("Не является числом" )
}
else if (number % 2 == 0) {
    alert("Является четным числом" )
}
else {
    alert("Является нечетным числом" )
}