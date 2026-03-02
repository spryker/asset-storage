<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\AssetStorage\Persistence;

use Generated\Shared\Transfer\AssetSlotStorageTransfer;

interface AssetStorageEntityManagerInterface
{
    public function saveAssetSlotStorage(AssetSlotStorageTransfer $assetSlotStorageTransfer): void;

    public function deleteAssetSlotStorage(AssetSlotStorageTransfer $assetSlotStorageTransfer): void;
}
