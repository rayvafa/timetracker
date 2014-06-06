<?php

namespace Phoenix\TimeTrackerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tbl_work_time_tracker")
 */
class WorkTimeTracker {

	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="date")
	 */
	protected $date;

	/**
	 * @ORM\Column(type="time")
	 */
	protected $start_time;

	/**
	 * @ORM\Column(type="time")
	 */
	protected $end_time;

	/**
	 * @ORM\Column(type="time")
	 */
	protected $lunch_duration;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return WorkTimeTracker
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set start_time
     *
     * @param \DateTime $startTime
     * @return WorkTimeTracker
     */
    public function setStartTime($startTime)
    {
        $this->start_time = $startTime;

        return $this;
    }

    /**
     * Get start_time
     *
     * @return \DateTime 
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Set end_time
     *
     * @param \DateTime $endTime
     * @return WorkTimeTracker
     */
    public function setEndTime($endTime)
    {
        $this->end_time = $endTime;

        return $this;
    }

    /**
     * Get end_time
     *
     * @return \DateTime 
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Set launch_duration
     *
     * @param \DateTime $launchDuration
     * @return WorkTimeTracker
     */
    public function setLunchDuration($lunchDuration)
    {
        $this->lunch_duration = $lunchDuration;

        return $this;
    }

    /**
     * Get launch_duration
     *
     * @return \DateTime 
     */
    public function getLunchDuration()
    {
        return $this->lunch_duration;
    }
}
