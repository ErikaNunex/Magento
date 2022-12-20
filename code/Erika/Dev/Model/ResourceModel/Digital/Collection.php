<?php
namespace Erika\Dev\Model\ResourceModel\Digital;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init('Erika\Dev\Model\Digital', 'Erika\Dev\Model\ResourceModel\Digital');
    }
}