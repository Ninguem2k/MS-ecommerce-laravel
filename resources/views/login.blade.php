@extends('layouts.template')
@section('title', 'Home')
@section('content')
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!--PG_LOGIN-->
    <link href="CSS/PG_login.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="login">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-4 PG_LOGIN">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Bem vindo de volta!</h1>
                                        </div>
                                        <form class="user" action="Models/Classes/UserClass.php" method="POST">
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Entre com endereço de Email..." name="email">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="senha">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                                                </div>
                                            </div>
                                            <input type="submit" value="Login" name="Logar" class="btn btn-primary btn-user btn-block" />
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <label class="small" onclick="PG_FORGETSENHA()">Esqueceu sua senha?</label>
                                        </div>
                                        <div class="text-center">
                                            <label class="small" onclick="PG_CADASTRO()">Crie a sua conta aqui!</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <div id="cadastro">
        <div class="container ">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7">
                            <div class="p-3 PG_CADASTRO">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Crie a sua conta aqui!</h1>
                                </div>
                                <form class="user" action="User/LOGIN.php" method="POST">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Primeiro nome" name="nome">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Último nome" name="sob_nome">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Endereço de e-mail" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleInputCell" placeholder="Celular" name="nm_celular">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Senha" name="senha">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repita a senha">
                                        </div>
                                    </div>
                                    <input type="submit" value="Registrar conta " name="Cadastrar" class="btn btn-primary btn-user btn-block" />
                                </form>
                                <hr>
                                <div class="text-center">
                                    <label class="small" onclick="PG_FORGETSENHA()">Esqueceu a Senha?</label>
                                </div>
                                <div class="text-center">
                                    <label class="small" onclick="PG_LOGIN()">Já tem uma conta? Login!</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="forgetsenha">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!--Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-2">Esqueceu sua senha?</h1>
                                            <p class="mb-4">Nós entendemos, coisas acontecem. Basta inserir seu endereço de e-mail abaixo e enviaremos um link para redefinir sua senha!</p>
                                        </div>
                                        <form class="user" action="User/LOGIN.php" method="POST">
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Entre com seu Email..." name="email">
                                            </div>
                                            <input type="submit" value="Registrar conta " name="forget" class="btn btn-primary btn-user btn-block" />
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <label class="small" onclick="PG_CADASTRO()">Crie a sua conta aqui!</label>
                                        </div>
                                        <div class="text-center">
                                            <label class="small" onclick="PG_LOGIN()">já tem uma conta? Conecte-se!</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="JS/PG_login.js"></script>
</body>

</html>
@endsection