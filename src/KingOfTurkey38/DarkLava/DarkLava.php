<?php

declare(strict_types=1);

namespace KingOfTurkey38\DarkLava;

use pocketmine\block\BlockFactory;
use pocketmine\plugin\PluginBase;

class DarkLava extends PluginBase
{

    public function onEnable(): void
    {
        $this->getLogger()->info("DarkLava Enabled");
        BlockFactory::registerBlock(new DarkLavaBlock(), true);
    }

    public function onDisable(): void
    {
        $this->getLogger()->info("DarkLava Disabled");
    }


}
