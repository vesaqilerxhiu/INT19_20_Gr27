function fillimi()
{
    document.getElementById("nowButton").addEventListener(
            "click", printToday, false);
}

function printToday()
{
    var today = new Date();
    var clock = today.getHours();
    if(clock<12 && clock>5){ 
    window.alert("Good morning! Date and Time: " + today.toString());
	}
	else{
    window.alert("Good afternoon! Date and Time: " + today.toString());
	}

}

window.addEventListener("load", fillimi, false);