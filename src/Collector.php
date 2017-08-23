<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 17.10.2016
 * Time: 16:36
 */
namespace Ceive\Net\Integrator {
	
	use Ceive\Util\ProcessUnit\ProcessCollector;
	
	/**
	 * Class Collector
	 * @package Ceive\Net\Integrator
	 */
	class Collector extends ProcessCollector{

		protected $api;
		
		/**
		 * Collector constructor.
		 * @param Api $api
		 */
		public function __construct(Api $api){
			$this->api = $api;
		}

		/**
		 * @return Api
		 */
		public function getApi(){
			return $this->api;
		}


	}
}

