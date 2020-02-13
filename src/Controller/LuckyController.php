<?php
/**
 * @link http://www.thaiyii.com
 * 2020-02-13 21:09
 * @copyright Copyright (c) 2020 served
 * @author Prawee Wongsa <prawee@hotmail.com>
 * @license MIT
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends AbstractController
{
    /**
     * @return Response
     * @Route("/lucky/humber")
     */
    public function number()
    {
        $number = random_int(0, 100);

        /*return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );*/

        return $this->render('lucky/number.html.twig', [
            'number' => $number
        ]);
    }
}