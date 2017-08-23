<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 17.10.2016
 * Time: 20:13
 */
namespace Ceive\Net\Integrator\Stream {
	
	use Ceive\Net\Integrator\Combination as baseCombination;
	use Ceive\Net\Connection\ConnectionInterface;
	use Ceive\Net\Stream\StreamInteractionInterface;
	use Ceive\Text\Replacer;
	use Ceive\Text\ReplacerInterface;
	
	/**
	 * Class Api
	 * @package Ceive\Net\Integrator\Stream
	 */
	abstract class Api extends \Ceive\Net\Integrator\Api{

		/** @var  int */
		protected $max_length = 512;

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
		 * @param Combination|baseCombination $combination
		 */
		public function before(baseCombination $combination){
			$stream = $combination->getStream();
			if($stream instanceof ConnectionInterface){
				$stream->connect();
			}
		}


		/**
		 * @param $answer
		 */
		abstract public function code($answer);

		/**
		 * @param Process $process
		 */
		abstract public function validateProcess(Process $process);

		/**
		 * @param $command
		 */
		protected function packCommand($command){
			return $command;
		}

		/**
		 * @param StreamInteractionInterface $stream $sequence
		 * @return mixed
		 */
		public function read(StreamInteractionInterface $stream){
			return $stream->read($this->max_length);
		}

		/**
		 * @param StreamInteractionInterface $stream
		 * @param $data
		 * @return mixed
		 */
		public function send(StreamInteractionInterface $stream, $data){
			return $stream->write($this->packCommand($data));
		}
	}
}

