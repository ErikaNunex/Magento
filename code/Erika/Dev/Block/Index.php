<?php
namespace Erika\Dev\Block;
use Erika\Dev\Model\DigitalFactory;
class Index extends \Magento\Framework\View\Element\Template
{
    protected $erikaFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, 
    DigitalFactory $erikaFactory, array $data = []) {
        $this->erikaFactory = $erikaFactory;
        $this->_productCollectionFactory = $productCollectionFactory;
        return parent::__construct($context);
    }

    public function getProductCollection()
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        $collection->setPageSize(3); // fetching only 3 products
        return $collection;
    }

    public function getDados(){
        $dados = $this->erikaFactory->create()->getCollection();
        return $dados->getData();
    }

    public function saveData(){
        $dados = $this->erikaFactory->create();
        $dados->setData([
            'author_name'=>'Erika',
            'email'=>'erika@email.com',
            'description'=>'agora vai',
        ]
    );
    $dados->save();
    }
}