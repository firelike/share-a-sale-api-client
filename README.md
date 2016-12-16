## Share-A-Sale API Client

## Introduction

This is Zend Framework module with API client to access Share-A-Sale API

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

### activity:
```php
php public/index.php shareasale activity -v
```
### activitySummary:
```php
php public/index.php shareasale activity-summary -v
```
### merchantTimespan:
```php
php public/index.php shareasale merchant-timespan -v
```
### monthlySummary:
```php
php public/index.php shareasale monthly-summary -v
```
### traffic:
```php
php public/index.php shareasale traffic -v
```
### getProducts:
```php
php public/index.php shareasale get-products -v
```
### invalidLinks:
```php
php public/index.php shareasale invalid-links -v
```
### merchantDataFeeds:
```php
php public/index.php shareasale merchant-data-feeds -v
```
### couponDeals:
```php
php public/index.php shareasale coupon-deals -v
```
### merchantStatus:
```php
php public/index.php shareasale merchant-status -v
```
### merchantCreative:
```php
php public/index.php shareasale merchant-creative -v
```
### merchantGiftCard:
```php
php public/index.php shareasale merchant-gift-card -v
```
### paymentSummary:
```php
php public/index.php shareasale payment-summary -v
```
### merchantSearch:
```php
php public/index.php shareasale merchant-search -v
```


## Links

* [Zend Framework website](http://framework.zend.com)__