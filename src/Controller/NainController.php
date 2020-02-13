<?php

namespace App\Controller;

use App\Repository\NainRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\DBAL\Driver\Connection;

class NainController extends AbstractController
{
    /**
    * @Route("/nain/{id}", name="nain_show")
    */

    public function show($id){

    	$nain = $this -> getDoctrine()
    	-> getRepository(Nain::class)
    	-> find($id);

if (!$nain) {
        throw $this->createNotFoundException(
            'No product found for id '.$id
        );
    }

    return new Response('Check out this great product: '.$nain->getName());
    }



    




}

?>
