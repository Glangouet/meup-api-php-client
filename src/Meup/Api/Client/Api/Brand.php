<?php
/**
 * This file is part of the PHP Client for 1001 Pharmacies API.
 *
 * (c) 1001pharmacies <https://github.com/1001Pharmacies/meup-api-php-client>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Meup\Api\Client\Api;

/**
 * Brand API
 *
 * @link   http://developers.1001pharmacies.com/docs/v1/brands.html
 *
 * @author Loïc Ambrosini <loic@1001pharmacies.com>
 */
class Brand extends AbstractApi
{
    /**
     * Get Brands list
     *
     * @link http://developers.1001pharmacies.com/docs/v1/brands.html#tocAnchor-1-3-1
     *
     * @return null|array sav reasons
     */
    public function all()
    {
        return $this->get(self::BASE_API_PATH.'/brands');
    }

    /**
     * Get Brand Products list
     *
     * @link http://developers.1001pharmacies.com/docs/v1/brands.html#tocAnchor-1-3-2
     *
     * @param string $brandId
     *
     * @return array|null sav reasons
     */
    public function getProducts($brandId)
    {
        return $this->get(sprintf(self::BASE_API_PATH.'/brands/%s/products/', $brandId));
    }
}
