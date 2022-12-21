<?php

namespace Crons\CronUm\Cron;


use \Magento\Catalog\Model\ProductRepository;
use Psr\Log\LoggerInterface;



class CronUm extends ProductRepository
{
     /**
     * @var \Magento\Catalog\Api\ProductRepository
     */
    protected $productRepository;
    protected $logger;
    public function __construct(\Magento\Catalog\Model\ProductRepository $productRepository, LoggerInterface $loggerInterface)
    {
        $this->productRepository = $productRepository;
        $this->logger = $loggerInterface;
    }
    public function Preco()
    {
        $produtos = $this->productRepository->getList(2);
        foreach($produtos as $produto){
           $preco = $produto->getPrice();
            $novoPreço = $preco * 1.1;
            $precoFinal= $produto->setData('price', $novoPreço);
            $this->logger->info($precoFinal);
        }

    }
}