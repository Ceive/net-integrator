<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 17.10.2016
 * Time: 21:23
 */
namespace Ceive\Net\Integrator\Http {
	
	use Ceive\Net\HttpClient\Request;
	use Ceive\Net\HttpClient\Response;
	
	/**
	 * Class Process
	 * @package Ceive\Net\Integrator\Http
	 */
	class Process extends \Ceive\Net\Integrator\Process{

		/** @var  Action */
		protected $action;

		/** @var  Request */
		protected $request;

		/** @var  Response */
		protected $response;


		public function __construct(Action $action){
			$this->action = $action;
		}

		/**
		 * @return int|mixed
		 */
		public function getCode(){
			return $this->getResponse()->getCode();
		}

		/**
		 * @param Request $request
		 * @return $this
		 */
		public function setRequest(Request $request){
			$this->request = $request;
			return $this;
		}

		/**
		 * @return Request
		 */
		public function getRequest(){
			return $this->request;
		}

		/**
		 * @return Response|\Ceive\Net\HttpFoundation\ResponseInterface
		 */
		public function getResponse(){
			return $this->result?: $this->result = $this->request->getResponse();
		}

		/**
		 * @return Action
		 */
		public function getAction(){
			return $this->action;
		}



	}
}

