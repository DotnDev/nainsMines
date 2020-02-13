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
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\DBAL\Driver\Connection;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */

    public function index(PaginatorInterface $paginator, Request $request)
    {

       //Retrieve data from Nain and add pagination to it
     $nains = $paginator -> paginate(
        $this -> getDoctrine()-> getRepository(Nain::class) -> FindAll(),
        $request -> query -> getInt('page',1),
        10

      );

      //Retrieve data from Mine
      $mines = $this -> getDoctrine()-> getRepository(Mine::class) -> FindAll();
      

        return  $this -> render('index.html.twig', array ('nains' => $nains, 'mines' => $mines));

    }

}

?>
