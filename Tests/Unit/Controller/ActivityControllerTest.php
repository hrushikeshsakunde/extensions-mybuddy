<?php
namespace BuddySystem\BuddySys\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Hrushikesh Sakunde <sakundehrushi@gmail.com>
 */
class ActivityControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \BuddySystem\BuddySys\Controller\ActivityController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\BuddySystem\BuddySys\Controller\ActivityController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllActivitiesFromRepositoryAndAssignsThemToView()
    {

        $allActivities = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $activityRepository = $this->getMockBuilder(\BuddySystem\BuddySys\Domain\Repository\ActivityRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $activityRepository->expects(self::once())->method('findAll')->will(self::returnValue($allActivities));
        $this->inject($this->subject, 'activityRepository', $activityRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('activities', $allActivities);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenActivityToView()
    {
        $activity = new \BuddySystem\BuddySys\Domain\Model\Activity();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('activity', $activity);

        $this->subject->showAction($activity);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenActivityToActivityRepository()
    {
        $activity = new \BuddySystem\BuddySys\Domain\Model\Activity();

        $activityRepository = $this->getMockBuilder(\BuddySystem\BuddySys\Domain\Repository\ActivityRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $activityRepository->expects(self::once())->method('add')->with($activity);
        $this->inject($this->subject, 'activityRepository', $activityRepository);

        $this->subject->createAction($activity);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenActivityToView()
    {
        $activity = new \BuddySystem\BuddySys\Domain\Model\Activity();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('activity', $activity);

        $this->subject->editAction($activity);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenActivityInActivityRepository()
    {
        $activity = new \BuddySystem\BuddySys\Domain\Model\Activity();

        $activityRepository = $this->getMockBuilder(\BuddySystem\BuddySys\Domain\Repository\ActivityRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $activityRepository->expects(self::once())->method('update')->with($activity);
        $this->inject($this->subject, 'activityRepository', $activityRepository);

        $this->subject->updateAction($activity);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenActivityFromActivityRepository()
    {
        $activity = new \BuddySystem\BuddySys\Domain\Model\Activity();

        $activityRepository = $this->getMockBuilder(\BuddySystem\BuddySys\Domain\Repository\ActivityRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $activityRepository->expects(self::once())->method('remove')->with($activity);
        $this->inject($this->subject, 'activityRepository', $activityRepository);

        $this->subject->deleteAction($activity);
    }
}
