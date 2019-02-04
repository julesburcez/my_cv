<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Experience;

class TotoController extends Controller
{
    // public function number()
    // {
    //     $number = random_int(0, 100);

    //     return new Response(
    //         '<html><body>Lucky number: '.$number.'</body></html>'
    //     );
    // }
    
    // public function number()
    // {
    //     $number = random_int(0, 100);

    //     return $this->render('lucky/mycv.html.twig', array(
    //         'number' => $number,
    //     ));
    // }
    
    public function number($name,$prename)
    {
     $number = random_int(0, 100); 
     $experiences = $this->getDoctrine()
            ->getRepository(Experience::class)->findAll();
    
        if (!$experiences) {
            throw $this->createNotFoundException(
                'No experiences found for id '
            );
        }

        return $this->render('lucky/mycv.html.twig', array(
            
            'name' => $name,
            'number' => $number,
            'prename' => $prename,
            'experiences' => $experiences,
        ));
    }
    
    public function BDD(){

    $DateDebut="14-05-2015";
    $DateFin="21-05-2015";
    
    $xp = new Experience();
    $xp->setTitle(‘Dentiste’);
    $xp->setDateDebut=(\DateTime::createFromFormat('d-m-y',$DateDebut));
    $xp->setDateFin=(\DateTime::createFromFormat('d-m-y',$DateFin));
    $eManager = $this->getDoctrine()->getManager();
    $eManager->persist($xp);
    $eManager->flush();
    }
}