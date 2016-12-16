<?php
namespace ShareASale\Request;


class Traffic extends AbstractRequest
{
    // required
    protected $dateStart;


    // conditional
    protected $bannerType;

    protected $merchantId;

    // optional
    protected $dateEnd;

    protected $groupBy;

    protected $bannerID;

    protected $afftrack;

    protected $sortCol;

    protected $sortDir;


    public function getQueryString()
    {
        return http_build_query($this->toArray());
    }


    public function toArray()
    {
        $args = array_merge(parent::toArray(), array(
            'dateStart' => $this->getDateStart(),
            'dateEnd' => $this->getDateEnd(),
            'bannerType' => $this->getBannerType(),
            'merchantId' => $this->getMerchantId(),
            'groupBy' => $this->getGroupBy(),
            'bannerID' => $this->getBannerID(),
            'afftrack' => $this->getAfftrack(),
            'sortCol' => $this->getSortCol(),
            'sortDir' => $this->getSortDir()
        ));

        return array_filter($args);
    }


    /**
     *
     * @return $dateStart
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }


    /**
     *
     * @return $bannerType
     */
    public function getBannerType()
    {
        return $this->bannerType;
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
     * @return $dateEnd
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }


    /**
     *
     * @return $groupBy
     */
    public function getGroupBy()
    {
        return $this->groupBy;
    }


    /**
     *
     * @return $bannerID
     */
    public function getBannerID()
    {
        return $this->bannerID;
    }


    /**
     *
     * @return $afftrack
     */
    public function getAfftrack()
    {
        return $this->afftrack;
    }


    /**
     *
     * @return $sortCol
     */
    public function getSortCol()
    {
        return $this->sortCol;
    }


    /**
     *
     * @return $sortDir
     */
    public function getSortDir()
    {
        return $this->sortDir;
    }


    /**
     *
     * @param $dateStart
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    }


    /**
     *
     * @param $bannerType
     */
    public function setBannerType($bannerType)
    {
        $this->bannerType = $bannerType;
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
     *
     * @param $dateEnd
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    }


    /**
     *
     * @param $groupBy
     */
    public function setGroupBy($groupBy)
    {
        $this->groupBy = $groupBy;
    }


    /**
     *
     * @param $bannerID
     */
    public function setBannerID($bannerID)
    {
        $this->bannerID = $bannerID;
    }


    /**
     *
     * @param $afftrack
     */
    public function setAfftrack($afftrack)
    {
        $this->afftrack = $afftrack;
    }


    /**
     *
     * @param $sortCol
     */
    public function setSortCol($sortCol)
    {
        $this->sortCol = $sortCol;
    }


    /**
     *
     * @param $sortDir
     */
    public function setSortDir($sortDir)
    {
        $this->sortDir = $sortDir;
    }
}