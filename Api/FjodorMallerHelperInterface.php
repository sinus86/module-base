<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the license that is available in LICENSE file.
 *
 * DISCLAIMER
 *
 * Do not edit this file if you wish to upgrade this extension to newer version in the future.
 */

namespace FjodorMaller\Base\Api;

use Magento\Store\Model\Store;

interface FjodorMallerHelperInterface
{
    const XML_PATH_MODULE_GENERAL_ENABLED  = 'fjodormaller_base/general/enabled';

    const XML_PATH_MODULE_LOGGING_ENABLED  = 'fjodormaller_logging/general/enabled';

    const XML_PATH_MODULE_LOGGING_LOCATION = 'fjodormaller_logging/general/location';

    const XML_PATH_MODULE_LOGGING_FILENAME = 'fjodormaller_logging/general/filename';

    /**
     * Returns true if corresponding module is enabled.
     *
     * @param null|string|bool|int|Store $store
     * @param string[]                   $paths
     * @param string|null                $scope
     *
     * @return bool
     */
    public function isEnabled($store = null, array $paths = [], $scope = null);

    /**
     * Returns true id module logging is enabled.
     *
     * @param null|string|bool|int|Store $store
     * @param string[]                   $paths
     * @param string|null                $scope
     *
     * @return bool
     */
    public function isLoggingEnabled($store = null, array $paths = [], $scope = null);

    /**
     * Returns the module logging location.
     *
     * @param null|string|bool|int|Store $store
     * @param string[]                   $paths
     * @param string|null                $scope
     *
     * @return string
     */
    public function getLoggingLocation($store = null, array $paths = [], $scope = null);

    /**
     * Returns the module log filename.
     *
     * @param null|string|bool|int|Store $store
     * @param string[]                   $paths
     * @param string|null                $extension
     * @param string|null                $scope
     *
     * @return string
     */
    public function getLoggingFilename($store = null, array $paths = [], $extension = null, $scope = null);

    /**
     * Returns the value for given paths.
     *
     * @param string|string[]            $paths
     * @param null|string|bool|int|Store $store
     * @param string|null                $scope
     *
     * @return mixed|null
     */
    public function getValue($paths, $store = null, $scope = null);

    /**
     * Returns the flag value for given paths.
     *
     * @param string|string[]            $paths
     * @param null|string|bool|int|Store $store
     * @param string|null                $scope
     *
     * @return bool
     */
    public function isFlag($paths, $store = null, $scope = null);
}
