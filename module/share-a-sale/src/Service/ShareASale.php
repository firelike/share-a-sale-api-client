<?php
namespace ShareASale\Service;

use ShareASale\Request\GetProducts;
use ShareASale\Request\Traffic;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;


class ShareASale
{

    /**
     * @var string
     */
    protected $serviceUrl;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $affiliateId;

    /**
     * @var string
     */
    protected $token;

    /**
     * @var string
     */
    protected $secretKey;


    public function activity($options = array())
    {
        $action = 'activity';
        $arguments = array_merge($this->getDefaultArguments(), ['action' => $action]);
        $arguments = array_merge($arguments, $options);

        $httpResponse = $this->apiCall($action, $arguments);
        $recordKey = 'activitydetailsrecord';
        return $this->responseToRecords($httpResponse, $recordKey);
    }

    public function activitySummary($options = array())
    {
        $action = 'activitySummary';
        $arguments = array_merge($this->getDefaultArguments(), ['action' => $action]);
        $arguments = array_merge($arguments, $options);

        $httpResponse = $this->apiCall($action, $arguments);
        $recordKey = 'activitysummaryreportrecord';
        return $this->responseToRecords($httpResponse, $recordKey);
    }

    public function merchantTimespan($options = array())
    {
        $action = 'merchantTimespan';
        $arguments = array_merge($this->getDefaultArguments(), ['action' => $action]);
        $arguments = array_merge($arguments, $options);

        $httpResponse = $this->apiCall($action, $arguments);
        $recordKey = 'merchanttimespanrecord';
        return $this->responseToRecords($httpResponse, $recordKey);
    }

    public function monthlySummary($options = array())
    {
        $action = 'monthlySummary';
        $arguments = array_merge($this->getDefaultArguments(), ['action' => $action]);
        $arguments = array_merge($arguments, $options);

        $httpResponse = $this->apiCall($action, $arguments);
        $recordKey = 'monthlysummaryrecord';
        return $this->responseToRecords($httpResponse, $recordKey);
    }

    public function traffic($options = array())
    {
        $action = 'traffic';
        $arguments = array_merge($this->getDefaultArguments(), ['action' => $action]);
        $arguments = array_merge($arguments, $options);

        $request = new Traffic($arguments);

        $httpResponse = $this->apiCall($action, array_filter($request->toArray()));
        $recordKey = 'trafficreport';
        return $this->responseToRecords($httpResponse, $recordKey);

    }

    public function getProducts($options = array())
    {
        $action = 'getProducts';
        $arguments = array_merge($this->getDefaultArguments(), ['action' => $action]);
        $arguments = array_merge($arguments, $options);

        $request = new GetProducts($arguments);

        $httpResponse = $this->apiCall($action, array_filter($request->toArray()));
        $recordKey = 'getProductsrecord';
        return $this->responseToRecords($httpResponse, $recordKey);
    }

    public function invalidLinks($options = array())
    {
        $action = 'invalidLinks';
        $arguments = array_merge($this->getDefaultArguments(), ['action' => $action]);
        $arguments = array_merge($arguments, $options);

        $httpResponse = $this->apiCall($action, $arguments);
        $recordKey = 'invalidlinksrecords';
        return $this->responseToRecords($httpResponse, $recordKey);
    }

    public function merchantDataFeeds($options = array())
    {
        $action = 'merchantDataFeeds';
        $arguments = array_merge($this->getDefaultArguments(), ['action' => $action]);
        $arguments = array_merge($arguments, $options);

        $httpResponse = $this->apiCall($action, $arguments);
        $recordKey = 'datafeedlistreportrecord';
        return $this->responseToRecords($httpResponse, $recordKey);
    }

    public function couponDeals($options = array())
    {
        $action = 'couponDeals';
        $arguments = array_merge($this->getDefaultArguments(), ['action' => $action]);
        $arguments = array_merge($arguments, $options);

        $httpResponse = $this->apiCall($action, $arguments);
        $recordKey = 'dealcouponlistreportrecord';
        return $this->responseToRecords($httpResponse, $recordKey);
    }

    public function merchantStatus($options = array())
    {
        $action = 'merchantStatus';
        $arguments = array_merge($this->getDefaultArguments(), ['action' => $action]);
        $arguments = array_merge($arguments, $options);

        $httpResponse = $this->apiCall($action, $arguments);
        $recordKey = 'merchantstatusreportrecord';
        return $this->responseToRecords($httpResponse, $recordKey);
    }

    public function merchantCreative($options = array())
    {
        $action = 'merchantCreative';
        $arguments = array_merge($this->getDefaultArguments(), ['action' => $action]);
        $arguments = array_merge($arguments, $options);

        $httpResponse = $this->apiCall($action, $arguments);
        $recordKey = 'getlinksreportrecord';
        return $this->responseToRecords($httpResponse, $recordKey);
    }

    public function merchantGiftCard($options = array())
    {
        $action = 'merchantGiftCard';
        $arguments = array_merge($this->getDefaultArguments(), ['action' => $action]);
        $arguments = array_merge($arguments, $options);

        $httpResponse = $this->apiCall($action, $arguments);
        $recordKey = 'merchantGiftCard';
        return $this->responseToRecords($httpResponse, $recordKey);
    }

    public function paymentSummary($options = array())
    {
        $action = 'paymentSummary';
        $arguments = array_merge($this->getDefaultArguments(), ['action' => $action]);
        $arguments = array_merge($arguments, $options);

        $httpResponse = $this->apiCall($action, $arguments);
        $recordKey = 'paymentSummary';
        return $this->responseToRecords($httpResponse, $recordKey);
    }

    public function merchantSearch($options = array())
    {
        $action = 'merchantSearch';
        $arguments = array_merge($this->getDefaultArguments(), ['action' => $action]);
        $arguments = array_merge($arguments, $options);

        $httpResponse = $this->apiCall($action, $arguments);
        $recordKey = 'merchantSearchrecord';
        return $this->responseToRecords($httpResponse, $recordKey);
    }

    protected function getDefaultArguments()
    {
        return array(
            'version' => $this->getVersion(),
            'affiliateId' => $this->getAffiliateId(),
            'token' => $this->getToken(),
            'xmlFormat' => 1
        );

    }

    protected function responseToRecords(\GuzzleHttp\Psr7\Response $httpResponse, $recordKey)
    {
        // parse response body
        $xml = simplexml_load_string($httpResponse->getBody()->getContents());

        $records = array();
        if ($xml instanceof \SimpleXMLElement) {

            // convert xml to an array
            $arr = @json_decode(@json_encode($xml), true);

            if (isset($arr[$recordKey])) {
                $records = $arr[$recordKey];
            }

            // normalize the result array if we have a single result
            if (is_array($records) && !array_key_exists(0, $records)) {
                $records = array(
                    $records
                );
            }
        }

        return $records;
    }

    public function apiCall($actionVerb, $query)
    {
        try {

            $client = new Client([
                'base_uri' => $this->getServiceUrl(),
            ]);

            $myTimeStamp = gmdate(DATE_RFC1123);
            $sig = $this->getToken() . ':' . $myTimeStamp . ':' . $actionVerb . ':' . $this->getSecretKey();
            $sigHash = hash("sha256", $sig);


            $httpResponse = $client->request('GET', '/x.cfm', array(
                    'query' => $query,
                    'headers' => array(
                        'x-ShareASale-Date' => $myTimeStamp,
                        'x-ShareASale-Authentication' => $sigHash
                    )
                )
            );

            if (!$httpResponse instanceof \GuzzleHttp\Psr7\Response) {
                throw new \Exception('Expected instance of GuzzleHttp\Psr7\Response not received');
            }

            if (!$httpResponse->getBody() instanceof \GuzzleHttp\Psr7\Stream) {
                throw new \Exception('Expected instance of GuzzleHttp\Psr7\Stream not received');
            }

            if ($httpResponse->getReasonPhrase() != 'OK') {
                throw new \Exception('Expected response not received. Response details: ' . $httpResponse->getBody()->getContents());
            }

            return $httpResponse;

        } catch (\GuzzleHttp\Exception\RequestException $zhce) {
            $message = 'Error in request to Web service: ' . $zhce->getMessage();
            throw new \Exception($message, $zhce->getCode());

        } catch (ClientException $zhce) {
            $message = 'Error in request to Web service: ' . $zhce->getMessage();
            throw new \Exception($message, $zhce->getCode());
        }

    }

    /**
     * @return string
     */
    public function getServiceUrl()
    {
        return $this->serviceUrl;
    }

    /**
     * @param string $serviceUrl
     */
    public function setServiceUrl($serviceUrl)
    {
        $this->serviceUrl = $serviceUrl;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getAffiliateId()
    {
        return $this->affiliateId;
    }

    /**
     * @param string $affiliateId
     */
    public function setAffiliateId($affiliateId)
    {
        $this->affiliateId = $affiliateId;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * @param string $secretKey
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
    }


}