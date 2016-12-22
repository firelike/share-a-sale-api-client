## Share-A-Sale API Client

[![Build Status](https://travis-ci.org/firelike/share-a-sale-api-client.svg?branch=master&format=flat-square)](https://travis-ci.org/firelike/share-a-sale-api-client)
[![License](https://poser.pugx.org/firelike/share-a-sale-api-client/license?format=flat-square)](https://packagist.org/packages/firelike/share-a-sale-api-client)

## Introduction

Zend Framework module to consume Share-A-Sale API

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
        'Firelike\ShareASale'
    )
);
```

Copy and paste the `shareasale.local.php.dist` file to your `config/autoload` folder and customize it with your credentials and
other configuration settings. Make sure to remove `.dist` from your file.Your `shareasale.local.php` might look something like the following:

```php
<?php
return [
    'shareasale_service' => [
        'service_url' => 'https://shareasale.com',
        'service_version' => '2.1',
        'affiliate_id' => '<affiliate-id>',
        'token' => '<token>',
        'secret_key' => '<secret-key>',
    ]
];
```

## Usage

Calling from your code:

```php
        use Firelike\ShareASale\Service\ShareASaleService;
        
        $service = new ShareASaleService();
        
        $options = [
            'dateStart' => '6/22/2016',
        ];
        
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
