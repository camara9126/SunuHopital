<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sunu Hopital</title>

    <!-- Custom fonts for this template-->
    <link href="themes/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="themes/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

    <div class="container">

        
        
        <!-- Outer Row -->
        <div class="row justify-content-center">
                
            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <?php if(isset($message)): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><?= $message ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>

                        <!-- Nested Row within Card Body -->
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Bienvenue à Sunu Hopital <a href="?page=home" class="btn btn-outline-info btn-sm">Retour</a></h1>
                            </div>
                            <form class="user" method="post" action="">
                                <div class="form-group">
                                    <input type="email" required name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Entrer l'adresse email...">
                                </div>
                                <div class="form-group">
                                    <input type="password" required name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mot de passe">
                                </div>

                                <button type="submit" name="connecter" class="btn btn-success btn-user btn-block">
                                    Se connecter
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="themes/vendor/jquery/jquery.min.js"></script>
    <script src="themes/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="themes/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="themes/js/sb-admin-2.min.js"></script>

</body>

</html>