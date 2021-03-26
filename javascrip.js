function nama(){
    var text;
    person = prompt("Masukkan nama anda:");
    var sekarang = new Date();
    var jam = sekarang.getHours();
    if(person == ""){
        text = "Selamat Datang Anonymous"
    }
    else if (person != null) {
        if (jam >= 0 && jam < 12) {
            text = "Selamat pagi, " + person;
        }
        if (jam >= 12 && jam < 15) {
            text = "Selamat siang, " + person;
        }
        if (jam >= 15 && jam < 18) {
            text = "Selamat sore, " + person;
        }
        if (jam >=  18) {
            text = "Selamat malam, " + person;
        }
    }
    else {
        text = "Selamat Datang Anonymous";
    }
    document.getElementById("name").innerHTML = text;
}
function silinder(){
    let jaris = document.getElementById('jari-jaris').value
    let tinggis = document.getElementById('tinggis').value
    var luass = 2 * Math.PI * Math.pow(jaris, 2) + 2 * Math.PI * jaris * tinggis;
    var volumes = Math.PI * Math.pow(jaris, 2) * tinggis;
    if (jaris == "" || tinggis == "") {
        alert("Harap mengisi kolom silinder dengan lengkap");
    } 
    else {
        if (isNaN(jaris) || isNaN(tinggis)) {
            alert("Masukkan harus angka");
            document.getElementById('jari-jaris').value = '';
            document.getElementById('tinggis').value = '';
        } 
        else {
            document.getElementById('results0').innerHTML= "Hasil perhitungan:";
            document.getElementById('results1').innerHTML= "Luas permukaan = " + luass.toFixed(2) + " m" + "2".sup();
            document.getElementById('results2').innerHTML = "Volume = "+ volumes.toFixed(2) + " m" + "3".sup();
        }
    }
}
function kerucut(){
    let jarik = document.getElementById('jari-jarik').value
    let tinggik = document.getElementById('tinggik').value
    let garisk = document.getElementById('garisk').value
    var luask = Math.PI * Math.pow(jarik, 2) + Math.PI * jarik * garisk;
    var volumek = (1 / 3) * Math.PI * Math.pow(jarik, 2) * tinggik;
    if (jarik == "" || tinggik == "" || garisk == "") {
        alert("Harap mengisi kolom kerucut dengan lengkap");
    } 
    else {
        if (isNaN(jarik) || isNaN(tinggik) || isNaN(garisk)) {
            alert("Masukkan harus angka");
            document.getElementById('jari-jarik').value = '';
            document.getElementById('garisk').value = '';
            document.getElementById('tinggik').value = '';
        } 
        else {
            document.getElementById('resultk0').innerHTML= "Hasil perhitungan:";
            document.getElementById('resultk1').innerHTML = "Luas permukaan = " + luask.toFixed(2) + " m" + "2".sup();
            document.getElementById('resultk2').innerHTML = "Volume = " + volumek.toFixed(2) + " m" + "3".sup();
        }
    }
}
function bola(){
    let jarib = document.getElementById('jari-jarib').value
    var luasb = 4 * Math.PI * Math.pow(jarib, 2);
    var volumeb = (4 / 3) * Math.PI * Math.pow(jarib, 3);
    if (jarib == "") {
        alert("Harap mengisi kolom bola dengan lengkap");
    } 
    else {
        if (isNaN(jarib)) {
            alert("Masukkan harus angka");
            document.getElementById('jari-jarib').value = "";
        } 
        else {
            document.getElementById('resultb0').innerHTML= "Hasil perhitungan:";    
            document.getElementById('resultb1').innerHTML = "Luas permukaan = " + luasb.toFixed(2) + " m" + "2".sup();
            document.getElementById('resultb2').innerHTML =  "Volume = " + volumeb.toFixed(2) + " m" + "3".sup();
        }
    }
}
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}