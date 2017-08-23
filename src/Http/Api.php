<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 17.10.2016
 * Time: 21:26
 */
namespace Ceive\Net\Integrator\Http {
	
	use Ceive\Net\HttpClient\Agent;
	use Ceive\Net\HttpClient\Request;
	use Ceive\Net\HttpClient\Response;
	use Ceive\Text\Replacer;
	use Ceive\Text\ReplacerInterface;
	
	/**
	 * Class Api
	 * @package Ceive\Net\Integrator\Http
	 */
	class Api extends \Ceive\Net\Integrator\Api{


		/** @var  ReplacerInterface */
		protected $replacer;

		/**
		 * @return Replacer|ReplacerInterface
		 */
		public function getReplacer(){
			if(!$this->replacer){
				$this->replacer = new Replacer();
			}
			return $this->replacer;
		}
		/**
		 * @param Agent $agent
		 * @param Request $request
		 * @return Response
		 */
		public function executeRequest(Agent $agent, Request $request){
			$this->beforeRequest($agent, $request);
			return $agent->execute($request);
		}

		/**
		 * @param Agent $agent
		 * @param Request $request
		 * @return bool|Response
		 */
		public function pushRequest(Agent $agent, Request $request){
			$this->beforeRequest($agent, $request);
			return $agent->push($request);
		}

		/**
		 * @param Agent $agent
		 * @param Request $request
		 * @return Response
		 */
		public function pullResponse(Agent $agent, Request $request){
			return $agent->pull($request);
		}

		/**
		 * @param Process $process
		 */
		public function validateProcess(Process $process){

		}

		/**
		 * @param $agent
		 * @param $request
		 */
		protected function beforeRequest(Agent $agent,Request $request){

		}

	}
}

