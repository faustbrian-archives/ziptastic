<?php

declare(strict_types=1);

/*
 * This file is part of Ziptastic PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\Ziptastic\API;

use Plients\Http\HttpResponse;

class Location extends AbstractAPI
{
    /**
     * @param int    $zipcode
     * @param string $country
     *
     * @return \Plients\Http\HttpResponse
     */
    public function forward(int $zipcode, $country = 'US'): HttpResponse
    {
        return $this->client->get("{$country}/{$zipcode}");
    }

    /**
     * @param int $latitude
     * @param int $longitude
     *
     * @return \Plients\Http\HttpResponse
     */
    public function reverse(int $latitude, int $longitude): HttpResponse
    {
        return $this->client->get("reverse/{$latitude}/{$longitude}");
    }
}
