<?php

namespace Phoenix\TimeTrackerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class TimeTrackerController extends Controller{

	public function indexAction() {
		return $this->render(
			'TimeTrackerBundle:TimeTracker:index.html.twig'
		);
	}
}