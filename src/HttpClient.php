<?php

/*
 * This file is part of Ziptastic PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Ziptastic;

use BrianFaust\Unified\AbstractHttpClient;

class HttpClient extends AbstractHttpClient
{
    protected $options = [
        'base_uri' => 'http://zip.getziptastic.com/v2/',
        'headers' => [
           'User-Agent' => 'BrianFaust/Ziptastic',
        ],
    ];
}
