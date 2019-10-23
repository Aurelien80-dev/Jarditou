var nom = document.getElementById('nom');
var prénom = document.getElementById('prenom');
var mel = document.getElementById('mel');
var formValid = document.getElementById('bouton_envoi');
var r1 =  /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]*([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]*)?$/;//regex pour les caractere
var r2 = /^[0-9]{2}\/[0-9]{2}\/[1-9]{4}$/;//regex pour la date de naissances
var r3 = /^[1-9]{1,3}$/;//regex pour le Numero de voie
var r4 =/^[0-9]{5}$/;//regex pour le code
var r5 = /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/;//regex pour le mel
var r6 =/^[0-9]{2}\.[0-9]{2}\.[0-9]{2}\.[0-9]{2}\.[0-9]{2}$/;//regex pour le N°de telephone

formValid.addEventListener('click', validation);//commande qui va afficher les message d'erreur
var missN = document.getElementById('vide');

function validation(event)//fonction qui teste le Nom
{
	if(nom.validity.valueMissing)
		
	{
		event.preventDefault();
		missN.textContent = 'champs non renseigne';
		missN.style.color = 'red';
		
	}
	else if(r1.test(nom.value)==false)
	{
		event.preventDefault();
		missN.textContent = 'Format incorrecte';
		missN.style.color = 'orange';
		
	}
	else
	{
		missN.textContent = 'Merci';
		missN.style.color = 'green';
    }
}
     formValid.addEventListener('click', identi);
     var missP= document.getElementById('2');
     function identi(event)//Fonction qui teste le Prénom
{
	if(prénom.validity.valueMissing)
	{
		event.preventDefault();
		missP.textContent = 'champs non renseigne';
		missP.style.color = 'red';
		
	}
	else if(r1.test(prénom.value)==false)
	{
		event.preventDefault();
		missP.textContent = 'Format incorrecte';
		missP.style.color = 'red';
		
	}
	else
	{
		missP.textContent = 'Merci';
		missP.style.color = 'green';
    }
}   formValid.addEventListener('click', anniversaire);
     var missD = document.getElementById('3');
	function anniversaire(event)// fonction qui test la date de naissance
{
								
	if(date.validity.valueMissing)
    {
		event.preventDefault();
		missD.textContent = 'champs non renseigne';
		missD.style.color = 'red';
									
    }
	else if(r2.test(date.value)==false)
	{
		event.preventDefault();
		missD.textContent = 'Format incorrecte';
		missD.style.color = 'red';
									
	}
	else
	{
		missD.textContent = 'Merci';
		missD.style.color = 'green';
	}
} 
   formValid.addEventListener('click', numero);
	var missNumero = document.getElementById('4');
	function numero(event)//fonction qui teste le n° de voie
{
	if(numéro.validity.valueMissing)
    {
		event.preventDefault();
		missNumero.textContent = 'champs non renseigne';
		missNumero.style.color = 'red';
									
    }
	else if(r3.test(numéro.value)==false)
	{
		event.preventDefault();
		missNumero.textContent = 'Format incorrecte';
		missNumero.style.color = 'orange';
									
	}
	else
	{
		missNumero.textContent = 'Merci';
		missNumero.style.color = 'green';
	}
	

}  
	formValid.addEventListener('click', domicile);
	var missA = document.getElementById('5');
   function domicile(event)//fonction qui test l'adresse
{
	if(adresse.validity.valueMissing)
    {
		event.preventDefault();
		missA.textContent = 'Veuillez Saisir votre adresse';
		missA.style.color = 'red';
									
    }
	
	else
	{
		missA.textContent = 'Merci';
		missA.style.color = 'green';
	}
}    
   
   formValid.addEventListener('click', Localite);
var missV = document.getElementById('6');
function   Localite(event)//fonction qui teste la ville
{
	if(ville.validity.valueMissing)
    {
		event.preventDefault();
		missV.textContent = 'champs non renseigne';
		missV.style.color = 'red';
									
    }
	else if(r1.test(ville.value)==false)
	{
		event.preventDefault();
		missV.textContent = 'Format incorrecte';
		missV.style.color = 'orange';
									
	}
	else
	{
		missV.textContent = 'Merci';
		missV.style.color = 'green';
	}
} 
   formValid.addEventListener('click', postale);
  
   var code = document.getElementById('Code')//Variable recuperere le contenu de l'input
	var missDep = document.getElementById('chiffre')
	function postale(event)//fonction qui test le code postale
	{
if (code.validity.valueMissing)
{
	event.preventDefault();
	missDep.textContent = 'champs non renseigne';
	missDep.style.color = 'red';
	
}
else if(r4.test(code.value)==false)
{
	event.preventDefault();
	missDep.textContent = 'Format incorrecte';
	missDep.style.color = 'orange';
	
}else
  {
	missDep.textContent = 'Merci';
	missDep.style.color = 'green';


  }
}	
   
   formValid.addEventListener('click', messagerie);
   var missE = document.getElementById('8');
   function messagerie(event)//fonction qui test l'Email
	{
   
   if (mel.validity.valueMissing)
	{
		event.preventDefault();
		missE.textContent = 'champs non renseigne';
		missE.style.color = 'red';
		
	}
	else if(r5.test(mel.value)==false)
	{
		event.preventDefault();
		missE.textContent = 'Format incorrecte';
		missE.style.color = 'orange';
		
	}else
	   {
		missE.textContent = 'Merci';
		missE.style.color = 'green';

	   }
}  
   formValid.addEventListener('click', appel);
	var tel = document.getElementById('tél');
	var missT = document.getElementById('9');

	function appel(event)//fonction qui test le N° de telephone
	{
		if (tel.validity.valueMissing)
		{
			event.preventDefault();
			missT.textContent = 'champs non renseigne';
			missT.style.color = 'red';
			
		}
		else if(r6.test(tel.value)==false)
		{
			event.preventDefault();
			missT.textContent = 'Format incorrecte';
			missT.style.color = 'orange';
			
		}
		else
		   {
			missT.textContent = 'Merci';
			missT.style.color = 'green';
		   }
	}
	
	formValid.addEventListener('click', verifCocher);
	var missG =document.getElementById('10');
	function verifCocher(event)//verif si Homme ou femme sont cocher trouver sur developpez.net 
	{
		if(document.getElementById('Homme').checked)
		{
			var valeur = document.getElementById('Homme').value;
		} 
		else if (document.getElementById('Femme').checked)
		{ // si ce n'est pas l'un, c'est l'autre
			var valeur = document.getElementById('Femme').value;
		}
		else 
		{	
			missG.textContent = 'Veuillez cocher Homme ou Femme';
			missG.style.color = 'red';
		}
	}
	formValid.addEventListener('click', verifMetier)
	var Metier = document.getElementById('inputGroupSelect01')
	var missM = document.getElementById('11')
	
	function verifMetier(event)//fonction qui verifie qu'un metier est bien selectionner
	{
		if(document.getElementById('inputGroupSelect01').value == '...')
		{	
			event.preventDefault();
			missM.textContent = 'Veuillez selectionner votre profession';
			missM.style.color = 'red';	
		}
		else if (document.getElementById('inputGroupSelect01').value == 'autre')
		{
			
			event.preventDefault();
			missM.textContent = 'Merci de precisez ci-dessous';
			missM.style.color = 'blue';
			
			
			
		}
		else	
		{
			missM.textContent = 'Merci';
			missM.style.color = 'green';
		}
	}
	formValid.addEventListener('click', verifSalaire)
	var euros = document.getElementById('inputGroupSelect02')
	var missS = document.getElementById('12')
	
	function verifSalaire(event)//fonction qui verifie qu'un Salaire est bien selectionner
	{
		if(document.getElementById('inputGroupSelect02').value == "")
		{
			
			missS.textContent = 'Veuillez selectionner votre pretention salariale';
			missS.style.color = 'red';
		}
		else 
		{
			missS.textContent = 'Merci';
			missS.style.color = 'green';		
		}
	}
		
		
		
	
	
	
	
		
		
		
		
	