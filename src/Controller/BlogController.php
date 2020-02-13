<?php
/**
 * @link http://www.thaiyii.com
 * 2020-02-14 00:07
 * @copyright Copyright (c) 2020 served
 * @author Prawee Wongsa <prawee@hotmail.com>
 * @license MIT
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show(string $slug)
    {
        return new Response(
            'show/{slug}'
        );
    }
}