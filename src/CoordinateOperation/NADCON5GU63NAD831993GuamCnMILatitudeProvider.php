<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class NADCON5GU63NAD831993GuamCnMILatitudeProvider implements GridProvider
{
    private NADCON5Grid $cache;

    public function provideGrid(): NADCON5Grid
    {
        return $this->cache ??= new NADCON5Grid(__DIR__ . '/../../resources/nadcon5.gu63.nad83_1993.guamcnmi.lat.trn.20160901.b');
    }
}
