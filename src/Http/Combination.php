<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 17.10.2016
 * Time: 21:24
 */
namespace Ceive\Net\Integrator\Http {
	
	use Ceive\Net\HttpClient\Agent;
	
	/**
	 * Class Combination
	 * @package Ceive\Net\Integrator\Http
	 */
	class Combination extends \Ceive\Net\Integrator\Combination{

		/** @var  Agent */
		protected $agent;

		/**
		 * Combination constructor.
		 * @param Agent $agent
		 */
		public function __construct(Agent $agent){
			$this->agent = $agent;
		}

		/**
		 * @return Agent
		 */
		public function getAgent(){
			return $this->agent;
		}

		/**
		 * @param Agent $agent
		 * @return $this
		 */
		public function setAgent(Agent $agent){
			$this->agent = $agent;
			return $this;
		}

	}
}

