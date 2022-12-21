<?php
namespace Erika\Dev\Api;
 
/**
 * @api 
 */
interface ProductLinkManagementInterface
{
    /**
     * Get products assigned to on ID
     *
    * @param int $id
     * @return \Erika\Dev\Api\Data\CategoryProductLinkInterface[]
     */
    public function getAssignedProductById($id);
}