<?php
  include "db/db.php";


  $testAjoutAdmin = 1;

  if(isset($_POST['validerAjoutAdmin'])){

    if(isset($_POST['login'])){
      $_POST['login'] = htmlspecialchars($_POST['login']);
      if (preg_match("#[a-zA-Z0-9]{4,50}#", $_POST['login'])){
      }else{
        ?>
        <div class="alert alert-warning" role="alert">Le login <?php echo' ' . $_POST['login'] . '' ?> n'est pas valide</div>
        <?php
        $testAjoutAdmin = 0;
      }
    }


    if(isset($_POST['mdp'])){
      $_POST['mdp'] = htmlspecialchars($_POST['mdp']);
      if (preg_match("#[a-zA-Z0-9]{4,50}#", $_POST['mdp'])){
      }else{
        ?>
        <div class="alert alert-warning" role="alert">Le mot de passe n'est pas valide, il doit contenir au minimum 4 caractères</div>
        <?php
        $testAjoutAdmin = 0;
      }
    }

    if(isset($_POST['mdp2'])){
      if($_POST['mdp2'] == $_POST['mdp']){
      }else{
        ?>
        <div class="alert alert-warning" role="alert">Echec de la confirmation de mot de passe</div>
        <?php
        $testAjoutAdmin = 0;
      }
    }


    if($testAjoutAdmin==1){
          $reponse = $bdd->query('SELECT username FROM user WHERE username=\'' . $_POST['login'] . '\'');
          $donnees = $reponse->fetch();

              if($_POST['login']==$donnees['login']){
                ?>
                <div class="alert alert-warning" role="alert">Le login <?php echo' ' . $_POST['login'] . '' ?> est déjà utilisé</div>
                <a href="ajouterAdmin">Réessayer</a>
                <?php
              }
              else{
                  //INSERT INTO `user` ( `username`, `password`, `salt`, `roles`) VALUES ( 'seb', 'seb', '', 'a:1:{i:0;s:10:"ROLE_ADMIN";}')
                  $bdd->exec('INSERT INTO user(username, password, salt, roles) VALUES( \''.$_POST['login'].'\', \''.$_POST['mdp2'].'\', \'\', \'a:1:{i:0;s:10:"ROLE_ADMIN";}\')');
                  }
        }

  }
