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
    switch (number) {
        case '1':
            document.getElementById("di").innerHTML = '<img src="images/1.jpeg" />';
            break;
        case '2':
            document.getElementById("di").innerHTML = '<img src="images/2.jpeg" />';
            break;
        case '3':
            document.getElementById("di").innerHTML = '<img src="images/3.jpeg" />';
            break;
        case '4':
            document.getElementById("di").innerHTML = '<img src="images/4.jpeg" />';
            break;
        case '5':
            document.getElementById("di").innerHTML = '<img src="images/5.jpeg" />';
            break;
        default: 
            document.getElementById("di").innerHTML = "sorry, photo not found!";
            break;
    }
}