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
	 * @Route(	"/{path}.{_format}",
	 			defaults = { "_format":"html"},
				requirements={
					"path"= "index|cosmos",
					"_format" = "html"
	 			} 
	 		)
	 */
	public function indexCosmicAction()
   {
		return $this->render(
					'\astronomywebsite\index.html.twig',
					array()
					);
	}

	/**
	 * @Route(	"/{path}.{_format}",
	 			defaults={"_format":"html"},
	 			requirements={
	 				"path"= "gallery"
	 			} 
	 		)
	 */
	public function indexGalleryAction()
   {
		return $this->render(
					'\astronomywebsite\gallery.html.twig',
					array()
					);
	}

	/**
	 * @Route(	"/{path}.{_format}",
	 			defaults={"_format":"html"},
	 			requirements={
	 				"path"= "contact"
	 			} 
	 		)
	 */
	public function indexContactAction()
   {
		return $this->render(
					'\astronomywebsite\contact.html.twig',
					array()
					);
	}

	/**
	 * @Route("	/{path}.{_format}",
				defaults={"_format":"html"},
	 			requirements={
	 				"path"= "blog"
	 			} 
	 		)
	 */
	public function indexBlogAction()
   {
		return $this->render(
					'\astronomywebsite\blog.html.twig',
					array()
					);
	}

	/**
	 * @Route("	/{path}.{_format}",
	 			defaults = {"_format":"html"},
	 			requirements={
	 				"path"= "about"
	 			} 
	 		)
	 */
	public function indexAboutAction()
   {
		return $this->render(
					'\astronomywebsite\about.html.twig',
					array()
					);
	}
}