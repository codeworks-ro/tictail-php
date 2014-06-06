<?php
/**
 * Description of CommunicationAbstract
 *
 * @author		Horatiu Cristea-Lubinschi <horatiu.cristea@gmail.com>
 * @copyright	(c) 
 * @date		11.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\API;

/**
 * Interface
 */
abstract class CommunicationAbstract
{
	/**
	 * Perform authorization
	 */
	abstract protected function authorize($clientId, $clientSecret, $code);

	/**
	 * Perform API and handle exceptions
	 *
	 * @param $action
	 * @param array $params
	 * @param string $method
	 * @return mixed
	 */
	abstract protected function requestApi($action = '', $params = array(), $method = 'POST');
}
