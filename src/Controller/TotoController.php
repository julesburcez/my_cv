<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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

        return $this->render('lucky/mycv.html.twig', array(
            
            'name' => $name,
            'number' => $number,
            'prename' => $prename,
        ));
    }
}