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

namespace Plients\Ziptastic;

use Plients\Http\Http;

class Client
{
    /**
     * @var string
     */
    private $key;

    /**
     * Create a new Ziptastic client instance.
     *
     * @param string $key
     */
    public function __construct(string $key)
    {
        $this->key = $key;
    }

    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \Plients\Ziptastic\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri('https://zip.getziptastic.com/v3/')->withHeaders([
            'x-key' => $this->key,
        ]);

        $class = "Plients\\Ziptastic\\API\\{$name}";

        return new $class($client);
    }
}
