<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Database\UsersTable;
use Application\Model\User;
// use Zend\Validator\EmailAddress;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $ranId = randomGen(1,8,6);

        $data = array();

        $data["id"]=$ranId;


        return new ViewModel($data);
    }

}

function randomGen($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}
