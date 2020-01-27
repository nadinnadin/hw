var age = +prompt("Сколько вам лет?","");
if(age < 0) alert("Такого не бува");
else if (age < 18) alert("школьник");
else if ((age > 18) && (age < 30)) alert("молодеж");
else if ((age > 30) && (age < 45)) alert("зрелость");
else if ((age > 45) && (age < 60)) alert("закат");
else if (age > 60) alert("как пенсия?");
else  alert("то ли киборг, то ли ошибка"); 
