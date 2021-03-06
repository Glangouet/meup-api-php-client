<?php
/**
 * This file is part of the PHP Client for 1001 Pharmacies API.
 *
 * (c) 1001pharmacies <https://github.com/1001Pharmacies/meup-api-php-client>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Meup\Api\Client\HttpClient\Cache;

use Guzzle\Http\Message\Response;

/**
 * Caches api responses.
 *
 * @author Loïc Ambrosini <loic@1001pharmacies.com>
 */
interface CacheInterface
{
    /**
     * @param string $id The id of the cached resource
     *
     * @return bool if present
     */
    public function has($id);

    /**
     * @param string $id The id of the cached resource
     *
     * @return null|int The modified since timestamp
     */
    public function getModifiedSince($id);

    /**
     * @param string $id The id of the cached resource
     *
     * @return null|string The ETag value
     */
    public function getETag($id);

    /**
     * @param string $id The id of the cached resource
     *
     * @throws \InvalidArgumentException If cache data don't exists
     *
     * @return Response The cached response object
     */
    public function get($id);

    /**
     * @param string   $id       The id of the cached resource
     * @param Response $response The response to cache
     *
     * @throws \InvalidArgumentException If cache data cannot be saved
     */
    public function set($id, Response $response);
}
