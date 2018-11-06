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
    <!-- Conteudo do Aluno -->   
    <div class="container" style="margin-top:50px;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <!-- Marcador de Informações -->

                <div class="row" style="border-bottom:solid 1px #797979;">
                    <div class="col-md-3" align="center" class="boxInfoAluno" style=" background-color:#CCCCCC;border: solid 1px #222222;border-radius: 10px 10px 0 0 ; padding= 10px;">Informações</div>
                    <div class="col-md-9"></div>
                </div>

                <!-- Fim Marcador de Informações -->
                <!-- Marcador de Identificação -->
                <div class="row" align="center"  style="background:#F2F2F2;border-bottom:solid 1px #797979;">
                    <div class="col-md-4"></div>
                    <div class="col-md-4" style="font-weigth:bold;background-color:#AEAEAE;border:solid 1px #797979;border-radius:10px 10px 0 0;padding:2px; margin-top:12px">
                        Identificação
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row" style="background:#F2F2F2;padding-bottom:10px;">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">Registro Acadêmico:</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" disabled style="background-color:white;border:solid 1px #222222; width:243px; height:25px;" >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">Nome:</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" disabled style="background-color:white;border:solid 1px #222222;width:479px;height:25px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="background:#F2F2F2;padding-bottom:20px;">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                Data de nascimento:
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"><input type="text" disabled style="background-color:white;border:solid 1px #222222; width:243px; height:25px;" ></div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-12">
                                Naturalidade:
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" disabled style="background-color:white;border:solid 1px #222222;width:270px;height:25px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="margin-left:-40px;">
                        <div class="row">
                            <div class="col-md-12">
                                Estado:
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" disabled style="background-color:white;border:solid 1px #222222;width:200px;height:25px;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim Marcador de Identificação-->
                <!-- Dados da tutoria/monitoria -->
                <div class="row" style="background:#F2F2F2;border-bottom:solid 1px #797979;">
                    <div class="col-md-4"></div>
                    <div class="col-md-4" style="font-weigth:bold;background-color:#AEAEAE;border:solid 1px #797979;border-radius:10px 10px 0 0;padding:2px; margin-top:12px">Dados da Tutoria/Monitoria</div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row" style="padding-top:10px;background:#F2F2F2;">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                Categoria(Tutoria/Monitoria):
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-md-12">
                                <input type="text" disabled style="background-color:white;border:solid 1px #222222; width:243px; height:25px;"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                E-mail:
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" disabled style="background-color:white;border:solid 1px #222222;width:479px;height:25px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top:10px;background:#F2F2F2;">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-12">
                                Curso:
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" disabled style="background-color:white;border:solid 1px #222222;width:282px;height:25px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12">
                                Turma:
                            </div>
                        </div>
                        <div class="row">
                            <input type="text" disabled style="background-color:white;border:solid 1px #222222;width:141px;height:25px;">
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-left:-40px;">
                        <div class="row">
                            <div class="col-md-12">
                                Período/Ano letivo:
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" disabled style="background-color:white;border:solid 1px #222222;width:265px;height:25px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top:10px;padding-bottom:20px;background:#F2F2F2;">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-12">
                                Professor Orientador:
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" disabled style="background-color:white;border:solid 1px #222222;width:419px;height:25px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-12">
                                Disciplina em que atua:
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" disabled style="background-color:white;border:solid 1px #222222;width:290px;height:25px;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim Dados da tutorio/monitoria -->
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <!--  Fim do conteudo do aluno -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>