<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <?php if (isset($message)) : ?>
        <div class="alert alert-<?= $type ?> alert-dismissible fade show" role="alert">
            <strong><?= $message ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <div class="row ">
        <div class="card col-md-7">
            <div class="card-header bg-success">
                <h6 class="m-0 font-weight-bold text-white">Information Docteur</h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Nom Complet<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="<?= $doctor->nom ?>" required name="nom">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Telephone<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="<?= $doctor->tel ?>" required name="tel">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Email<span class="text-danger">*</span></label>
                            <input type="email" class="form-control" value="<?= $doctor->email  ?>" required name="email">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Spécialisation <span class="text-danger">*</span></label>
                            <select name="specialisation" required id="" class="form-control">
                                <option value="">Selectionner une spécialisation</option>
                                <?php foreach ($specs as $s) : ?>
                                    <option value="<?= $s->nom ?>" <?= $doctor->specialisation == $s->nom ? "selected" : '' ?>>
                                        <?= $s->nom ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" name="editer" class="btn btn-outline-success">Modifier</button>

                </form>
            </div>
        </div>
        <div class="ml-1 card col-md-4">
            <div class="card-header bg-success">
                <h6 class="text-white">Modification de Mot de passe</h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Ancien Mot de passe<span class="text-danger">*</span></label>
                        <input type="password" placeholder="Entrer votre ancien mot de passe" class="form-control" required name="password">
                    </div>
                    <div class="form-group">
                        <label for="">Nouveau Mot de passe<span class="text-danger">*</span></label>
                        <input type="password" placeholder="Entrer le nouveau mot de passe" class="form-control" required name="new_password">
                    </div>
                    <button type="submit" name="editPassword" class="btn btn-warning">Modifier</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->