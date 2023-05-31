const element = document.getElementById("tijdstippen");

const checkValue = element.options[element.selectedIndex].value;

const checkText = element.options[element.selectedIndex].text;

element.addEventListener("change", (e) => {
    const value = e.target.value;
    const text = element.options[element.selectedIndex].text;

    switch (value) {
        case '1':
            document.getElementById("pick").innerHTML = "Pauze: 10:30 tot 10:45<br>Maaltijdpauze: 13:00 tot 13:30<br>Pauze: 15:00 tot 15:15";
            break;
        case '2':
            document.getElementById("pick").innerHTML = "Maaltijdpauze: 13:30 tot 14:00<br> Pauze: 16:00u tot 16:15<br>Pauze: 18:00 tot 18:15";
            break;
        case '3':
            document.getElementById("pick").innerHTML = "Maaltijdpauze: 12:00 tot 12:30<br> Pauze: 14:00u tot 14:15<br>Pauze: 16:00 tot 16:15"
            break;

        default:
            document.getElementById("pick").innerHTML = "";
            break;
    }
});