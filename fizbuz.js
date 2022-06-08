
const liste = [1, 2, 3, 5, 15, 20, 30, 45, 10, 25, 90, 9, 7, 14, 22];


//fizzbuz en une function round
function fibuz(liste)
{
  for (let a in liste ){
    if (a / 3 == Math.round(a / 3) && a / 5 == Math.round(a / 5)) {
      console.log ('Fizzbuzz');
    } else if (a / 3 == Math.round(a / 3)) {
      console.log ('Fizz');
    } else if (a / 5 == Math.round(a / 5)) {
      console.log ('Buz');
    } else {
      console.log (a +'');
    }
  };
}
console.log ('version fizzbuz round ');
fibuz(liste);


//fizzbuz en une function round  ES5
function fibuz5(liste)
{
  liste.forEach(function(a) {
    if (a / 3 == Math.round(a / 3) && a / 5 == Math.round(a / 5)) {
      console.log ('Fizzbuzz');
    } else if (a / 3 == Math.round(a / 3)) {
      console.log ('Fizz');
    } else if (a / 5 == Math.round(a / 5)) {
      console.log ('Buz');
    } else {
      console.log (a +'');
    }
  });
}
console.log ('version fizzbuf5');
fibuz5(liste);


//fizzbuz en une function round  ES6
function fibu6(liste)
{
  for (const [index,a] of liste.entries() ) {
    if (a / 3 == Math.round(a / 3) && a / 5 == Math.round(a / 5)) {
      console.log ('Fizzbuzz');
    } else if (a / 3 == Math.round(a / 3)) {
      console.log ('Fizz');
    } else if (a / 5 == Math.round(a / 5)) {
      console.log ('Buz');
    } else {
      console.log (a +'');
    }
  };
}
console.log ('version fizzbuf6');
fibu6(liste);

