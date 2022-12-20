<?php
namespace Erika\Dev\Model;

use Magento\Framework\Model\AbstractModel;

class Digital extends AbstractModel
{
    public function _construct()
    {
        $this->_init('Erika\Dev\Model\ResourceModel\Digital');
    }
}