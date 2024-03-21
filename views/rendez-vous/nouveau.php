<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>
    <?php if (isset($_GET["info"])) : ?>
        <?php require_once("views/ajouts/addRv.php"); ?>
    <?php else : ?>

        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-success">
                <h6 class="m-0 font-weight-bold text-white">Liste des nouveaux rendez-vous</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Tel</th>
                                <th>Email</th>
                                <th>Docteur</th>
                                <th>Date</th>
                                <th>Heure</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($newapts as $n) : ?>
                                <tr>
                                    <td><?= $n->nom ?></td>
                                    <td><?= $n->tel ?></td>
                                    <td><?= $n->email ?></td>
                                    <td><?= $n->nomdoc ?></td>
                                    <td><?= date("d/m/Y", strtotime($n->daterv)) ?></td>
                                    <td><?= $n->heure ?></td>
                                    <td>
                                        <a href="?page=rv&type=new&info=<?= $n->id ?>" class="btn btn-outline-info btn-round btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="?page=rv&type=new&valid=<?= $n->id ?>" class="btn btn-outline-success btn-round btn-sm" title="approuvé"><i class=" fa fa-check" aria-hidden="true"></i></a>
                                        <a href="?page=rv&type=new&rejet=<?= $n->id ?>" class="btn btn-outline-warning btn-round btn-sm" title="rejeté"><i class="fa fa-times" aria-hidden="true"></i></a>
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
                                                        <a class="btn btn-danger" href="?page=docteur&delete=<?= $n->id ?>">Supprimer</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
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