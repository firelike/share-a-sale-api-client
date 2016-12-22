<?php
namespace Firelike\ShareASale\Test\Service;

require_once __DIR__ . '/../../vendor/autoload.php';

require_once __DIR__ . '/../../src/Service/Factory/ShareASaleServiceFactory.php';
require_once __DIR__ . '/../../src/Service/ShareASaleService.php';

require_once __DIR__ . '/../../src/Validator/BasicServiceMethodParametersValidator.php';
require_once __DIR__ . '/../../src/Validator/DefaultParametersNotEmptyValidator.php';
require_once __DIR__ . '/../../src/Validator/FormatParameterValidator.php';
require_once __DIR__ . '/../../src/Validator/ProperServiceMethodParametersValidator.php';
require_once __DIR__ . '/../../src/Validator/SortDirectionParameterValidator.php';
require_once __DIR__ . '/../../src/Validator/XmlFormatParameterValidator.php';

use Firelike\ShareASale\Service\ShareASaleService;

use Firelike\ShareASale\Validator\BasicServiceMethodParametersValidator;
use Firelike\ShareASale\Validator\DefaultParametersNotEmptyValidator;
use Firelike\ShareASale\Validator\FormatParameterValidator;
use Firelike\ShareASale\Validator\ProperServiceMethodParametersValidator;

use Firelike\ShareASale\Validator\SortDirectionParameterValidator;
use Firelike\ShareASale\Validator\XmlFormatParameterValidator;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;

class ITunesServiceTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var \Firelike\ShareASale\Service\ShareASaleService
     */
    protected $service;

    public function setUp()
    {
        parent::setUp();

        $config = [
            'shareasale_service' => [
                'service_url' => 'https://shareasale.com',
                'service_version' => '2.1',
                'affiliate_id' => getenv('affiliate_id'),
                'token' => getenv('shareasale_token'),
                'secret_key' => getenv('shareasale_secret_key'),
            ]
        ];

        $service = new ShareASaleService();

        $service->setServiceUrl($config['shareasale_service']['service_url']);
        $service->setVersion($config['shareasale_service']['service_version']);
        $service->setAffiliateId($config['shareasale_service']['affiliate_id']);
        $service->setToken($config['shareasale_service']['token']);
        $service->setSecretKey($config['shareasale_service']['secret_key']);

        $validator = new BasicServiceMethodParametersValidator();

        $validator->setProperServiceMethodParametersValidator(new ProperServiceMethodParametersValidator());
        $validator->setDefaultParametersNotEmptyValidator(new DefaultParametersNotEmptyValidator());
        $validator->setSortDirectionValidator(new SortDirectionParameterValidator());
        $validator->setFormatParameterValidator(new FormatParameterValidator());
        $validator->setXmlFormatParameterValidator(new XmlFormatParameterValidator());

        $service->setBasicServiceMethodValidator($validator);

        $this->service = $service;
    }

    protected function createClientWithMockHandler()
    {

        $mock = new MockHandler();
        $responses = [
            new Response(200, [], '{"resultCount":"5","results":"{}"}'),
            new Response(200, [], '{"resultCount":"5","results":"{}"}'),
        ];

        foreach ($responses as $response) {
            $mock->append($response);
        }

        $client = new Client([
            'handler' => $mock
        ]);
        return $client;
    }


    public function testActivity()
    {
        $options = array(
            'dateStart' => '04/01/2016',
        );
        $result = $this->service->activity($options);

        $this->assertTrue(is_array($result));
    }

    public function testActivitySummary()
    {
        $options = [];
        $result = $this->service->activitySummary($options);

        $this->assertArrayHasKey('merchantid', $result[0]);
        $this->assertArrayHasKey('merchant', $result[0]);

    }

    public function testDailyActivity()
    {
        $options = [];
        $result = $this->service->dailyActivity($options);

        $this->assertTrue(is_array($result));
    }

    public function testMonthlySummary()
    {
        $options = [
            'dateMonth' => '04/01/2016'
        ];
        $result = $this->service->monthlySummary($options);
        $this->assertTrue(is_array($result));
    }

    public function testTraffic()
    {
        $options = [
            'dateStart' => '04/01/2016',
            'dateEnd' => '04/30/2016',
        ];
        $result = $this->service->traffic($options);
        $this->assertTrue(is_array($result));
    }


    public function testFormatParameterValidatorWorksWithInvalidValues()
    {
        $validator = new FormatParameterValidator();
        $result = $validator->isValid(['format' => 'doc']);
        $this->assertEquals(false, $result);
    }

    public function testProperServiceParameterValidatorWorks()
    {
        $validator = new ProperServiceMethodParametersValidator();
        $validator->setOptions(['serviceMethod' => 'traffic']);

        $result = $validator->isValid(['wrong_merchantId' => '123456']);
        $this->assertEquals(false, $result);
    }


    public function testSortDirectionValidatorWorksWithInvalidValues()
    {
        $validator = new SortDirectionParameterValidator();
        $result = $validator->isValid(['sortDir' => 'left']);
        $this->assertEquals(false, $result);
    }

    public function testXmlFormatValidatorWorksWithInvalidValues()
    {
        $validator = new XmlFormatParameterValidator();
        $result = $validator->isValid(['XMLFormat' => 3]);
        $this->assertEquals(false, $result);
    }


}

