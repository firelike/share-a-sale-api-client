<?php
namespace ShareASale\Validator;


use Zend\Validator\AbstractValidator;
use Zend\Validator\ValidatorChain;

class BasicServiceMethodParametersValidator extends AbstractValidator
{
    /**
     * @var \ShareASale\Validator\ProperServiceMethodParametersValidator
     */
    protected $properServiceMethodParametersValidator;
    /**
     * @var \ShareASale\Validator\DefaultParametersNotEmptyValidator
     */
    protected $defaultParametersNotEmptyValidator;
    /**
     * @var \ShareASale\Validator\SortDirectionParameterValidator
     *
     */
    protected $sortDirectionValidator;
    /**
     * @var \ShareASale\Validator\FormatParameterValidator
     */
    protected $formatParameterValidator;
    /**
     * @var \ShareASale\Validator\XmlFormatParameterValidator
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