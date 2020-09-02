<?php

namespace Rapidmail\Oxid6Module\Helper;

use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\EshopCommunity\Internal\Common\Database\QueryBuilderFactory;
use OxidEsales\EshopCommunity\Internal\Container\ContainerFactory;
use OxidEsales\EshopCommunity\Internal\Framework\Database\QueryBuilderFactoryInterface;

/**
 * DatabaseHelper
 */
class DatabaseHelper
{

    /**
     * @return \OxidEsales\Eshop\Core\Database\Adapter\DatabaseInterface
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     */
    public static function getDatabaseAdapter()
    {
        return DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC);
    }

    /**
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Database\QueryBuilderFactoryInterface
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     * @throws \ReflectionException
     */
    public static function getQueryBuilderFactory()
    {
        $container = ContainerFactory::getInstance()->getContainer();
        return $container->get(QueryBuilderFactoryInterface::class);
    }

}
