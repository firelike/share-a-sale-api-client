<?php
namespace Firelike\ShareASale\Validator;


use Laminas\Validator\AbstractValidator;
use Laminas\Validator\ValidatorChain;

class BasicServiceMethodParametersValidator extends AbstractValidator
{
    /**
     * @var \Firelike\ShareASale\Validator\ProperServiceMethodParametersValidator
     */
    protected $properServiceMethodParametersValidator;
    /**
     * @var \Firelike\ShareASale\Validator\DefaultParametersNotEmptyValidator
     */
    protected $defaultParametersNotEmptyValidator;
    /**
     * @var \Firelike\ShareASale\Validator\SortDirectionParameterValidator
     *
     */
    protected $sortDirectionValidator;
    /**
     * @var \Firelike\ShareASale\Validator\FormatParameterValidator
     */
    protected $formatParameterValidator;
    /**
     * @var \Firelike\ShareASale\Validator\XmlFormatParameterValidator
     */
    protected $xmlFormatParameterValidator;

    /**
     * @param mixed $value
     * @return bool
     */
    public function isValid($value)
    {
        $chain = new ValidatorChain();

        $properServiceMethodParametersValidator = $this->getProperServiceMethodParametersValidator();
        $properServiceMethodParametersValidator->setOptions([
            'serviceMethod' => $this->getOption('serviceMethod')
        ]);
        $chain->attach($properServiceMethodParametersValidator);

        $chain->attach($this->getDefaultParametersNotEmptyValidator());
        $chain->attach($this->getSortDirectionValidator());
        $chain->attach($this->getFormatParameterValidator());
        $chain->attach($this->getXmlFormatParameterValidator());

        return $chain->isValid($value);

    }

    /**
     * @return ProperServiceMethodParametersValidator
     */
    public function getProperServiceMethodParametersValidator()
    {
        return $this->properServiceMethodParametersValidator;
    }

    /**
     * @param ProperServiceMethodParametersValidator $properServiceMethodParametersValidator
     */
    public function setProperServiceMethodParametersValidator($properServiceMethodParametersValidator)
    {
        $this->properServiceMethodParametersValidator = $properServiceMethodParametersValidator;
    }

    /**
     * @return DefaultParametersNotEmptyValidator
     */
    public function getDefaultParametersNotEmptyValidator()
    {
        return $this->defaultParametersNotEmptyValidator;
    }

    /**
     * @param DefaultParametersNotEmptyValidator $defaultParametersNotEmptyValidator
     */
    public function setDefaultParametersNotEmptyValidator($defaultParametersNotEmptyValidator)
    {
        $this->defaultParametersNotEmptyValidator = $defaultParametersNotEmptyValidator;
    }

    /**
     * @return SortDirectionParameterValidator
     */
    public function getSortDirectionValidator()
    {
        return $this->sortDirectionValidator;
    }

    /**
     * @param SortDirectionParameterValidator $sortDirectionValidator
     */
    public function setSortDirectionValidator($sortDirectionValidator)
    {
        $this->sortDirectionValidator = $sortDirectionValidator;
    }

    /**
     * @return FormatParameterValidator
     */
    public function getFormatParameterValidator()
    {
        return $this->formatParameterValidator;
    }

    /**
     * @param FormatParameterValidator $formatParameterValidator
     */
    public function setFormatParameterValidator($formatParameterValidator)
    {
        $this->formatParameterValidator = $formatParameterValidator;
    }

    /**
     * @return XmlFormatParameterValidator
     */
    public function getXmlFormatParameterValidator()
    {
        return $this->xmlFormatParameterValidator;
    }

    /**
     * @param XmlFormatParameterValidator $xmlFormatParameterValidator
     */
    public function setXmlFormatParameterValidator($xmlFormatParameterValidator)
    {
        $this->xmlFormatParameterValidator = $xmlFormatParameterValidator;
    }


}