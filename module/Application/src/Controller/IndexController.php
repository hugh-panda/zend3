<?php

namespace Application\Controller;

use Application\Service\CurrencyConverter;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    /** @var CurrencyConverter */
    private $currencyConverterService;

    /**
     * IndexController constructor.
     * @param CurrencyConverter $currencyConverter
     */
    public function __construct(CurrencyConverter $currencyConverter)
    {
        $this->currencyConverterService = $currencyConverter;
    }

    /**
     * @return array|ViewModel
     */
    public function indexAction()
    {
        $eur = $this->currencyConverterService->convertEURtoUSD(25);
        return new ViewModel();
    }
}
