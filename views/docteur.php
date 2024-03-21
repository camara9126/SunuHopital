<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <?php if (isset($_GET["etat"]) && $_GET["etat"] == "add") : ?>
        <?php require_once("views/ajouts/addDocteur.php"); ?>
    <?php else : ?>
        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-success">
                <div class="row">
                    <div class="col-md-8">
                        <h6 class="m-0 font-weight-bold text-white">Liste des docteurs</h6>
                    </div>
                    <div class="col-md-4 text-md-right">
                        <a href="?page=docteur&etat=add" class="btn btn-warning">Ajouter</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Tel</th>
                                <th>Email</th>
                                <th>Spécialisation</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($docteurs as $d) : ?>
                            <?php if ($d->id != $doctor->id) : ?>
                            <tr>
                                <td><?= $d->nom ?></td>
                                <td><?= $d->tel ?></td>
                                <td><?= $d->email ?></td>
                                <td><?= $d->specialisation ?></td>
                                <td>
                                    <a href="?page=docteur&etat=add&id=<?= $d->id ?>" class="btn btn-outline-info btn-round btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="btn btn-outline-danger btn-sm" href="#" data-toggle="modal" data-target="#delete">
                                        <i class="fas fa-trash"></i>
                                    </a>

                                    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Êtes-vous sûr?</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">De vouloir supprimer.</div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                                                    <a class="btn btn-danger" href="?page=docteur&delete=<?= $d->id ?>">Supprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Content Row -->
    <?php endif; ?>
</div>
<!-- /.container-fluid -->