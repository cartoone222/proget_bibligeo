<?php
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>TP snt</title>

<!-- le css -->	

<style>

body {background-color: #fffcd2;}

.menu{background-color: #408cff;
      margin: -10px;
      border: 1rem solid #408cff;}

.menu h1{
      color: #ffffff;}

.code p{
	border: solid;
	border-radius: 30px;
	padding: 10px;
	background-color: white;
	font: 1em "Consolas";
}

input{
	margin:	10px;
}

h1{
	font: 2em "arial black";
}

p{
	font: 1em "arial";
	margin:	10px;
}

.table{
	background-color: black;

	border-collapse: collapse;
	min-width: 400px;
	width: auto;
	box-shadow: 0 5px 25px rgba(0,0,0);
	cursor: pointer;
	margin: 50px auto;
	border: 2px solid black;
	margin-right: 41.6%;
}

tr{
	background-color: white;
}

thead tr{
	background-color: gray;
	color: white;
	text-align: left;
}

th, td{
	padding: 15px 20px;
}

tbody tr, td, th{
	border: 1px solid #ddd;
}

tbody tr:nth-child(even){
	background-color: #f3f3f3;
}

</style>

<!-- fin du	css -->	

<!-- le html -->

<div class='menu'>
   <h1 id="h1">bibligeo</h1>
</div>
</head>
<body>

<!-- modifiable -->
    <h1>bibligeo</h1>
    <p>
        Ce site est un proger de sit web pour la snt j'ai choisis de creer un sit pour heberger un de mes scripte python qui propose des oultis pour fair de la geometris dans un reper hortonormer
    </p>

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

    <h1>code source</h1>

   	<span class='code'>

    <input type="button" value="code source du site" id='buttone_1'>

    <p id='text a modifier'>https://github.com/cartoone222/proget_bibligeo/blob/main/bibligeo.py</p>

   	</span>

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
    			txt.textContent = 'http://192.168.1.15/html.txt';
    			value_text = 0;
  			}
		}

		function updatebtn_2(){
			window.open('http://192.168.1.15/bibligeo.py', '_blank');
		}
    </script>

<!-- fin du modifiable -->

</body>

<!-- fin du html -->	
</html>
