const sideA = prompt('Сторона А равна');
const sideB = prompt('Сторона B равна');

const squaredA = Math.pow(sideA,2);
const squaredB = Math.pow(sideB,2);

const sideC = Math.sqrt(squaredA + squaredB);
alert(sideC);
