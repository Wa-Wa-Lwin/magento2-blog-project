<?php 

declare(strict_types=1); 

namespace MageMastery\Blog\Model; 

class Post extends AbstractModel
{
    protected function _construct()
    {
        $this->_init();
        parent::_construct(); 
    }
    
}

?> 
