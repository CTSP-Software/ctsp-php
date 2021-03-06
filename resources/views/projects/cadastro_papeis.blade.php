@extends("template.app")

@section("content")
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">

    <title>Title</title>
    <link rel="stylesheet" href="../css/bootstrap.css">

    <link rel="stylesheet" href="../css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="../js/bootstrap.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--icon-->
    <link rel="stylesheet" type="text/css" href="../css/web-fonts-with-css/css/fontawesome-all.min.css ">
    <!--icon-->

    <script type="text/javascript">
        $(document).ready(function(){
            //aqui vai suas funcoes do jquery
            $("#add").click(function() {
                //exampleInputEmail1
                //if (consultaajaxverificandoemail){
                //replica
                //}else{
                //nao replica
                //}
                //
                //
                //
                //

                var input = document.getElementById('#exampleInputEmail1');
                alert(input);
                $('#copia').clone().appendTo('#cola');
                $('#exampleInputEmail1').val('');
            });
        });


    </script>
</head>
<body>

<div class="container">
        <p class="text-center text-primary display-4">Projeto <em>{{ $resultado2 }}</em> -  Papéis Scrum</p>
        <p class="text-center">Cadastre/edite aqui os papéis do time Scrum do <span class="text-primary">Projeto <em>{{ $resultado2 }}</em></span> .</p>


        <div class="row">
            <div class="col-4"></div>
            <div class="col-5">
                <div class="row">
                    <div class="col-6">
                        <p class="text-primary"><strong>Papéis</strong></p>
                    </div>
                    <div class="col-6">
                        <p class="text-primary"><strong>Usuário</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>

        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 mt-3">

                <form action="#paginarecolherdados" method="post" id="formularioPapeis" name="formPapeis">
                    <div class="form-group">

                        <div class="form-group row">
                            <label for="emailScrum" class="col-4">Scrum Master*:</label>
                            <div class="col-3"></div>
                            <div class="col-5">
                                <input class="form-control" name="emailSM" type="email" value="" id="emailScrum" placeholder="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emailProductOwner" class="col-4">Product Owner*:</label>
                            <div class="col-3"></div>
                            <div class="col-5">
                                <input class="form-control" name="emailPO" type="email" value="" id="emailProductOwner" placeholder="email">
                            </div>
                        </div>
                        <p class="text-right text text-muted"><small>*Os papeis de Product Owner e Scrum Master são obrigatórios em um projeto.</small></p>
                        <p class="text-center text-primary display-4">Developers Team</p>

                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="text-primary"><strong>Especialidade</strong></p>
                                    </div>
                                    <div class="col-4"></div>
                                    <div class="col-2">
                                        <p class="text-primary"><strong>Usuário</strong></p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-4"></div>
                        </div>

                        <div class="row">
                            <div class="col-11" id="copia">
                                <div class="form-group row">
                                    <div class="form-group col-4">
                                        <select class="form-control" id="Select1">
                                            <option value="Developer Team">Developer Team</option>
                                        </select>
                                    </div>
                                    <div class="col-4"></div>
                                    <div class="form-group col-4">
                                        <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-1">
                                <button type="button" class="btn btn-primary btn-icon btn-custom" id="add">
                                    <i class="fas fa-plus-circle fa-10px"></i>
                                    Adicionar
                                </button>

                            </div>
                        </div>
                        <div class="row" id="cola">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn  btn-outline-primary">Cancelar</button>

                                </div>
                                <div class="col-2"></div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                                </div>
                            </div>
                        </div>
                        <div class="4"></div>
                    </div>
                </form>

            </div>

            <div class="col-3"></div>
        </div>
</div>



</body>
</html>
@endsection