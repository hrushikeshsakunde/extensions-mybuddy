<?php
namespace BuddySystem\BuddySys\Domain\Repository;

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
 * The repository for Activities
 */
class ActivityRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{


    public function findByUser($userId )
    {
        $query = $this->createQuery();
        $query->matching(
            $query->equals('userid', $userId)
        );
        return $query->execute();
    }


}
