<?php $view->extend('base.html.php') ?>

<?php $view['slots']->set('title', 'Rangeur') ?>

<?php $view['slots']->start('body') ?>

<?php
  include "db/db.php";


$reponse = $bdd->query('SELECT * FROM Club WHERE idClub=\'' . $_GET['idClub'] . '\'');
$donnees = $reponse->fetch();

?>

<h1 class="page-header text-center ">Modification du club</h1>

    <form class="form-horizontal" action="../gestionClub" method="post">
      <div class="form-group">
        <label for="idClub" class="col-sm-4 control-label">ID Club</label>
        <div class="col-sm-4"><!--on affiche à l'admin l'isbn du livre qu'il est en train de modifier-->
          <input type="text" class="form-control" value='<?php echo $donnees['idClub']; ?>' name="idClub">
        </div>
      </div>
      <div class="form-group">
        <label for="canton" class="col-sm-4 control-label">Canton</label>
        <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
          <input type="text" class="form-control" value='<?php echo $donnees['canton']; ?>' name="canton">
        </div>
      </div>
      <div class="form-group">
        <label for="nom" class="col-sm-4 control-label">Nom</label>
        <div class="col-sm-4"><!--puis le nouveau prix-->
          <input type="text" class="form-control" value='<?php echo $donnees['nom']; ?>' name="nom">
        </div>
      </div>
      <div class="form-group">
        <label for="nomPresident" class="col-sm-4 control-label">Nom président</label>
        <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
          <input type="text" class="form-control" value='<?php echo $donnees['nomPresident']; ?>' name="nomPresident">
        </div>
      </div>
      <div class="form-group">
        <label for="prenomPresident" class="col-sm-4 control-label">Prénom président</label>
        <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
          <input type="text" class="form-control" value='<?php echo $donnees['prenomPresident']; ?>' name="prenomPresident">
        </div>
      </div>
      <div class="form-group">
        <label for="adressePresident" class="col-sm-4 control-label">Adresse président</label>
        <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
          <input type="text" class="form-control" value='<?php echo $donnees['adressePresident']; ?>' name="adressePresident">
        </div>
      </div>
      <div class="form-group">
        <label for="codePostal" class="col-sm-4 control-label">Code postal</label>
        <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
          <input type="text" class="form-control" value='<?php echo $donnees['codePostal']; ?>' name="codePostal">
        </div>
      </div>
      <div class="form-group">
        <label for="ville" class="col-sm-4 control-label">Ville</label>
        <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
          <input type="text" class="form-control" value='<?php echo $donnees['ville']; ?>' name="ville">
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-4 control-label">E-mail</label>
        <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
          <input type="text" class="form-control" value='<?php echo $donnees['email']; ?>' name="email">
        </div>
      </div>
      <div class="form-group">
        <label for="numCCP" class="col-sm-4 control-label">Numéro CCP</label>
        <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
          <input type="text" class="form-control" value='<?php echo $donnees['numCCP']; ?>' name="numCCP">
        </div>
      </div>
      <div class="form-group">
        <label for="libelleCCP" class="col-sm-4 control-label">Libellé CCP</label>
        <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
          <input type="text" class="form-control" value='<?php echo $donnees['libelleCCP']; ?>' name="libelleCCP">
        </div>
      </div>
      <div class="form-group">
        <label for="iban" class="col-sm-4 control-label">IBAN</label>
        <div class="col-sm-4"><!--l'admin entre le nouveau titre, -->
          <input type="text" class="form-control" value='<?php echo $donnees['iban']; ?>' name="iban">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          <input type="submit" class="btn btn-success" value="Enregistrer"></input>
          <a href="<?php echo $view['router']->path('duillier_admin_gestionClub') ?>" class="btn btn-warning">Annuler</a>
        </div>
      </div>
      <input type="hidden" name="enregistrerModif" value="">
    </form>

<?php $view['slots']->stop() ?>
