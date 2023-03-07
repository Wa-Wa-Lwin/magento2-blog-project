<?php

declare(strict_types=1); 


/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE, 
    'MageMastery_blog', // Folder name
    __DIR__
);

?> 