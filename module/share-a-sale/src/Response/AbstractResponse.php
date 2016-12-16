<?php
namespace ShareASale\Response;


abstract class AbstractResponse
{


    public function __construct($options = null)
    {
        if (null !== $options) {
            if (is_string($options)) {
                $options = $this->_loadConfig($options);
            } elseif ($options instanceof \Zend\Config\Config) {
                $options = $options->toArray();
            } elseif (!is_array($options)) {
                throw new Exception('Invalid options provided; must be location of config file, a config object, or an array');
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
                ), array_shift($value));
            } else {
                $this->{$prop} = array_shift($value);
            }
        }
    }
}
