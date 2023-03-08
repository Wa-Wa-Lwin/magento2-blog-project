<?php

declare(strict_types=1);

namespace MageMastery\Blog\Model\ResourceModel;

//use Laminas\Feed\Reader\Collection\AbstractCollection;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection; 

use Magento\Framework\Model\ResourceModel\Post as PostResource; 


use \MageMastery\Blog\Model\Post; 

class Collection extends AbstractCollection
{
    protected function __construct()
    {
        $this->_init(Post::class,PostResource::class);       
    }

}


?> 


