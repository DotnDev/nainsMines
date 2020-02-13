<?php

namespace App\Controller;

use App\Entity\Nain;
use App\Entity\Mine;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\DBAL\Driver\Connection;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {

       
      $nains = $this -> getDoctrine()-> getRepository(Nain::class) -> FindAll();
      $mines = $this -> getDoctrine()-> getRepository(Mine::class) -> FindAll();

        return  $this -> render('nains/index.html.twig', array ('nains' => $nains, 'mines' => $mines));

    

    }


 


}

?>
