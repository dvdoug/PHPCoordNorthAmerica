<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class NTv2NAD27NAD83CSRS1997QuebecProvider implements GridProvider
{
    private NTv2Grid $cache;

    public function provideGrid(): NTv2Grid
    {
        return $this->cache ??= new NTv2Grid(__DIR__ . '/../../resources/NA27SCRS.gsb');
    }
}