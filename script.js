function fileSelected() {
  var count = document.getElementById('uploaded').files.length;
  document.getElementById('filecount').innerHTML = 'Vybraných fotek: ' + count;
}

function reinsert(form)
{
	if(form.jmeno.value == "")
	{
		form.jmeno.value = "VložteVašeJméno";
	}	
}

function inserting(form)
{
	form.jmeno.value = "VložteVašeJméno";
	form.heslo.value = "";
}

function clrjmeno(form)
{
	if (form.jmeno.value == "VložteVašeJméno")
	{ 
		form.jmeno.value = "";
	}	
}

function message()
{
	alert("Byl jste úspěšně odhlášen...")
}

function dontletme(form)
{
	if (form.jmeno.value == "" || form.heslo.value == "")
	{
			alert("Musíte vyplnit přihlašovací údaje...")
			return false;
	}
}

function dontsend()
{
  var a = document.getElementById('uploaded');
  if (a.value == "")
  {
    alert("Nejprve vyberte fotografie...")
    return false;
  }
}

function dontinsert()
{
  var a = document.getElementById('titl');
  var b = document.getElementById('akt');
  if (a.value != "" && b.value != "")
  {
    return true;
  }else{
    alert("Zadejte titulek i aktualitu...")
    return false;  
  }
}