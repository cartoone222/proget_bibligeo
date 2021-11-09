<?php
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>TP snt</title>
<link href="style.css" rel="stylesheet" type="text/css">

<!-- le html -->

<img src='https://raw.githubusercontent.com/cartoone222/proget_bibligeo/main/Untitled.png' id="logo">

<div class='menu'>
   <h1 id="h1">Bibligeo</h1>
</div>

</head>


<body>
	<div class='corpe'>

<!-- modifiable -->
    <h1>Presentation</h1>
    <p class='pspe'>
        Ce site est un projet de site web pour la SNT. J'ai choisi de créer un site pour héberger un de mes scripts Python, qui propose des outils pour faire de la géometrie dans un repère orthonormé. Cet oulti a été optimisé
		et conçu pour tourner sur numworks n0110. Une documentation est en cours d'écriture si vous souhaitez me contacter passez par github pseudo : "cartoone222". Bonne utilisation !
    </p>

    <img src="https://upload.wikimedia.org/wikipedia/commons/c/c2/Numworks_calculator.png" id="calculatrice">

    <h1>Telecharger</h1>

    <div class='table'>
    <table>
    	<thead>
    	<tr>
    		<td><p><strong>nom</strong></p></td>
    		<td><p><strong>vertion</strong></p></td>
    		<td><p><strong>date</strong></p></td>
    		<td><p></p></td>
    	</tr>
    	</thead>
    	<tr>
    		<td><p>bibligeo.py</p></td>
    		<td><p>V 0.1.0</p></td>
    		<td><p>06/11/2021</p></td>
   			<td><input type="button" value='telecharger' id='buttone_telecharger_1'></td>
   		</tr>
   	</table>
    </div>

    <?php
      session_start();
      if(file_exists('compteur_visites.txt'))
      {
        $compteur_f = fopen('compteur_visites.txt', 'r+');
        $compte = fgets($compteur_f);
      }
      else
      {
        $compteur_f = fopen('compteur_visites.txt', 'a+');
        $compte = 0;
      }
      if(!isset($_SESSION['compteur_de_visite']))
      {
        $_SESSION['compteur_de_visite'] = 'visite';
        $compte++;
        fseek($compteur_f, 0);
        fputs($compteur_f, $compte);
      }
      fclose($compteur_f);
      echo "<strong> $compte </strong> visites !!!";?>

    <h1>Code source</h1>

   	<span class='code'>

    <input type="button" value="code source du site" id='buttone_1' class='speimp'>

    <p id='text a modifier'>https://github.com/cartoone222/proget_bibligeo/blob/main/bibligeo.py</p>

   	</span>

   	<h1>Documentation</h1>

    <table>
      <tr><h2>1. La class point()</h2></tr>
      <tr><h2>2. la class triangle()</h2></tr>
    </table>

    <br>
    <br>

    <p>en cours d'écriture</p>

   </div>

<script type="text/javascript">

var btn = document.getElementById('buttone_1');
var txt = document.getElementById('text a modifier');
var lien = document.getElementById('lien');
var btn_1 = document.getElementById('buttone_telecharger_1');
let value_text = 1;

btn.addEventListener('click', updateBtn)
btn_1.addEventListener('click', updatebtn_2)

function updateBtn() {
	if (value_text === 0) {
		btn.value = 'code source du site';
 		txt.textContent = 'https://github.com/cartoone222/proget_bibligeo/blob/main/bibligeo.py';
   	value_text = 1;
	}
	else {
		btn.value = 'code source de la bibliotheque';
		txt.textContent = 'https://github.com/cartoone222/proget_bibligeo/blob/main/index.php';
  	value_text = 0;
	}
}

function updatebtn_2(){
  window.open('http://83.199.28.8/bibligeo.py', '_blank');
}

</script>

<!-- fin du modifiable -->

</body>

<!-- fin du html -->
</html>
