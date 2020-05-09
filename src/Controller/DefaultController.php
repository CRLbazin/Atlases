<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * @Route("/", name="homepage", methods={"GET"});
	 */
	public function index()
	{
		return $this->render('index.html.twig');
	}

}
