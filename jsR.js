function fillimi()
{
    document.getElementById("nowButton").addEventListener(
            "click", printToday, false);
}
function printToday()
{
    var today = new Date();
    window.alert("Date and Time: " + today.toString());
}
window.addEventListener("load", fillimi, false);