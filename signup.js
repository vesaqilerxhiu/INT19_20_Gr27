//percaktojme nese nje fushe eshte e zbrazet
function isBlank(inputField)
{
	if(inputField.value=="")
	{
		return true;
	}
	return false;
}
//largojme error mesazhat nese nuk ekzison me nje error i tille
function makeClean(element)
{
	element.classList.remove("error");
}
//presim deri sa te ngarkohet e tere faqja e me pas ekzekutohen js skriptat
window.addEventListener("load",function() {

	//funksioni per elementet me selektoret id me emrin hilightable
	var hilightableInputs = document.querySelectorAll(".hilightable");
	for (var i=0; i < hilightableInputs.length; i++)
	{
	hilightableInputs[i].addEventListener("focus", function(e) {
		e.target.classList.toggle("highlight");
	});
	hilightableInputs[i].addEventListener("blur", function(e) {
		e.target.classList.toggle("highlight");
	});
}
//shtojme pergjuesit per elementet me selektoret klase required
    var requiredInputs = document.querySelectorAll(".required");
	for (var i=0; i < requiredInputs.length; i++)
	{
		requiredInputs[i].addEventListener("change", function(e) {
			makeClean(e.target);
		});
		}
//para se te dergojme formen(submit), kontrollojme nese kemi fusha te zbrazeta
    var mainForm = document.getElementById("mainForm");
    mainForm.addEventListener("submit", function(e){
    	var requiredInputs = document.querySelectorAll(".required");
    	for(var i=0; i < requiredInputs.length; i++)
    	{
    		if(isBlank(requiredInputs[i]))
    		{
    			e.preventDefault();
    			requiredInputs[i].classList.add("error");

    		}
    		else
    		{
    			makeClean(requiredInputs[i]);
    		}
    	}
    });
});