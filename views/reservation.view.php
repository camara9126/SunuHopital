<?php if (isset($message)) : ?>
    
    <div class="alert alert-<?= $type ?> alert-dismissible fade show" role="alert">
        <strong><?= $message ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<form action="" method="post" class="col-md-8 offset-2">
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="">Nom complet <span class="text-danger">*</span></label>
            <input type="text" required placeholder="Entrer votre nom complet" name="nom" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label for="">Email <span class="text-danger">*</span></label>
            <input type="email" required placeholder="Entrer votre adresse mail" name="email" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="">N° Téléphone <span class="text-danger">*</span></label>
            <input type="text" required placeholder="Entrer votre numérode téléphone" name="tel" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="">Date <span class="text-danger">*</span></label>
            <input type="date" name="daterv" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label for="">Heure <span class="text-danger">*</span></label>
            <input type="time" name="heure" required class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="">Docteur <span class="text-danger">*</span></label>
        <select name="doctor_id" id="" required class="form-control">
            <option value="">Selectionner un docteur</option>
            <?php foreach ($docteurs as $d) : ?>
                <option value="<?= $d->id ?>"><?= $d->nom ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">Symptômes</label>
        <textarea name="message" placeholder="Information supplémentaire" class="form-control"></textarea>
    </div>
    <button type="submit" id="adrv" name="ajouter" class="btn btn-outline-success">Valider</button>
</form>