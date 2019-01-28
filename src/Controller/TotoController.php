<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Experiences;

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
            ->getRepository(Experiences::class)->findAll();
    
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
}