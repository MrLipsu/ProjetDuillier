<?php $view->extend('base.html.php') ?>

<?php $view['slots']->set('title', 'Rangeur') ?>

<?php $view['slots']->start('body') ?>

    <h2>Bienvenue dans la partie administration du Perce-Neige</h2>

    <a href="<?php echo $view['router']->path('duillier_admin_nouveauConcours') ?>" class="btn btn-primary">Créer un nouveau concours</a>
    <a href="<?php echo $view['router']->path('duillier_admin_gestionClub') ?>" class="btn btn-primary">Gérer les clubs</a>
    <a href="<?php echo $view['router']->path('duillier_admin_gestionAdmin') ?>" class="btn btn-primary">Gérer les administrateurs</a>
    <a href="#" class="btn btn-primary">Gérer les rangeurs</a>
    <a href="<?php echo $view['router']->path('duillier_admin_gererRepas') ?>" class="btn btn-primary">Gérer les repas</a>
<?php $view['slots']->stop() ?>
