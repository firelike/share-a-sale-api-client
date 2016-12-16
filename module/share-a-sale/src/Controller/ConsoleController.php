<?php
namespace ShareASale\Controller;

use Zend\Mvc\Console\Controller\AbstractConsoleController;


class ConsoleController extends AbstractConsoleController
{
    /**
     * @var \ShareASale\Service\ShareASaleService
     */
    protected $service;

    public function activityAction()
    {
        $this->markBegin();

        $options = array(
            'dateStart' => '04/01/2013',
        );
        $records = $this->getService()->activity($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }

    public function activitySummaryAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->activitySummary($options);
        \Zend\Debug\Debug::dump($records);


        $this->markEnd();
    }

    public function merchantTimespanAction()
    {
        $this->markBegin();

        $options = array(
            'dateStart' => '04/01/2016',
            'merchantId' => '12943'
            // random house
        );
        $records = $this->getService()->merchantTimespan($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }

    public function dailyActivityAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->dailyActivity($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }

    public function monthlySummaryAction()
    {
        $this->markBegin();

        $options = array(
            'dateMonth' => '04/01/2016'
        );
        $records = $this->getService()->monthlySummary($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }

    public function voidtrailAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->voidtrail($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }

    public function trafficAction()
    {
        $this->markBegin();

        $options = array(
            'dateStart' => '04/01/2013',
            'dateEnd' => '04/30/2013',
        );
        $records = $this->getService()->traffic($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }

    public function apitokencountAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->apitokencount($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }

    public function getProductsAction()
    {
        $this->markBegin();

        $options = [
            'keyword' => 'baby'
        ];
        $records = $this->getService()->getProducts($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }

    public function invalidLinksAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->invalidLinks($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }

    public function orderInquiryAction()
    {
        $this->markBegin();

        $options = [
            'merchantId' => '12943',
            'orderDate' => '10/10/2016',
            'orderNumber' => '123456',
        ];
        $records = $this->getService()->orderInquiry($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }

    public function merchantDataFeedsAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->merchantDataFeeds($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }

    public function couponDealsAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->couponDeals($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }

    public function merchantStatusAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->merchantStatus($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }

    public function merchantCreativeAction()
    {
        $this->markBegin();

        // random house
        $options = [
            'merchantId' => '12943'
        ];
        $records = $this->getService()->merchantCreative($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }


    public function merchantGiftCardAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->merchantGiftCard($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }

    public function edittrailAction()
    {
        $this->markBegin();

        $options = [
            'dateStart' => '10/10/2016'
        ];
        $records = $this->getService()->edittrail($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }

    public function paymentSummaryAction()
    {
        $this->markBegin();

        // must be 20th of the month within last 12 mo.
        $options = [
            'paymentDate' => '10/20/2016'
        ];
        $records = $this->getService()->paymentSummary($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }


    public function merchantSearchAction()
    {
        $this->markBegin();

        $options = [
            'Keyword' => 'Food'
        ];
        $records = $this->getService()->merchantSearch($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }

    public function merchantSearchProductAction()
    {
        $this->markBegin();

        $options = [
            'keyword' => 'baseball',
            'notjoined' => 1
        ];
        $records = $this->getService()->merchantSearchProduct($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }

    public function ledgerAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->ledger($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }

    public function balanceAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->balance($options);
        \Zend\Debug\Debug::dump($records);

        $this->markEnd();
    }

    public function markBegin()
    {
        $this->getConsole()->writeLine('============== BEGIN ==============');
    }

    public function markEnd()
    {
        $request = $this->getRequest();
        $verbose = $request->getParam('verbose') || $request->getParam('v');

        if ($verbose) {
            $this->getConsole()->writeLine("Done");
        }

        $this->getConsole()->writeLine('============== END ==============');
    }

    /**
     * @return \ShareASale\Service\ShareASaleService
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param \ShareASale\Service\ShareASaleService $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }


}

