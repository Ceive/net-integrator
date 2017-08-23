<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 17.10.2016
 * Time: 17:32
 */
namespace Ceive\Net\Integrator {

	/**
	 * Interface CombinatorInterface
	 * @package Ceive\Net\Integrator
	 */
	interface CombinatorInterface{

		/**
		 * @param Api $api
		 * @param Collector $collector
		 * @return Combination
		 */
		public function combine(Api $api, Collector $collector);

	}
}

