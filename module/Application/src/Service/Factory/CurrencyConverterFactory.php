<?php


namespace Application\Service\Factory;


use Application\Service\CurrencyConverter;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class CurrencyConverterFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return CurrencyConverter|object
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new CurrencyConverter();
    }
}