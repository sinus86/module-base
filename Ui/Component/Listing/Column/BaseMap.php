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

namespace FjodorMaller\Base\Ui\Component\Listing\Column;

use Magento\Ui\Component\Form\Element\Select;

/**
 * Class BaseMap
 */
abstract class BaseMap extends Select
{
    const NAME = 'map';

    /**
     * Returns cached map.
     *
     * @return array
     */
    public function getMap()
    {
        if (!$this->hasData('map')) {
            $data = $this->_getMap();
            $this->setData('map', $data);
        }

        return $this->getData('map');
    }

    /**
     * Returns the pass through map.
     *
     * @return array
     */
    abstract protected function _getMap();

    /**
     * Returns the map template.
     *
     * @return string
     */
    public function getMapTemplate()
    {
        return '%value';
    }

    /**
     * Returns the params of given items.
     *
     * @param array $item
     *
     * @return array
     */
    public function getParams(array $item)
    {
        $params       = $this->_getParams($item);
        $placeholders = array_map([
            $this,
            'preparePlaceholder',
        ], array_keys($params));
        $params       = array_combine($placeholders, $params);

        return $params;
    }

    /**
     * Returns the pass through params of given item.
     *
     * @param array $item
     *
     * @return array
     */
    abstract protected function _getParams(array $item);

    /**
     * Returns the prepared placeholder with given key.
     *
     * @param string $key
     *
     * @return string
     */
    private function preparePlaceholder($key)
    {
        return '%' . (is_int($key) ? strval($key + 1) : $key);
    }
}
