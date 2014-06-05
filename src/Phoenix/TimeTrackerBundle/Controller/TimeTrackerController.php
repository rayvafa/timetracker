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

	public function addAction() {
		return $this->render(
			'TimeTrackerBundle:TimeTracker:add.html.twig'
		);
	}

	public function historyAction() {
		return $this->render(
			'TimeTrackerBundle:TimeTracker:history.html.twig'
		);
	}
}