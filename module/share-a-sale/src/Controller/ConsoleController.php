<?php
namespace ShareASale\Controller;

use Zend\Mvc\Console\Controller\AbstractConsoleController;


class ConsoleController extends AbstractConsoleController
{
    /**
     * @var \ShareASale\Service\ShareASale
     */
    protected $service;

    public function activityAction()
    {
        $this->markBegin();

        $request = $this->getRequest();
        $verbose = $request->getParam('verbose') || $request->getParam('v');

        $options = array(
            'dateStart' => '04/01/2013',
        );
        $records = $this->getService()->activity($options);
        \Zend\Debug\Debug::dump($records);

        if ($verbose) {
            $this->getConsole()->writeLine("Done");
        }

        $this->markEnd();
    }

    public function activitySummaryAction()
    {
        $this->markBegin();

        $request = $this->getRequest();
        $verbose = $request->getParam('verbose') || $request->getParam('v');

        $options = [];
        $records = $this->getService()->activitySummary($options);
        \Zend\Debug\Debug::dump($records);

        if ($verbose) {
            $this->getConsole()->writeLine("Done");
        }

        $this->markEnd();
    }

    public function merchantTimespanAction()
    {
        $this->markBegin();

        $request = $this->getRequest();
        $verbose = $request->getParam('verbose') || $request->getParam('v');

        $options = array(
            'dateStart' => '04/01/2016',
            'merchantId' => '12943'
            // random house
        );
        $records = $this->getService()->merchantTimespan($options);
        \Zend\Debug\Debug::dump($records);

        if ($verbose) {
            $this->getConsole()->writeLine("Done");
        }

        $this->markEnd();
    }

    public function monthlySummaryAction()
    {
        $this->markBegin();

        $request = $this->getRequest();
        $verbose = $request->getParam('verbose') || $request->getParam('v');

        $options = array(
            'dateMonth' => '04/01/2016'
        );
        $records = $this->getService()->monthlySummary($options);
        \Zend\Debug\Debug::dump($records);

        if ($verbose) {
            $this->getConsole()->writeLine("Done");
        }

        $this->markEnd();
    }

    public function trafficAction()
    {
        $this->markBegin();

        $request = $this->getRequest();
        $verbose = $request->getParam('verbose') || $request->getParam('v');

        $options = array(
            'dateStart' => '04/01/2013',
            'dateEnd' => '04/30/2013',
        );
        $items = $this->getService()->traffic($options);

        foreach ($items as $item) {
            \Zend\Debug\Debug::dump($item);
        }

        if ($verbose) {
            $this->getConsole()->writeLine("Done");
        }

        $this->markEnd();
    }

    public function getProductsAction()
    {
        $this->markBegin();

        $request = $this->getRequest();
        $verbose = $request->getParam('verbose') || $request->getParam('v');

        $options = [
            'keyword' => 'baby'
        ];
        $records = $this->getService()->getProducts($options);
        \Zend\Debug\Debug::dump($records);

        if ($verbose) {
            $this->getConsole()->writeLine("Done");
        }

        $this->markEnd();
    }

    public function invalidLinksAction()
    {
        $this->markBegin();

        $request = $this->getRequest();
        $verbose = $request->getParam('verbose') || $request->getParam('v');

        $options = [];
        $records = $this->getService()->invalidLinks($options);
        \Zend\Debug\Debug::dump($records);

        if ($verbose) {
            $this->getConsole()->writeLine("Done");
        }

        $this->markEnd();
    }

    public function couponDealsAction()
    {
        $this->markBegin();

        $request = $this->getRequest();
        $verbose = $request->getParam('verbose') || $request->getParam('v');

        $options = [];
        $records = $this->getService()->couponDeals($options);
        \Zend\Debug\Debug::dump($records);

        if ($verbose) {
            $this->getConsole()->writeLine("Done");
        }

        $this->markEnd();
    }

    public function merchantStatusAction()
    {
        $this->markBegin();

        $request = $this->getRequest();
        $verbose = $request->getParam('verbose') || $request->getParam('v');

        $options = [];
        $records = $this->getService()->merchantStatus($options);
        \Zend\Debug\Debug::dump($records);

        if ($verbose) {
            $this->getConsole()->writeLine("Done");
        }

        $this->markEnd();
    }

    public function merchantCreativeAction()
    {
        $this->markBegin();

        $request = $this->getRequest();
        $verbose = $request->getParam('verbose') || $request->getParam('v');

        // random house
        $options = [
            'merchantId' => '12943'
        ];
        $records = $this->getService()->merchantCreative($options);
        \Zend\Debug\Debug::dump($records);

        if ($verbose) {
            $this->getConsole()->writeLine("Done");
        }

        $this->markEnd();
    }

    public function merchantDataFeedsAction()
    {
        $this->markBegin();

        $request = $this->getRequest();
        $verbose = $request->getParam('verbose') || $request->getParam('v');

        $options = [];
        $records = $this->getService()->merchantDataFeeds($options);
        \Zend\Debug\Debug::dump($records);

        if ($verbose) {
            $this->getConsole()->writeLine("Done");
        }

        $this->markEnd();
    }

    public function merchantGiftCardAction()
    {
        $this->markBegin();

        $request = $this->getRequest();
        $verbose = $request->getParam('verbose') || $request->getParam('v');

        $options = [];
        $records = $this->getService()->merchantGiftCard($options);
        \Zend\Debug\Debug::dump($records);

        if ($verbose) {
            $this->getConsole()->writeLine("Done");
        }

        $this->markEnd();
    }

    public function paymentSummaryAction()
    {
        $this->markBegin();

        $request = $this->getRequest();
        $verbose = $request->getParam('verbose') || $request->getParam('v');

        // must be 20th of the month within last 12 mo.
        $options = ['paymentDate'=>'10/20/2016'];
        $records = $this->getService()->paymentSummary($options);
        \Zend\Debug\Debug::dump($records);

        if ($verbose) {
            $this->getConsole()->writeLine("Done");
        }

        $this->markEnd();
    }


    public function merchantSearchAction()
    {
        $this->markBegin();

        $request = $this->getRequest();
        $verbose = $request->getParam('verbose') || $request->getParam('v');

        $options = [
            'Keyword'=>'Food'
        ];
        $records = $this->getService()->merchantSearch($options);
        \Zend\Debug\Debug::dump($records);

        if ($verbose) {
            $this->getConsole()->writeLine("Done");
        }

        $this->markEnd();
    }


    public function markBegin()
    {
        $this->getConsole()->writeLine('============== BEGIN ==============');
    }

    public function markEnd()
    {
        $this->getConsole()->writeLine('============== END ==============');
    }

    /**
     * @return \ShareASale\Service\ShareASale
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param \ShareASale\Service\ShareASale $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }


}

