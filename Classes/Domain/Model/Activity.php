<?php
namespace BuddySystem\BuddySys\Domain\Model;

/***
 *
 * This file is part of the "BuddySystem" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Hrushikesh Sakunde <sakundehrushi@gmail.com>, buddy system
 *
 ***/

/**
 * Activity
 */
class Activity extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * id
     *
     * @var int
     * @validate NotEmpty
     */
    protected $id = 0;

    /**
     * name
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * description
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';

    /**
     * place
     *
     * @var string
     * @validate NotEmpty
     */
    protected $place = '';

    /**
     * startdate
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $startdate = null;

    /**
     * enddate
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $enddate = '';

    /**
     * userid
     *
     * @var int
     */
    protected $userid = 0;

    /**
     * Returns the id
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the id
     *
     * @param int $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the place
     *
     * @return string $place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Sets the place
     *
     * @param string $place
     * @return void
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * Returns the startdate
     *
     * @return \DateTime $startdate
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Sets the startdate
     *
     * @param \DateTime $startdate
     * @return void
     */
    public function setStartdate(\DateTime $startdate)
    {
        $this->startdate = $startdate;
    }

    /**
     * Returns the userid
     *
     * @return int $userid
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Sets the userid
     *
     * @param int $userid
     * @return void
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    /**
     * Returns the enddate
     *
     * @return \DateTime enddate
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Sets the enddate
     *
     * @param string $enddate
     * @return void
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;
    }
}
