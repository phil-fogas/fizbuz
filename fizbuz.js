
const liste = [1, 2, 3, 5, 15, 20, 30, 45, 10, 25, 90, 9, 7, 14, 22];
//fizzbuz en une function round
function fibuzd(liste) {
  liste.forEach(a => {
    if (a / 3 == Math.round(a / 3) && a / 5 == Math.round(a / 5)) {
      document.write('Fizzbuzz<br>');
    } else if (a / 3 == Math.round(a / 3)) {
      document.write('Fizz<br>');
    } else if (a / 5 == Math.round(a / 5)) {
      document.write('Buz<br>');
    } else {
      document.write(a + '<br>');
    }

  })
};
document.write('<br>version fizzbuz modulo <br>');
fibuzd(liste);


//fizzbuz en une function modulo
function fibuzm(liste) {
  liste.forEach(a => {
    if (a % 3 == 0 && a % 5 ==0) {
      document.write('Fizzbuzz<br>');
    } else if (a % 3 == 0) {
      document.write('Fizz<br>');
    } else if (a % 5 == 0) {
      document.write('Buz<br>');
    } else {
      document.write(a + '<br>');
    }

  })
};
document.write('<br>version fizzbuz modulo <br>');
fibuzm(liste);

//fizzbuz en une function round  ES5
function fibuz5(liste) {
  liste.forEach(function (a) {
    if (a / 3 == Math.round(a / 3) && a / 5 == Math.round(a / 5)) {
      document.write('Fizzbuzz<br>');
    } else if (a / 3 == Math.round(a / 3)) {
      document.write('Fizz<br>');
    } else if (a / 5 == Math.round(a / 5)) {
      document.write('Buz<br>');
    } else {
      document.write(a + '<br>');
    }
  });
}
document.write('<br>version fizzbuf5<br>');
fibuz5(liste);


//fizzbuz en une function round  ES6
function fibu6(liste) {
  for (const [index, a] of liste.entries()) {
    if (a / 3 == Math.round(a / 3) && a / 5 == Math.round(a / 5)) {
      document.write('Fizzbuzz<br>');
    } else if (a / 3 == Math.round(a / 3)) {
      document.write('Fizz<br>');
    } else if (a / 5 == Math.round(a / 5)) {
      document.write('Buz<br>');
    } else {
      document.write(a + '<br>');
    }
  };
}
document.write('<br>version fizzbuf6<br>');
fibu6(liste);

