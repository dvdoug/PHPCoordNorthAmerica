<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class NADCON5SP1897SP1952StPaulLongitudeProvider implements GridProvider
{
    public function provideGrid(): NADCON5Grid
    {
        return new NADCON5Grid(__DIR__ . '/../../resources/nadcon5.sp1897.sp1952.stpaul.lon.trn.20160901.b');
    }
}
