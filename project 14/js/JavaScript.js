function addNumbers() {
    var val1 = parseInt(document.getElementById("num1").value);
    var val2 = parseInt(document.getElementById("num2").value);
    var ansD = document.getElementById("result");
    if (val1 == 0 || val2 == 0) {
        ansD.value  = "Type A Number";
    }
    else if (isNaN(val1) || isNaN(val2)) {
        ansD.value = "Sorry Not A Number";
        alert('Focus What You Write');
    }
    else {
        ansD.value = "The Plus Of Them Is: " + (val1 + val2);
    }  
}
function pro() {
    p = prompt("Say Some Thing");
    document.getElementById("thing").innerText = p;
}
function date() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d;
}
function leng() {
    var i = ind.value.length;
    document.getElementById("index").innerHTML = i;
}
function makarr(ind) {
    var users = new Array(),
        ones = ["First", "Second", "Third", "Fourth", "Fifth", "Sixth", "Seventh", "Eighth", "Ninth", "Tenth"];
    for (let index = 0; index < ind; index++) {
        users[index] = prompt('type element number ' + (index + 1));
    }
    for (let index = 0; index < ind; index++) {
        document.getElementById("user").innerHTML += ones[index] + " name: " + users[index] + "<br>";
    }
}
function arr() {
    var num = document.getElementById("inputnum").value;

    if (isNaN(num)||num<=0||num>19) {
        alert("type valid namber");
        alert("Good");
    } else {
        var z = ["First", "Second", "Third", "Fourth", "Fifth", "Sixth", "Seventh", "Eighth", "Ninth",
                 "Tenth", "Eleventh", "Twelfth", "Thirteenth", "Fourteenth", "Fifteenth", "Sixteenth",
                 "Seventeenth", "Eighteenth", "Nineteenth"];

        var i;
        for (i = 0; i < num; i++) {
            arr[i] = prompt("Type Elment " + (i + 1) + ":");
        } for (i = 0; i < num; i++) {
            document.getElementById("out").innerHTML += z[i] + " Name: " + arr[i] +"<br>";
        }
    }
}

