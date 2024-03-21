<div class="container pt-5 mb-5">

    <h2 class="mb-lg-3 mb-5 text-center">
        <?= ucwords("Rechercher l’historique des rendez-vous par numéro de téléphone portable")  ?></h2>
    <form action="" method="post">
        <div class="row pt-4">
            <div class="form-group col-md-10">
                <input type="text" name="tel" class="form-control"
                    placeholder="L'historique des rendez-vous par numéro de téléphone">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-success" name="rechercher">Rechercher</button>
            </div>
        </div>
    </form>

    <?php if (isset($rvs) && count($rvs) > 0) : ?>
        
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-success">
            <h6 class="m-0 font-weight-bold text-white">Liste des rendez-vous trouvé</h6>
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
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rvs as $n) : ?>
                        <tr>
                            <td><?= $n->nom ?></td>
                            <td><?= $n->tel ?></td>
                            <td><?= $n->email ?></td>
                            <td><?= $n->nomdoc ?></td>
                            <td><?= date("d/m/Y", strtotime($n->daterv)) ?></td>
                            <td><?= $n->heure ?></td>
                            <td>
                                <?php if ($n->statut == 0) : ?>
                                <span class="text-info">En attente</span>
                                <?php elseif ($n->statut == 1) : ?>
                                <span class="text-success">Validé</span>
                                <?php elseif ($n->statut == 3) : ?>
                                <span class="text-danger">Rejeté</span>
                                <?php endif; ?>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php elseif (isset($rvs) && count($rvs) < 1) : ?>
    <h2 class="text-center pt-5">Aucun Rendez-vous trouvé</h2>
    <?php endif; ?>
</div>