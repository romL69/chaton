<?php
// src/Controller/chatonController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

Class ChatonController extends AbstractController
{
        public function chaton()
        {
            return $this->render('chaton.html.twig');
    }
}
