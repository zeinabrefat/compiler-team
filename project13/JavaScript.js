function addNumbers() {
    var val1 = parseInt(document.getElementById("aa").value);
    var val2 = parseInt(document.getElementById("bb").value);
    var ansD = document.getElementById("answer");
    ansD.value = val1 + val2;
}

function phot() {
    var number = document.getElementById("number").value;
    if (number != null) {
        number = number.toUpperCase();
    }
    console.log(number);
    switch (number) {
        case '1':
            document.getElementById("di").innerHTML = '<img src="images/1.jpeg" />';
            console.log(number);
            break;
        case '2':
            document.getElementById("di").innerHTML = '<img src="images/2.jpeg" />';
            console.log(number);
            break;
        case '3':
            document.getElementById("di").innerHTML = '<img src="images/3.jpeg" />';
            console.log(number);
            break;
        case '4':
            document.getElementById("di").innerHTML = '<img src="images/4.jpeg" />';
            console.log(number);
            break;
        case '5':
            document.getElementById("di").innerHTML = '<img src="images/5.jpeg" />';
            console.log(number);
            break;
        default: 
            document.getElementById("di").innerHTML = "sorry, photo not found!";
            console.log(number);
            break;
    }
}