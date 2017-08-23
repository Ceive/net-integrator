<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 17.10.2016
 * Time: 18:44
 */
namespace Ceive\Net\Integrator {

	/**
	 * Interface ActionInterface
	 * @package Ceive\Net\Integrator
	 */
	interface ActionInterface{

		/**
		 * @param array $params
		 * @param Combination $combination
		 * @return void
		 */
		public function execute(array $params, Combination $combination);

	}
}

