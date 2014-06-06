<?php

namespace Phoenix\TimeTrackerBundle\Controller;
use Phoenix\TimeTrackerBundle\Entity\WorkTimeTracker;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class TimeTrackerController extends Controller{

	public function indexAction() {
		return $this->render(
			'TimeTrackerBundle:TimeTracker:index.html.twig'
		);
	}

//	public function gotoAddAction(){
//		return $this->render(
//			'TimeTrackerBundle:TimeTracker:add.html.twig'
//		);
//	}

	public function addAction() {
		// todo move this to the above action
		// todo create a form

		$workTimeTracker = new WorkTimeTracker();
		$workTimeTracker->setDate(new \DateTime("now"));
		$workTimeTracker->setStartTime(new \DateTime("now"));
		$workTimeTracker->setEndTime(new \DateTime("now"));
		$workTimeTracker->setLunchDuration(new \DateTime("now"));
		$em = $this->getDoctrine()->getManager();
		$em->persist($workTimeTracker);
		$em->flush();
//		$workTimeTracker = new WorkTimeTracker();
//		$workTimeTracker.setEntryDate();
//		$form = $this->createFormBuilder($workTimeTracker)
//			->add('entryDate', 'text')
//			->add('endTime', 'date')
//			->add('save', 'submit')
//			->getForm();
		return $this->render(
			'TimeTrackerBundle:TimeTracker:add.html.twig'
//			,array('form' => $form->createView())
		);
	}

	public function historyAction() {
		// todo format history page dates

		$repository = $this->getDoctrine()->getRepository('TimeTrackerBundle:WorkTimeTracker');
		$tracks = $repository->findAll();
		return $this->render(
			'TimeTrackerBundle:TimeTracker:history.html.twig'
			,array('tracks' => $tracks)
		);
	}
}