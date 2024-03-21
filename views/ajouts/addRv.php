<div class="container card col-md-8">
    <div class="card-header bg-success">
        <div class="row">
            <div class="col-md-10">
                <h6 class="m-0 font-weight-bold text-white">Formulaire Rendez-vous</h6>
            </div>
            <div class="col-md-2 text-md-right">
                <a href="?page=rv&type=<?= $_GET["type"] ?>" class="btn btn-sm btn-warning">Retour</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <?php if (isset($message)) : ?>
            <div class="text-center alert alert-<?= $type ?>">
                <?= $message ?>
            </div>
        <?php endif; ?>
        <form action="" method="post">
            <input type="hidden" value="<?= $rv->id ?>" name="id">

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">Nom complet <span class="text-danger">*</span></label>
                    <input type="text" value="<?= $rv->nom ?>" required placeholder=" Entrer votre nom complet" name="nom" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Email <span class="text-danger">*</span></label>
                    <input type="email" value="<?= $rv->email ?>" required placeholder=" Entrer votre adresse mail" name="email" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">N° Téléphone <span class="text-danger">*</span></label>
                    <input type="text" value="<?= $rv->tel ?>" required placeholder=" Entrer votre numérode téléphone" name="tel" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Statut <span class="text-danger">*</span></label>
                    <select name="statut" required id="" class="form-control">
                        <option value="0" <?= $rv->statut == 0 ? "selected" : '' ?>>Nouveau</option>
                        <option value="1" <?= $rv->statut == 1 ? "selected" : '' ?>>Approuvé</option>
                        <option value="2" <?= $rv->statut == 2 ? "selected" : '' ?>>Rejeté</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">Date <span class="text-danger">*</span></label>
                    <input type="date" value="<?= $rv->daterv ?>" name="daterv" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Heure <span class="text-danger">*</span></label>
                    <input type="time" value="<?= $rv->heure ?>" name="heure" required class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="">Docteur <span class="text-danger">*</span></label>
                <select name="doctor_id" id="" required class="form-control">
                    <option value="">Selectionner un docteur</option>
                    <?php foreach ($docteurs as $d) : ?>
                        <option value="<?= $d->id ?>" <?= $d->id == $rv->doctor_id ? "selected" : '' ?>><?= $d->nom ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Symptômes</label>
                <textarea name="message" placeholder="Information supplémentaire" class="form-control"> <?= $rv->message ?></textarea>
            </div>
            <button type="submit" id="adrv" name="editer" class="btn btn-outline-success">Modfier</button>
        </form>
    </div>
</div>