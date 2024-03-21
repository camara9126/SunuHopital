<div class="container card col-md-6">
    <div class="card-header bg-success">
        <div class="row">
            <div class="col-md-10">
                <h6 class="m-0 font-weight-bold text-white">Formulaire Docteur</h6>
            </div>
            <div class="col-md-2 text-md-right">
                <a href="?page=docteur" class="btn btn-sm btn-warning">Retour</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <?php if (isset($d)) : ?>
                <input type="hidden" value="<?= $d->id ?>" name="id">
            <?php endif; ?>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">Nom Complet<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="<?= isset($d) ? $d->nom : '' ?>" required name="nom">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Telephone<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="<?= isset($d) ? $d->tel : '' ?>" required name="tel">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">Email<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" value="<?= isset($d) ? $d->email : '' ?>" required name="email">
                </div>
                <?php if (!isset($d)) : ?>
                    <div class="col-md-6 form-group">
                        <label for="">Mot de passe<span class="text-danger">*</span></label>
                        <input type="password" class="form-control" required name="mdp">
                    </div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="">Spécialisation <span class="text-danger">*</span></label>
                <select name="specialisation" required id="" class="form-control">
                    <option value="">Selectionner une spécialisation</option>
                    <?php foreach ($specs as $s) : ?>
                        <option value="<?= $s->nom ?>" <?= $d->specialisation == $s->nom ? "selected" : '' ?>><?= $s->nom ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <?php if (isset($d)) : ?>
                <button type="submit" name="editer" class="btn btn-outline-warning">Modifer</button>
            <?php else : ?>
                <button type="submit" name="ajouter" class="btn btn-outline-success">Ajouter</button>
            <?php endif; ?>

        </form>
    </div>
</div>