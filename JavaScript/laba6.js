function pow(x, n) {
    if (x === '' || n === '') return;
    let result = 1;
    for (let i = 0; i < n; i++) {
      result *= x;
    }
    document.getElementById('result_pow').innerHTML = result;
}

function gcd(a, b) {
    if (a === '' || b === '') return;
    while (b !== 0) {
        let temp = a % b;
        a = b;
        b = temp;
    }
    document.getElementById('result_nod').innerHTML = a;
}

function minDigit(x) {
    if (x === '') return;
    let num = x.toString().split('');
    num = num.map(Number);
    let min = 100;
    for (let i = 0; i <= num.length; i++){
        if (num[i] < min){
            min = num[i];
        }
    }
    document.getElementById('result_min').innerHTML = min;
}
// Pluralization
function pluralizeRecords(n) {
    if (n === '') return;

    let recordsWord;
    let recordsWord2;
    let recordsWord3;
    if (n % 10 === 1 && n % 100 !== 11) {
        recordsWord = "запись";
        recordsWord2 = "была";
        recordsWord3 = "найдена";
    } else if (
        (n % 10 === 2 && n % 100 !== 12) ||
        (n % 10 === 3 && n % 100 !== 13) ||
        (n % 10 === 4 && n % 100 !== 14)
    ) {
        recordsWord = "записи";
        recordsWord2 = "были";
        recordsWord3 = "найдены";
    } else {
        recordsWord = "записей";
        recordsWord2 = "было";
        recordsWord3 = "найдено";
    }
    document.getElementById('result_plur').innerHTML = `В результате выполнения запроса ${recordsWord2} ${recordsWord3} ${n} ${recordsWord}`;
}

// Числа Фибоначчи
function fibb(n) {
    if (n === '') return;
    if (n <= 1) {
        document.getElementById('result_fibb').innerHTML = n;
        return;
    }

    let a = 0;
    let b = 1;

    for (let i = 2; i <= n; i++) {
        let temp = a + b;
        a = b;
        b = temp;
    }
    document.getElementById('result_fibb').innerHTML = b;

}