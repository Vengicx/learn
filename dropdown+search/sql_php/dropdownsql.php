<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Dropdown do Bootstrap</title>
    <style>
    	.dropdown-menu{
    		overflow: auto !important; /*deixa com a barra de rolagem */
    		height: 150px; /*deixa com um limite máximo de altura para aparecer as informações */
    	}

    	.btn-drop {
    		border: 2px solid #007bff; /*deixa o input com bordinha */
    	}



	</style>
  </head>
  <body>
	<div class="container">
	<div class="dropdown">
  		<button class="btn btn-primary dropdown-toggle" type="button" onclick="myFunction()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="botao">
    		Selecione o técnico
  		</button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="pessoa">
		  	<input type="text" class="btn btn-drop" placeholder="Procurar..." id="procurar" onkeyup="filterFunction()">
<!-- 		    <a class="dropdown-item" href="#Metal">Metal</a>
		    <a class="dropdown-item" href="#Pop">Pop</a>
		    <a class="dropdown-item" href="#Rock">Rock</a>		    
		    <a class="dropdown-item" href="#KPop">K-Pop</a>
		    <a class="dropdown-item" href="#Sertanejo">Sertanejo Raiz</a>
		    <a class="dropdown-item" href="#Reggae">Reggae</a>		    
		    <a class="dropdown-item" href="#Blues">Blues</a>
		    <a class="dropdown-item" href="#Jazz">Jazz</a>
		    <a class="dropdown-item" href="#Funk">Funk</a>		    
		    <a class="dropdown-item" href="#JRock">J-Rock</a> -->
		    <?php
		    	include "listarpessoa.php";

		    ?>
		  </div>
	</div>
	</div>
<script>
	// function myFunction() {
	//     document.getElementById("genero").classList.toggle("show");
	// }


	function filterFunction() {
	    var input, filter, ul, li, a, i; //declara variaveis
	    input = document.getElementById("procurar"); //pega o input com o id "procurar"
	    filter = input.value.toUpperCase(); //pega o valor que está lá, transforma em maiusculo
	    div = document.getElementById("pessoa"); //pega a div toda
	    a = div.getElementsByTagName("a"); //pega os valores que estão com a tag "a" dentro da div
	    botao = document.getElementById("botao");
	    // botao.removeChild(botao);
	    for (i = 0; i < a.length; i++) {
	        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {//se o valor de a for encontrado (documentação do indexof, se nao encontrar a informação ele retorna -1) entao...
	            a[i].style.display = "";//ele aparece
	        } else {
	            a[i].style.display = "none";//senao ele some
	        }
	    }
	}

</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>