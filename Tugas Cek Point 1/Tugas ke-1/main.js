console.log("Hello ini console.log")

var contohstring = "Ini adalah tipe data string";
console.log(contohstring)

var contohstring = 12345;
console.log(contohstring)

var contohreal = 12.12345;
console.log(contohreal)

var a = 20 > 5;
if (a == true) {
    console.log("benar")
}else{
    console.log("salah")
}

var contoharray = [1,2,3,4,5, "Sapi", "Ayam", "Kerbau"];
console.log(contoharray)

var buah = prompt ("Buah apa yang memiliki bau menyengat?", "Jawab");
if (buah == "durian") {
    document.write ("<h2>Jawaban benar</h2>");
}else{
    document.write ("<h2Jawaban salah</h2>");
}

var b = 20 < 5;
if (b != true) {
    document.write ("<h2>Benar</h2>");
}else{
    document.write ("<h2>Salah</h2>");
}

var pertanyaan = prompt ("Buah apa yang berduri?");
if (pertanyaan != "durian") {
    document.write ("<h2>Jawaban benar</h2>");
}else{
    document.write ("<h2>Jawaban salah</h2>");
}

// var angka = 21 <= 21;
// document.write("angka");

// var angka1 = 4 === "4"; //---> false
// var angka2 = 4 === 4; //----> true
// console.log(angka1);
// console.log(angka2);

var c = 20;
var d = 5;

var hasil;
var hasil1 = c > d; // true
var hasil2 = c < d; // false

hasil = hasil1 || hasil2;
document.write(` ${hasil1} || ${hasil2} = ${hasil} <br> `);