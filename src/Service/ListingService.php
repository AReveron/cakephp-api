<?php
declare(strict_types=1);

/**
 * Copyright 2016 - 2019, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2016 - 2019, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

namespace CakeDC\Api\Service;

use Cake\Routing\RouteBuilder;
use CakeDC\Api\Routing\ApiRouter;

/**
 * Class ListingService
 *
 * @package CakeDC\Api\Service
 */
class ListingService extends Service
{
    protected $_actionsClassMap = [
        'list' => '\CakeDC\Api\Service\Action\ListAction',
    ];

    /**
     * Initialize service level routes
     *
     * @return void
     */
    public function loadRoutes()
    {
        ApiRouter::scope('/', function (RouteBuilder $routes) {
            $routes->setExtensions($this->_routeExtensions);
            $routes->connect('/listing/', ['controller' => 'listing', 'action' => 'list']);
        });
    }
}
