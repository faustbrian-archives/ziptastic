<?php

/*
 * This file is part of Ziptastic PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Ziptastic\Api;

use BrianFaust\Unified\AbstractApi;

class Location extends AbstractApi
{
    public function details($zipcode, $country = 'US')
    {
        $response = $this->get($country.'/'.$zipcode);

        return $this->getMapper()->raw($response);
    }
}
