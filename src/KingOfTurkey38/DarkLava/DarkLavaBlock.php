<?php

declare(strict_types=1);

namespace KingOfTurkey38\DarkLava;

use pocketmine\block\Lava;

class DarkLavaBlock extends Lava
{

    public function __construct(int $meta = 0)
    {
        parent::__construct($meta);
    }

    public function getLightLevel(): int
    {
        return 0;
    }
}