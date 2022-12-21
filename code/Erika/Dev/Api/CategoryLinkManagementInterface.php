<?php
namespace Erika\Dev\Api;
 
/**
 * @api
 */
interface CategoryLinkManagementInterface
{
    /**
     * Get products assigned to a category
     *

     * @return \Erika\Dev\Api\Data\CategoryProductLinkInterface[]
     */
    public function getAssignedProducts();
}