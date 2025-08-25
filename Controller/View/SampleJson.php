<?php

namespace Webito\FrontendDevelopmentTest\Controller\View;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class SampleJson implements HttpGetActionInterface
{
    protected JsonFactory $jsonFactory;

    /**
     * @param JsonFactory $jsonFactory
     */
    public function __construct(JsonFactory $jsonFactory)
    {
        $this->jsonFactory = $jsonFactory;
    }


    public function execute()
    {
        $result = $this->jsonFactory->create();
        return $result->setData([
            'test1' => 'Test 1',
            'test2' => 'Test 2',
            'test3' => 'Test 3'
        ]);
    }
}
