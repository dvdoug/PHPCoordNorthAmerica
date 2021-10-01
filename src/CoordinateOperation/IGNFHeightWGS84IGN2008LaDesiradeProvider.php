<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class IGNFHeightWGS84IGN2008LaDesiradeProvider implements GridProvider
{
    private IGNFHeightGrid $cache;

    public function provideGrid(): IGNFHeightGrid
    {
        return $this->cache ??= new IGNFHeightGrid(__DIR__ . '/../../resources/RALDW842016.mnt');
    }
}
