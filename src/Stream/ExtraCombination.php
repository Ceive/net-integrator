<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 21.10.2016
 * Time: 14:18
 */
namespace Ceive\Net\Integrator\Stream {
	
	use Ceive\Net\Connection\ConnectionInterface;
	use Ceive\Net\Connection\ConnectorInterface;
	use Ceive\Net\Connection\SecureConnector;
	use Ceive\Net\Connection\Stream;
	
	use Ceive\Net\Connection\TcpConnector;
	use Ceive\Net\Stream\StreamInteractionInterface;
	
	/**
	 * Class ExtraCombination
	 * @package Ceive\Net\Integrator\Stream
	 */
	class ExtraCombination extends Combination{

		/** @var Api  */
		protected $api;

		/**
		 * ExtraCombination constructor.
		 * @param Api $api
		 * @param $connector
		 * @param $secure_connector
		 */
		public function __construct(Api $api, ConnectorInterface $connector = null, SecureConnector $secure_connector = null){
			$this->api = $api;
			$this->default_params = [
				'host'              => null,
				'port'              => null,
				'secure'            => false,
				'connector'         => $connector,
				'secure_connector'  => $secure_connector,
			];
		}

		/**
		 * @return TcpConnector
		 */
		protected function getConnector(){
			return $this->default_params['connector']?:TcpConnector::onceDefault();
		}

		/**
		 * @return SecureConnector
		 */
		protected function getSecureConnector(){
			return $this->default_params['secure_connector']?:SecureConnector::onceDefault();
		}

		/**
		 * @return StreamInteractionInterface
		 */
		public function getStream(){
			if(!$this->stream){
				$this->stream = new Stream(
					$this->default_params['host'],
					$this->default_params['port'],
					$this->default_params['secure']?
						$this->getSecureConnector():
						$this->getConnector()
				);
			}
			return $this->stream;
		}


		/**
		 * @param array $config
		 * @return \Ceive\Net\Integrator\Collector
		 */
		public function run(array $config = []){
			$this->setDefaultParams($config, true);
			$stream = $this->getStream();
			if($stream instanceof ConnectionInterface){
				$stream->close();
			}

			if($stream instanceof Stream){
				$stream->reinitialize(
					$this->default_params['host'],
					$this->default_params['port'],
					$this->default_params['secure']?
						$this->getSecureConnector():
						$this->getConnector()
				);
			}

			return $this->api->interact($this);
		}


	}
}

