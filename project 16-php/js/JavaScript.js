function arr() {

    alert("Are you sure that the information is correct?");
    alert("Booking confirmed: Please come on time. If there is a" +
        "delay in check-in, please call us or the reservation will be cancelled.");
}

function ti() {
    var round = document.getElementById("roundd").value;
    var adu = document.getElementById("adult").value;
    var children = document.getElementById("child").value;
    var type = document.getElementById("typee").value;
    var from = document.getElementById("fro").value;
    var to = document.getElementById("too").value;
    var dat = document.getElementById("date").value;
    /*„‘ —«÷Ï Ì‘ €· */
    document.getElementById("tick").innerHTML = "Round trip is " + round + "." + "<br>";
    document.getElementById("tick").innerHTML = "The number of adlts is " + adu + "." + "<br>";
    document.getElementById("tick").innerHTML = "The number of children is " + children + "." + "<br>";
    document.getElementById("tick").innerHTML = "The type trip is " + type + "." + "<br>";
    document.getElementById("tick").innerHTML = "from " + from + " to " + to + "<br>";
    document.getElementById("tick").innerHTML = "The date is " + dat + "." + "<br>";

        
    
}