<!doctype html>
<html lang="en">
  <head>
    <title>Área do aluno</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/index.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
    <!-- Menu Nav bar -->
    <div class="row" id="rowMenu">
        <div class="col-md-5"></div>
        <div class="col-md-7" id="menuNav">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs|pills" id="navId">
                <li class="nav-item">
                    <a href="#tab1Id" class="nav-link active">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="#tab5Id" class="nav-link">Horários</a>
                </li>
                <li class="nav-item">
                    <a href="#tab5Id" class="nav-link">Turmas</a>
                </li>
                <li class="nav-item">
                    <a href="#tab5Id" class="nav-link">Plano de aula</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Relatórios</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Recebidos</a>
                        <a class="dropdown-item" href="#">Enviados</a>
                        <a class="dropdown-item" href="#">Em andamento</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#tab5Id" class="nav-link">Alterar Senha</a>
                </li>
                <li class="nav-item">
                    <a href="#tab5Id" class="nav-link">Sair</a>
                </li>
            </ul>                
        </div>
    </div>
    <div class="row" id="conteudoPrincipalAluno">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form>
                <div class="row">
                    <div class="col-md-3" ><conteudoInformacoesTitulo>Informações do Aluno</conteudoInformacoesTitulo></div>
                    <div class="col-md-7"></div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="conteudoPrincipalIdentificacao">
                        <div class="row" id="colIdenficacao">
                            <div class="col-md-5"></div>
                            <div class="col-md-2" id="identificaoFundo">Identificacao</div>
                            <div class="col-md-5"></div>
                        </div>
                        <div class="row" style="margin-left:20px;">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12" >
                                        Registro Acadêmico:
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" disabled class="inputInforma" style="width: 243px;height: 25px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        Nome do aluno:
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" disable style="width: 489px;height: 25px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-left:20px;">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12" >
                                        Data de nascimento:
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" disabled class="inputInforma" style="width: 243px;height: 25px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        Naturalidade:
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" disable style="width: 270px;height: 25px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12" style="margin-left:-10px;">
                                        Estado:
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" disable style="width: 209px;height: 25px; margin-left:-10px;margin-bottom:30px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>