<?php

declare(strict_types=1);

namespace KingOfTurkey38\DarkLava;

use pocketmine\block\BlockFactory;
use pocketmine\plugin\PluginBase;

class DarkLava extends PluginBase
{

    public function onEnable(): void
    {
        BlockFactory::registerBlock(new DarkLavaBlock(), true);
    }
}
