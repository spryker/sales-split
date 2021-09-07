<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SalesSplit;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

/**
 * @method \Spryker\Zed\SalesSplit\SalesSplitConfig getConfig()
 */
class SalesSplitDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @var string
     */
    public const SALES_QUERY_CONTAINER = 'SALES_QUERY_CONTAINER';

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function provideBusinessLayerDependencies(Container $container)
    {
        $container->set(static::SALES_QUERY_CONTAINER, function (Container $container) {
            return $container->getLocator()->sales()->queryContainer();
        });

        return $container;
    }
}
