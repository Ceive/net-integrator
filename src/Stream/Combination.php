<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 17.10.2016
 * Time: 19:35
 */
namespace Ceive\Net\Integrator\Stream {
	
	use Ceive\Net\Stream\StreamInteractionInterface;
	
	/**
	 * Class Combination
	 * @package Ceive\Net\Integrator\Stream
	 */
	class Combination extends \Ceive\Net\Integrator\Combination{

		/** @var  StreamInteractionInterface */
		protected $stream;

		/** @var array  */
		protected $default_params = [];

		/**
		 * Combination constructor.
		 * @param StreamInteractionInterface $stream
		 */
		public function __construct(StreamInteractionInterface $stream){
			$this->stream = $stream;
		}

		/**
		 * @param StreamInteractionInterface $stream
		 * @return $this
		 */
		public function setStream(StreamInteractionInterface $stream){
			$this->stream = $stream;
			return $this;
		}

		/**
		 * @return StreamInteractionInterface
		 */
		public function getStream(){
			return $this->stream;
		}


	}
}

