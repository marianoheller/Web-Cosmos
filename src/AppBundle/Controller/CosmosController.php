<?php

// src/AppBundle/Controller/CosmosController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CosmosController extends Controller
{
	/**
	 * @Route("/{indexVar}", requirements={"indexVar"= "index|index.html"} )
	 */
	public function indexCosmicAction()
   {
		return $this->render(
					'\astronomywebsite\index.html.twig',
					array()
					);
	}

	/**
	 * @Route("/{indexVar}", requirements={"indexVar"= "gallery|gallery.html"} )
	 */
	public function indexGalleryAction()
   {
		return $this->render(
					'\astronomywebsite\gallery.html.twig',
					array()
					);
	}

	/**
	 * @Route("/{indexVar}", requirements={"indexVar"= "contact|contact.html"} )
	 */
	public function indexContactAction()
   {
		return $this->render(
					'\astronomywebsite\contact.html.twig',
					array()
					);
	}

	/**
	 * @Route("/{indexVar}", requirements={"indexVar"= "blog|blog.html"} )
	 */
	public function indexBlogAction()
   {
		return $this->render(
					'\astronomywebsite\blog.html.twig',
					array()
					);
	}

	/**
	 * @Route("/{indexVar}", requirements={"indexVar"= "about|about.html"} )
	 */
	public function indexAboutAction()
   {
		return $this->render(
					'\astronomywebsite\about.html.twig',
					array()
					);
	}
}