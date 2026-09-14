<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class NTv2VelNAD83CSRSv8CanadaProvider implements GridProvider
{
    public function provideGrid(): NTv2VelGrid
    {
        return new NTv2VelGrid(__DIR__ . '/../../resources/NAD83v80VG.gvb');
    }
}
