<?php

namespace Duillier\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DuillierAdminBundle:Default:index.html.php');
    }

    public function nouveauConcoursAction()
    {
        return $this->render('DuillierAdminBundle:Default:nouveauConcours.html.php');
    }

    public function gestionClubAction()
    {
        return $this->render('DuillierAdminBundle:Default:gestionClub.html.php');
    }

    public function modifierClubAction()
    {
        return $this->render('DuillierAdminBundle:Default:modifierClub.html.php');
    }

    public function supprimerClubAction()
    {
        return $this->render('DuillierAdminBundle:Default:supprimerClub.html.php');
    }

    public function ajouterClubAction()
    {
        return $this->render('DuillierAdminBundle:Default:ajouterClub.html.php');
    }

    public function gererRepasAction()
    {
        return $this->render('DuillierAdminBundle:Default:gererRepas.html.php');
    }

}
