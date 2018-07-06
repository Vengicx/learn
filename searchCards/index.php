<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>searchCards</title>
    <style>
      #infoText{
        display: none;
      }

    </style>
  </head>
  <body>
  <div class="container">
    <h1 class="text-center">Selecione o produto</h1>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Digite aqui" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Clique Aqui</button>
    </form>
  </div>






















<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">O que é isso?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        É um 'search' para filtrar os cards de pessoa (ou produto) que aparecerá na tela, puxados pelo banco de dados.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok, entendi</button>
      </div>
    </div>
  </div>
</div>
<script>
  function filterFunction() {
      var input, filter, ul, li, a, i; //declara variaveis
      input = document.getElementById("procurar"); //pega o input com o id "procurar"
      filter = input.value.toUpperCase(); //pega o valor que está lá, transforma em maiusculo
      div = document.getElementById("genero"); //pega a div toda
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