## Share-A-Sale API Client

## Introduction

Zend Framework module with API client to access Share-A-Sale API

## Installation
Install the module using Composer into your application's vendor directory. Add the following line to your
`composer.json`.

```json
{
    "require": {
        "firelike/share-a-sale-api-client": "1.*"
    }
}
```
## Configuration

Enable the module in your `application.config.php` file.

```php
return array(
    'modules' => array(
        'ShareASale'
    )
);
```

Add your Share-A-Sale API credentials in `local.php`. Your `local.php` might look something like the following:

```php
<?php
return [
    'shareasale_service' => [
        'affiliate_id' => '<affiliate-id>',
        'token' => '<token>',
        'secret_key' => '<secret-key>',
    ]
];
```

## Usage

Calling from your code:

```php
        $service = new \ShareASale\Service\ShareASaleService();
        
        $options = array(
            'dateStart' => '6/22/2016',
        );
        
        $records = $service->activity($options);
        
        var_dump($records);
        
```

Using the console:

```php
php public/index.php shareasale activity -v
```
## Implemented Service Methods:

* **activity**
* **activitySummary**
* **merchantTimespan**
* **dailyActivity**
* **monthlySummary**
* **voidtrail**
* **traffic**
* **apitokencount**
* **getProducts**
* **invalidLinks**
* **orderInquiry**
* **merchantDataFeeds**
* **couponDeals**
* **merchantStatus**
* **merchantCreative**
* **merchantGiftCard**
* **edittrail**
* **paymentSummary**
* **merchantSearch**
* **merchantSearchProduct**
* **ledger**
* **balance**



## Links

* [Zend Framework website](http://framework.zend.com)
* [ShareASale website](https://www.shareasale.com)
