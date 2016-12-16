<?php
namespace ShareASale\Request;


use ShareASale\Service\RuntimeException;

class GetProducts extends AbstractRequest
{
    // required
    protected $keyword;

    // optional
    protected $merchantId;

    /**
     *
     * @var array
     */
    protected $excludeMerchants = array();


    public function getQueryString()
    {
        return http_build_query($this->toArray());
    }


    public function toArray()
    {
        $args = array_merge(parent::toArray(), array(
            'keyword' => $this->getKeyword(),
            'merchantId' => $this->getMerchantId(),
            'excludeMerchants' => $this->getExcludeMerchants()
        ));
        return array_filter($args);
    }


    /**
     *
     * @return $merchantId
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }


    /**
     *
     * @param $merchantId
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
    }


    /**
     * @return  $keyword
     * @throws RuntimeException
     */
    public function getKeyword()
    {
        if (!$this->keyword) {
            throw new RuntimeException('keyword is required parameter');
        }
        return $this->keyword;
    }


    /**
     *
     * @return $excludeMerchants
     */
    public function getExcludeMerchants()
    {
        return $this->excludeMerchants;
    }


    /**
     *
     * @param $keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }


    /**
     *
     * @param multitype : $excludeMerchants
     */
    public function setExcludeMerchants($excludeMerchants)
    {
        $this->excludeMerchants = $excludeMerchants;
    }
}