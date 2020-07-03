<?php
namespace Firelike\ShareASale\Validator;


use Laminas\Validator\AbstractValidator;
use Laminas\Validator\InArray;

class ProperServiceMethodParametersValidator extends AbstractValidator
{

    /**
     * @param mixed $value
     * @return bool
     */
    public function isValid($value)
    {
        $inArrayValidator = new InArray();
        $serviceMethod = $this->getOption('serviceMethod');
        $inArrayValidator->setHaystack($this->getParameters($serviceMethod));

        foreach ($value as $key => $option) {
            if (!$inArrayValidator->isValid($key)) {
                $this->setMessage(sprintf('Improper service method parameter provided: %s', $key));
                return false;
            }
        }
        return true;
    }

    protected function getParameters($serviceMethod)
    {
        $defaultParameters = [
            'version',
            'action',
            'affiliateId',
            'token',
            'XMLFormat',
            'format'
        ];
        $methodParameters = [
            'activity' =>
                [
                    'dateStart',
                    'dateEnd',
                    'merchantId',
                    'lockDate',
                    'paidDate',
                    'sortCol',
                    'sortDir',
                ],
            'activitySummary' =>
                [
                    'merchantId',
                    'filterCol',
                    'filterSpan',
                    'filterValue',
                    'sortCol',
                    'sortDir',
                ],
            'merchantTimespan' =>
                [
                    'dateStart',
                    'dateEnd',
                    'merchantId',
                    'sortCol',
                    'sortDir',
                ],
            'dailyActivity' =>
                [
                    'distinctlink',
                    'sortCol',
                    'sortDir',
                ],
            'monthlySummary' =>
                [
                    'dateMonth',
                    'sortCol',
                    'sortDir',
                ],
            'voidtrail' =>
                [
                    'dateStart',
                    'dateEnd',
                    'merchantID',
                ],
            'traffic' =>
                [
                    'dateStart',
                    'dateEnd',
                    'bannerType',
                    'merchantId',
                    'groupBy',
                    'bannerID',
                    'afftrack',
                    'sortCol',
                    'sortDir',
                ],
            'apitokencount' =>
                [],
            'getProducts' =>
                [
                    'keyword',
                    'merchantId',
                    'excludeMerchants',
                ],
            'invalidLinks' =>
                [
                    'merchantIdList',
                ],
            'orderInquiry' =>
                [
                    'merchantId',
                    'orderDate',
                    'orderNumber',
                ],
            'merchantDataFeeds' =>
                [
                    'blnMemberOf',
                    'blnNotMemberOf',
                    'category',
                    'updateDate',
                    'keyword',
                    'sortCol',
                    'sortDir',
                ],
            'couponDeals' =>
                [
                    'current',
                    'modifiedSince',
                    'merchantId',
                ],
            'merchantStatus' =>
                [
                    'merchantId',
                    'category',
                    'programStatus',
                    'keyword',
                    'sortCol',
                    'sortDir',
                ],
            'merchantCreative' =>
                [
                    'merchantId',
                    'modifiedDate',
                    'sortCol',
                    'sortDir',
                ],
            'merchantGiftCard' =>
                [
                    'sortCol',
                    'sortDir',
                ],
            'edittrail' =>
                [
                    'dateStart',
                    'dateEnd',
                    'merchantID'
                ],
            'paymentSummary' =>
                [
                    'paymentDate',
                    'sortCol',
                    'sortDir'
                ],
            'merchantSearch' =>
                [
                    'Keyword',
                    'Category',
                    'activatedSince',
                    'notjoined',
                    'datafeed',
                    'autodeposit',
                    'autoapprove',
                    'epc',
                    'avgsale',
                    'reversalrate',
                    'cookielength',
                    'sortCol',
                    'sortDir'
                ],
            'merchantSearchProduct' =>
                [
                    'keyword',
                    'notjoined',
                    'merchantId',
                    'excludeMerchants',
                    'sortCol',
                    'sortDir'
                ],
            'ledger' =>
                [
                    'dateStart',
                    'dateEnd',
                    'includeOrderDetails',
                    'includeMerchantDetails'
                ],
            'balance' =>
                []
        ];

        return array_merge($defaultParameters, $methodParameters[$serviceMethod]);
    }


}