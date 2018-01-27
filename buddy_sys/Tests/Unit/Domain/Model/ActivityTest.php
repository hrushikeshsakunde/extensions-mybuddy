<?php
namespace BuddySystem\BuddySys\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Hrushikesh Sakunde <sakundehrushi@gmail.com>
 */
class ActivityTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \BuddySystem\BuddySys\Domain\Model\Activity
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \BuddySystem\BuddySys\Domain\Model\Activity();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getId()
        );
    }

    /**
     * @test
     */
    public function setIdForIntSetsId()
    {
        $this->subject->setId(12);

        self::assertAttributeEquals(
            12,
            'id',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPlaceReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPlace()
        );
    }

    /**
     * @test
     */
    public function setPlaceForStringSetsPlace()
    {
        $this->subject->setPlace('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'place',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStartdateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getStartdate()
        );
    }

    /**
     * @test
     */
    public function setStartdateForDateTimeSetsStartdate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setStartdate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'startdate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEnddateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getEnddate()
        );
    }

    /**
     * @test
     */
    public function setEnddateForDateTimeSetsEnddate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setEnddate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'enddate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getUseridReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getUserid()
        );
    }

    /**
     * @test
     */
    public function setUseridForIntSetsUserid()
    {
        $this->subject->setUserid(12);

        self::assertAttributeEquals(
            12,
            'userid',
            $this->subject
        );
    }
}
