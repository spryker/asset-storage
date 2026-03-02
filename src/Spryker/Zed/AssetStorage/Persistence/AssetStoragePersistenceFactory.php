<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\AssetStorage\Persistence;

use Orm\Zed\AssetStorage\Persistence\SpyAssetSlotStorage;
use Orm\Zed\AssetStorage\Persistence\SpyAssetSlotStorageQuery;
use Spryker\Zed\AssetStorage\Persistence\Mapper\AssetStorageMapper;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \Spryker\Zed\AssetStorage\AssetStorageConfig getConfig()
 * @method \Spryker\Zed\AssetStorage\Persistence\AssetStorageEntityManagerInterface getEntityManager()
 * @method \Spryker\Zed\AssetStorage\Persistence\AssetStorageRepositoryInterface getRepository()
 */
class AssetStoragePersistenceFactory extends AbstractPersistenceFactory
{
    public function createAssetSlotStorageQuery(): SpyAssetSlotStorageQuery
    {
        return SpyAssetSlotStorageQuery::create();
    }

    public function createAssetStorageMapper(): AssetStorageMapper
    {
        return new AssetStorageMapper();
    }

    public function createRepository(): AssetStorageRepositoryInterface
    {
        return new AssetStorageRepository();
    }

    public function createSpyAssetSlotStorage(): SpyAssetSlotStorage
    {
        return new SpyAssetSlotStorage();
    }
}
