function checkBox(x, y) {
    // checkbox
    var checkBox = document.getElementById(x);
    // Output
    var displayItem = document.getElementById(y);

    if (checkBox.checked == true) {
        displayItem.style.display = "block";
    } else {
        displayItem.style.display = "none";
    }
}