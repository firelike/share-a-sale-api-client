<?php
namespace Firelike\ShareASale\Controller;

use Laminas\Mvc\Console\Controller\AbstractConsoleController;


class ConsoleController extends AbstractConsoleController
{
    /**
     * @var \Firelike\ShareASale\Service\ShareASaleService
     */
    protected $service;

    public function activityAction()
    {
        $this->markBegin();

        $options = array(
            'dateStart' => '04/01/2013',
        );
        $records = $this->getService()->activity($options);
        var_dump($records);

        $this->markEnd();
    }

    public function activitySummaryAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->activitySummary($options);
        var_dump($records);


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
        var_dump($records);

        $this->markEnd();
    }

    public function dailyActivityAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->dailyActivity($options);
        var_dump($records);

        $this->markEnd();
    }

    public function monthlySummaryAction()
    {
        $this->markBegin();

        $options = array(
            'dateMonth' => '04/01/2016'
        );
        $records = $this->getService()->monthlySummary($options);
        var_dump($records);

        $this->markEnd();
    }

    public function voidtrailAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->voidtrail($options);
        var_dump($records);

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
        var_dump($records);

        $this->markEnd();
    }

    public function apitokencountAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->apitokencount($options);
        var_dump($records);

        $this->markEnd();
    }

    public function getProductsAction()
    {
        $this->markBegin();

        $options = [
            'keyword' => 'baby'
        ];
        $records = $this->getService()->getProducts($options);
        var_dump($records);

        $this->markEnd();
    }

    public function invalidLinksAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->invalidLinks($options);
        var_dump($records);

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
        var_dump($records);

        $this->markEnd();
    }

    public function merchantDataFeedsAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->merchantDataFeeds($options);
        var_dump($records);

        $this->markEnd();
    }

    public function couponDealsAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->couponDeals($options);
        var_dump($records);

        $this->markEnd();
    }

    public function merchantStatusAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->merchantStatus($options);
        var_dump($records);

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
        var_dump($records);

        $this->markEnd();
    }


    public function merchantGiftCardAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->merchantGiftCard($options);
        var_dump($records);

        $this->markEnd();
    }

    public function edittrailAction()
    {
        $this->markBegin();

        $options = [
            'dateStart' => '10/10/2016'
        ];
        $records = $this->getService()->edittrail($options);
        var_dump($records);

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
        var_dump($records);

        $this->markEnd();
    }


    public function merchantSearchAction()
    {
        $this->markBegin();

        $options = [
            'Keyword' => 'Food'
        ];
        $records = $this->getService()->merchantSearch($options);
        var_dump($records);

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
        var_dump($records);

        $this->markEnd();
    }

    public function ledgerAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->ledger($options);
        var_dump($records);

        $this->markEnd();
    }

    public function balanceAction()
    {
        $this->markBegin();

        $options = [];
        $records = $this->getService()->balance($options);
        var_dump($records);

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
     * @return \Firelike\ShareASale\Service\ShareASaleService
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param \Firelike\ShareASale\Service\ShareASaleService $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }


}

