<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Eav\Model;

/**
 * EAV attribute model factory
 *
 * @author     Magento Core Team <core@magentocommerce.com>
 * @codeCoverageIgnore
 */
class AttributeFactory
{
    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager;

    /**
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager)
    {
        $this->_objectManager = $objectManager;
    }

    /**
     * Create new Eav attribute instance
     *
     * @param string $className
     * @param array $arguments
     * @return mixed
     */
    public function createAttribute($className, $arguments = [])
    {
        return $this->_objectManager->create($className, ['data' => $arguments]);
    }
}
