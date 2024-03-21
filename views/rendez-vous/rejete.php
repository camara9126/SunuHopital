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
                <h6 class="m-0 font-weight-bold text-white">Liste des rendez-vous rejetés</h6>
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
                            <?php foreach ($rejapts as $n) : ?>
                                <tr>
                                    <td><?= $n->nom ?></td>
                                    <td><?= $n->tel ?></td>
                                    <td><?= $n->email ?></td>
                                    <td><?= $n->nomdoc ?></td>
                                    <td><?= date("d/m/Y", strtotime($n->daterv)) ?></td>
                                    <td><?= $n->heure ?></td>
                                    <td>
                                        <a href="?page=rv&type=rejete&info=<?= $n->id ?>" class="btn btn-outline-info btn-round btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>

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