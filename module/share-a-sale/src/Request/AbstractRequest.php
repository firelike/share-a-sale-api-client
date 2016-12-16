<?php
namespace ShareASale\Request;


use ShareASale\Service\RuntimeException;

abstract class AbstractRequest
{

    protected $version;

    protected $action;

    protected $affiliateId;

    protected $token;

    protected $xmlFormat;


    public function __construct($options = null)
    {
        if (null !== $options) {
            if (is_string($options)) {
                $options = $this->_loadConfig($options);
            } elseif ($options instanceof \Zend\Config\Config) {
                $options = $options->toArray();
            } elseif (!is_array($options)) {
                throw new RuntimeException('Invalid options provided; must be location of config file, a config object, or an array');
            }

            $this->setOptions($options);
        }
    }


    public function setOptions(array $options)
    {
        foreach ($options as $prop => $value) {

            if (method_exists($this, 'set' . ucfirst($prop))) {
                call_user_func(array(
                    $this,
                    'set' . ucfirst($prop)
                ), $value);
            } else {
                $this->{$prop} = $value;
            }
        }
    }


    public function toArray()
    {
        return array(
            'version' => $this->getVersion(),
            'action' => $this->getAction(),
            'affiliateId' => $this->getAffiliateId(),
            'token' => $this->getToken(),
            'xmlFormat' => $this->getXmlFormat()
        );
    }


    /**
     *
     * @return $version
     */
    public function getVersion()
    {
        if (!$this->version) {
            throw new Exception('version is required parameter');
        }
        return $this->version;
    }


    /**
     *
     * @return $action
     */
    public function getAction()
    {
        if (!$this->action) {
            throw new Exception('action is required parameter');
        }
        return $this->action;
    }


    /**
     *
     * @return $affiliateId
     */
    public function getAffiliateId()
    {
        if (!$this->affiliateId) {
            throw new Exception('affiliateId is required parameter');
        }
        return $this->affiliateId;
    }


    /**
     *
     * @return $token
     */
    public function getToken()
    {
        if (!$this->token) {
            throw new Exception('token is required parameter');
        }
        return $this->token;
    }


    /**
     *
     * @return $xmlFormat
     */
    public function getXmlFormat()
    {
        return $this->xmlFormat;
    }


    /**
     *
     * @param $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }


    /**
     *
     * @param $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }


    /**
     *
     * @param $affiliateId
     */
    public function setAffiliateId($affiliateId)
    {
        $this->affiliateId = $affiliateId;
    }


    /**
     *
     * @param $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }


    /**
     *
     * @param $xmlFormat
     */
    public function setXmlFormat($xmlFormat)
    {
        $this->xmlFormat = $xmlFormat;
    }
}
