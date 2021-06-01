<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class NTv2NAD27MAY76NAD83CSRS1997OntarioProvider implements GridProvider
{
    private NTv2Grid $cache;

    public function provideGrid(): NTv2Grid
    {
        return $this->cache ??= new NTv2Grid(__DIR__ . '/../../resources/ON76CSv1.gsb');
    }
}
