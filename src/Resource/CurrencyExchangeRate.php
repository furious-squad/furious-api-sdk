<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class CurrencyExchangeRate.
 */
class CurrencyExchangeRate extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Currency Exchange Rate';
    protected const CATEGORY_NAME = 'RH';
    protected const GRAPH_API_NAME = 'CurrencyExchangeRate';

    protected const API_URI = 'currency-exchange-rate';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
