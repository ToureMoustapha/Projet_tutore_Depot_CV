// JavaScript Document
function valider(){
document.getElementById('login').style.backgroundColor="white";
document.getElementById('mdp').style.backgroundColor="white";
if (document.getElementById('login').value=='')
   {
    document.getElementById('login').style.backgroundColor="red";
	return false;
   }
else
    if (document.getElementById('mdp').value=='')
	    {
         document.getElementById('login').style.backgroundColor="red";
		 return false;
		}
return true;
}