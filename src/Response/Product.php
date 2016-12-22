<?php
namespace Firelike\ShareASale\Response;


class Product extends AbstractResponse
{

    protected $productid;

    protected $name;

    protected $merchantid;

    protected $organization;

    protected $link;

    protected $thumbnail;

    protected $bigimage;

    protected $price;

    protected $retailprice;

    protected $category;

    protected $subcategory;

    protected $description;

    protected $custom1;

    protected $custom2;

    protected $custom3;

    protected $custom4;

    protected $custom5;

    protected $lastupdated;

    protected $status;

    protected $manufacture;

    protected $partnumber;

    protected $merchantcategory;

    protected $merchantsubcategory;

    protected $shortdescription;

    protected $isbn;

    protected $upc;

    protected $sku;

    protected $crosssell;

    protected $merchantgroup;

    protected $merchantsubgroup;

    protected $compatiablewith;

    protected $compareto;

    protected $quantitydiscount;

    protected $bestseller;

    protected $addtocarturl;

    protected $reviewsurl;

    protected $option1;

    protected $option2;

    protected $option3;

    protected $option4;

    protected $option5;

    protected $reservedforfutureuse = array();

    protected $www;

    protected $programcategory;

    protected $commissiontext;

    protected $salecomm;

    protected $leadcomm;

    protected $hitcomm;

    protected $cookielength;

    protected $autoapprove;

    protected $autodeposit;

    protected $datafeeditems;

    protected $epc7day;

    protected $epc30day;

    protected $reversalrate7day;

    protected $reversalrate30day;

    protected $avesale7day;

    protected $avesale30day;

    protected $avecomm7day;

    protected $avecomm30day;

    protected $powerranktop100;


    public function toArray()
    {
        return array(
            'productid' => $this->getProductid(),
            'name' => $this->getName(),
            'merchantid' => $this->getMerchantid(),
            'organization' => $this->getOrganization(),
            'link' => $this->getLink(),
            'thumbnail' => $this->getThumbnail(),
            'bigimage' => $this->getBigimage(),
            'price' => $this->getPrice(),
            'retailprice' => $this->getRetailprice(),
            'category' => $this->getCategory(),
            'subcategory' => $this->getSubcategory(),
            'description' => $this->getDescription(),
            'custom1' => $this->getCustom1(),
            'custom2' => $this->getCustom2(),
            'custom3' => $this->getCustom3(),
            'custom4' => $this->getCustom4(),
            'custom5' => $this->getCustom5(),
            'lastupdated' => $this->getLastupdated(),
            'status' => $this->getStatus(),
            'manufacture' => $this->getManufacture(),
            'partnumber' => $this->getPartnumber(),
            'merchantcategory' => $this->getMerchantcategory(),
            'merchantsubcategory' => $this->getMerchantsubcategory(),
            'shortdescription' => $this->getShortdescription(),
            'isbn' => $this->getIsbn(),
            'upc' => $this->getUpc(),
            'sku' => $this->getSku(),
            'crosssell' => $this->getCrosssell(),
            'merchantgroup' => $this->getMerchantgroup(),
            'merchantsubgroup' => $this->getMerchantsubgroup(),
            'compatiablewith' => $this->getCompatiablewith(),
            'compareto' => $this->getCompareto(),
            'quantitydiscount' => $this->getQuantitydiscount(),
            'bestseller' => $this->getBestseller(),
            'addtocarturl' => $this->getAddtocarturl(),
            'reviewsurl' => $this->getReviewsurl(),
            'option1' => $this->getOption1(),
            'option2' => $this->getOption2(),
            'option3' => $this->getOption3(),
            'option4' => $this->getOption4(),
            'option5' => $this->getOption5(),
            'reservedforfutureuse' => $this->getReservedforfutureuse(),
            'www' => $this->getWww(),
            'programcategory' => $this->getProgramcategory(),
            'commissiontext' => $this->getCommissiontext(),
            'salecomm' => $this->getSalecomm(),
            'leadcomm' => $this->getLeadcomm(),
            'hitcomm' => $this->getHitcomm(),
            'cookielength' => $this->getCookielength(),
            'autoapprove' => $this->getAutoapprove(),
            'autodeposit' => $this->getAutodeposit(),
            'datafeeditems' => $this->getDatafeeditems(),
            'epc7day' => $this->getEpc7day(),
            'epc30day' => $this->getEpc30day(),
            'reversalrate7day' => $this->getReversalrate7day(),
            'reversalrate30day' => $this->getReversalrate30day(),
            'avesale7day' => $this->getAvesale7day(),
            'avesale30day' => $this->getAvesale30day(),
            'avecomm7day' => $this->getAvecomm7day(),
            'avecomm30day' => $this->getAvecomm30day(),
            'powerranktop100' => $this->getPowerranktop100()
        );
    }


    /**
     *
     * @return $productid
     */
    public function getProductid()
    {
        return $this->productid;
    }


    /**
     *
     * @return $name
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     *
     * @return $merchantid
     */
    public function getMerchantid()
    {
        return $this->merchantid;
    }


    /**
     *
     * @return $organization
     */
    public function getOrganization()
    {
        return $this->organization;
    }


    /**
     *
     * @return $link
     */
    public function getLink()
    {
        return $this->link;
    }


    /**
     *
     * @return $thumbnail
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }


    /**
     *
     * @return $bigimage
     */
    public function getBigimage()
    {
        return $this->bigimage;
    }


    /**
     *
     * @return $price
     */
    public function getPrice()
    {
        return $this->price;
    }


    /**
     *
     * @return $retailprice
     */
    public function getRetailprice()
    {
        return $this->retailprice;
    }


    /**
     *
     * @return $category
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     *
     * @return $subcategory
     */
    public function getSubcategory()
    {
        return $this->subcategory;
    }


    /**
     *
     * @return $description
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     *
     * @return $custom1
     */
    public function getCustom1()
    {
        return $this->custom1;
    }


    /**
     *
     * @return $custom2
     */
    public function getCustom2()
    {
        return $this->custom2;
    }


    /**
     *
     * @return $custom3
     */
    public function getCustom3()
    {
        return $this->custom3;
    }


    /**
     *
     * @return $custom4
     */
    public function getCustom4()
    {
        return $this->custom4;
    }


    /**
     *
     * @return $custom5
     */
    public function getCustom5()
    {
        return $this->custom5;
    }


    /**
     *
     * @return $lastupdated
     */
    public function getLastupdated()
    {
        return $this->lastupdated;
    }


    /**
     *
     * @return $status
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     *
     * @return $manufacture
     */
    public function getManufacture()
    {
        return $this->manufacture;
    }


    /**
     *
     * @return $partnumber
     */
    public function getPartnumber()
    {
        return $this->partnumber;
    }


    /**
     *
     * @return $merchantcategory
     */
    public function getMerchantcategory()
    {
        return $this->merchantcategory;
    }


    /**
     *
     * @return $merchantsubcategory
     */
    public function getMerchantsubcategory()
    {
        return $this->merchantsubcategory;
    }


    /**
     *
     * @return $shortdescription
     */
    public function getShortdescription()
    {
        return $this->shortdescription;
    }


    /**
     *
     * @return $isbn
     */
    public function getIsbn()
    {
        return $this->isbn;
    }


    /**
     *
     * @return $upc
     */
    public function getUpc()
    {
        return $this->upc;
    }


    /**
     *
     * @return $sku
     */
    public function getSku()
    {
        return $this->sku;
    }


    /**
     *
     * @return $crosssell
     */
    public function getCrosssell()
    {
        return $this->crosssell;
    }


    /**
     *
     * @return $merchantgroup
     */
    public function getMerchantgroup()
    {
        return $this->merchantgroup;
    }


    /**
     *
     * @return $merchantsubgroup
     */
    public function getMerchantsubgroup()
    {
        return $this->merchantsubgroup;
    }


    /**
     *
     * @return $compatiablewith
     */
    public function getCompatiablewith()
    {
        return $this->compatiablewith;
    }


    /**
     *
     * @return $compareto
     */
    public function getCompareto()
    {
        return $this->compareto;
    }


    /**
     *
     * @return $quantitydiscount
     */
    public function getQuantitydiscount()
    {
        return $this->quantitydiscount;
    }


    /**
     *
     * @return $bestseller
     */
    public function getBestseller()
    {
        return $this->bestseller;
    }


    /**
     *
     * @return $addtocarturl
     */
    public function getAddtocarturl()
    {
        return $this->addtocarturl;
    }


    /**
     *
     * @return $reviewsurl
     */
    public function getReviewsurl()
    {
        return $this->reviewsurl;
    }


    /**
     *
     * @return $option1
     */
    public function getOption1()
    {
        return $this->option1;
    }


    /**
     *
     * @return $option2
     */
    public function getOption2()
    {
        return $this->option2;
    }


    /**
     *
     * @return $option3
     */
    public function getOption3()
    {
        return $this->option3;
    }


    /**
     *
     * @return $option4
     */
    public function getOption4()
    {
        return $this->option4;
    }


    /**
     *
     * @return $option5
     */
    public function getOption5()
    {
        return $this->option5;
    }


    /**
     *
     * @return array $reservedforfutureuse
     */
    public function getReservedforfutureuse()
    {
        return $this->reservedforfutureuse;
    }


    /**
     *
     * @return $www
     */
    public function getWww()
    {
        return $this->www;
    }


    /**
     *
     * @return $programcategory
     */
    public function getProgramcategory()
    {
        return $this->programcategory;
    }


    /**
     *
     * @return $commissiontext
     */
    public function getCommissiontext()
    {
        return $this->commissiontext;
    }


    /**
     *
     * @return $salecomm
     */
    public function getSalecomm()
    {
        return $this->salecomm;
    }


    /**
     *
     * @return $leadcomm
     */
    public function getLeadcomm()
    {
        return $this->leadcomm;
    }


    /**
     *
     * @return $hitcomm
     */
    public function getHitcomm()
    {
        return $this->hitcomm;
    }


    /**
     *
     * @return $cookielength
     */
    public function getCookielength()
    {
        return $this->cookielength;
    }


    /**
     *
     * @return $autoapprove
     */
    public function getAutoapprove()
    {
        return $this->autoapprove;
    }


    /**
     *
     * @return $autodeposit
     */
    public function getAutodeposit()
    {
        return $this->autodeposit;
    }


    /**
     *
     * @return $datafeeditems
     */
    public function getDatafeeditems()
    {
        return $this->datafeeditems;
    }


    /**
     *
     * @return $epc7day
     */
    public function getEpc7day()
    {
        return $this->epc7day;
    }


    /**
     *
     * @return $epc30day
     */
    public function getEpc30day()
    {
        return $this->epc30day;
    }


    /**
     *
     * @return $reversalrate7day
     */
    public function getReversalrate7day()
    {
        return $this->reversalrate7day;
    }


    /**
     *
     * @return $reversalrate30day
     */
    public function getReversalrate30day()
    {
        return $this->reversalrate30day;
    }


    /**
     *
     * @return $avesale7day
     */
    public function getAvesale7day()
    {
        return $this->avesale7day;
    }


    /**
     *
     * @return $avesale30day
     */
    public function getAvesale30day()
    {
        return $this->avesale30day;
    }


    /**
     *
     * @return $avecomm7day
     */
    public function getAvecomm7day()
    {
        return $this->avecomm7day;
    }


    /**
     *
     * @return $avecomm30day
     */
    public function getAvecomm30day()
    {
        return $this->avecomm30day;
    }


    /**
     *
     * @return $powerranktop100
     */
    public function getPowerranktop100()
    {
        return $this->powerranktop100;
    }


    /**
     *
     * @param $productid
     */
    public function setProductid($productid)
    {
        $this->productid = $productid;
    }


    /**
     *
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     *
     * @param $merchantid
     */
    public function setMerchantid($merchantid)
    {
        $this->merchantid = $merchantid;
    }


    /**
     *
     * @param $organization
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
    }


    /**
     *
     * @param $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }


    /**
     *
     * @param $thumbnail
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }


    /**
     *
     * @param $bigimage
     */
    public function setBigimage($bigimage)
    {
        $this->bigimage = $bigimage;
    }


    /**
     *
     * @param $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


    /**
     *
     * @param $retailprice
     */
    public function setRetailprice($retailprice)
    {
        $this->retailprice = $retailprice;
    }


    /**
     *
     * @param $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }


    /**
     *
     * @param $subcategory
     */
    public function setSubcategory($subcategory)
    {
        $this->subcategory = $subcategory;
    }


    /**
     *
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


    /**
     *
     * @param $custom1
     */
    public function setCustom1($custom1)
    {
        $this->custom1 = $custom1;
    }


    /**
     *
     * @param $custom2
     */
    public function setCustom2($custom2)
    {
        $this->custom2 = $custom2;
    }


    /**
     *
     * @param $custom3
     */
    public function setCustom3($custom3)
    {
        $this->custom3 = $custom3;
    }


    /**
     *
     * @param $custom4
     */
    public function setCustom4($custom4)
    {
        $this->custom4 = $custom4;
    }


    /**
     *
     * @param $custom5
     */
    public function setCustom5($custom5)
    {
        $this->custom5 = $custom5;
    }


    /**
     *
     * @param $lastupdated
     */
    public function setLastupdated($lastupdated)
    {
        $this->lastupdated = $lastupdated;
    }


    /**
     *
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


    /**
     *
     * @param $manufacture
     */
    public function setManufacture($manufacture)
    {
        $this->manufacture = $manufacture;
    }


    /**
     *
     * @param $partnumber
     */
    public function setPartnumber($partnumber)
    {
        $this->partnumber = $partnumber;
    }


    /**
     *
     * @param $merchantcategory
     */
    public function setMerchantcategory($merchantcategory)
    {
        $this->merchantcategory = $merchantcategory;
    }


    /**
     *
     * @param $merchantsubcategory
     */
    public function setMerchantsubcategory($merchantsubcategory)
    {
        $this->merchantsubcategory = $merchantsubcategory;
    }


    /**
     *
     * @param $shortdescription
     */
    public function setShortdescription($shortdescription)
    {
        $this->shortdescription = $shortdescription;
    }


    /**
     *
     * @param $isbn
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }


    /**
     *
     * @param $upc
     */
    public function setUpc($upc)
    {
        $this->upc = $upc;
    }


    /**
     *
     * @param $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }


    /**
     *
     * @param $crosssell
     */
    public function setCrosssell($crosssell)
    {
        $this->crosssell = $crosssell;
    }


    /**
     *
     * @param $merchantgroup
     */
    public function setMerchantgroup($merchantgroup)
    {
        $this->merchantgroup = $merchantgroup;
    }


    /**
     *
     * @param $merchantsubgroup
     */
    public function setMerchantsubgroup($merchantsubgroup)
    {
        $this->merchantsubgroup = $merchantsubgroup;
    }


    /**
     *
     * @param $compatiablewith
     */
    public function setCompatiablewith($compatiablewith)
    {
        $this->compatiablewith = $compatiablewith;
    }


    /**
     *
     * @param $compareto
     */
    public function setCompareto($compareto)
    {
        $this->compareto = $compareto;
    }


    /**
     *
     * @param $quantitydiscount
     */
    public function setQuantitydiscount($quantitydiscount)
    {
        $this->quantitydiscount = $quantitydiscount;
    }


    /**
     *
     * @param $bestseller
     */
    public function setBestseller($bestseller)
    {
        $this->bestseller = $bestseller;
    }


    /**
     *
     * @param $addtocarturl
     */
    public function setAddtocarturl($addtocarturl)
    {
        $this->addtocarturl = $addtocarturl;
    }


    /**
     *
     * @param $reviewsurl
     */
    public function setReviewsurl($reviewsurl)
    {
        $this->reviewsurl = $reviewsurl;
    }


    /**
     *
     * @param $option1
     */
    public function setOption1($option1)
    {
        $this->option1 = $option1;
    }


    /**
     *
     * @param $option2
     */
    public function setOption2($option2)
    {
        $this->option2 = $option2;
    }


    /**
     *
     * @param $option3
     */
    public function setOption3($option3)
    {
        $this->option3 = $option3;
    }


    /**
     *
     * @param $option4
     */
    public function setOption4($option4)
    {
        $this->option4 = $option4;
    }


    /**
     *
     * @param $option5
     */
    public function setOption5($option5)
    {
        $this->option5 = $option5;
    }


    /**
     *
     * @param multitype : $reservedforfutureuse
     */
    public function setReservedforfutureuse($reservedforfutureuse)
    {
        $this->reservedforfutureuse = $reservedforfutureuse;
    }


    /**
     *
     * @param $www
     */
    public function setWww($www)
    {
        $this->www = $www;
    }


    /**
     *
     * @param $programcategory
     */
    public function setProgramcategory($programcategory)
    {
        $this->programcategory = $programcategory;
    }


    /**
     *
     * @param $commissiontext
     */
    public function setCommissiontext($commissiontext)
    {
        $this->commissiontext = $commissiontext;
    }


    /**
     *
     * @param $salecomm
     */
    public function setSalecomm($salecomm)
    {
        $this->salecomm = $salecomm;
    }


    /**
     *
     * @param $leadcomm
     */
    public function setLeadcomm($leadcomm)
    {
        $this->leadcomm = $leadcomm;
    }


    /**
     *
     * @param $hitcomm
     */
    public function setHitcomm($hitcomm)
    {
        $this->hitcomm = $hitcomm;
    }


    /**
     *
     * @param $cookielength
     */
    public function setCookielength($cookielength)
    {
        $this->cookielength = $cookielength;
    }


    /**
     *
     * @param $autoapprove
     */
    public function setAutoapprove($autoapprove)
    {
        $this->autoapprove = $autoapprove;
    }


    /**
     *
     * @param $autodeposit
     */
    public function setAutodeposit($autodeposit)
    {
        $this->autodeposit = $autodeposit;
    }


    /**
     *
     * @param $datafeeditems
     */
    public function setDatafeeditems($datafeeditems)
    {
        $this->datafeeditems = $datafeeditems;
    }


    /**
     *
     * @param $epc7day
     */
    public function setEpc7day($epc7day)
    {
        $this->epc7day = $epc7day;
    }


    /**
     *
     * @param $epc30day
     */
    public function setEpc30day($epc30day)
    {
        $this->epc30day = $epc30day;
    }


    /**
     *
     * @param $reversalrate7day
     */
    public function setReversalrate7day($reversalrate7day)
    {
        $this->reversalrate7day = $reversalrate7day;
    }


    /**
     *
     * @param $reversalrate30day
     */
    public function setReversalrate30day($reversalrate30day)
    {
        $this->reversalrate30day = $reversalrate30day;
    }


    /**
     *
     * @param $avesale7day
     */
    public function setAvesale7day($avesale7day)
    {
        $this->avesale7day = $avesale7day;
    }


    /**
     *
     * @param $avesale30day
     */
    public function setAvesale30day($avesale30day)
    {
        $this->avesale30day = $avesale30day;
    }


    /**
     *
     * @param $avecomm7day
     */
    public function setAvecomm7day($avecomm7day)
    {
        $this->avecomm7day = $avecomm7day;
    }


    /**
     *
     * @param $avecomm30day
     */
    public function setAvecomm30day($avecomm30day)
    {
        $this->avecomm30day = $avecomm30day;
    }


    /**
     *
     * @param $powerranktop100
     */
    public function setPowerranktop100($powerranktop100)
    {
        $this->powerranktop100 = $powerranktop100;
    }
}