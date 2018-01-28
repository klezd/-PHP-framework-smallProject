<?php
/**
 * Created by PhpStorm.
 * User: roxyd
 * Date: 27/01/2018
 * Time: 18:02
 */
namespace App\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class projectController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request)
    {
        $content = "Hello World";
        $action = $request->query->get('action');
        if (isset($action)) {
            $content = "Updated Hello World";
        }
        return $this->render('small-project/homepage.html.twig', ['content' => $content]);
    }


}