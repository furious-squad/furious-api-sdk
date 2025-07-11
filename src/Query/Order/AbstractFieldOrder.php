<?php

namespace Furious\FuriousApiSdk\Query\Order;


abstract class AbstractFieldOrder
{
    protected string $fieldName;
    protected string $fieldOrderDirection;
        
    /**
     * __construct
     *
     * @param  string $fieldName
     * @param  string $fieldOrderDirection
     * @return void
     */
    protected function __construct(string $fieldName, string $fieldOrderDirection)
    {
        $this->fieldName            = $fieldName;
        $this->fieldOrderDirection  = $fieldOrderDirection;
    }
    
    /**
     * getGraphQLFormat return ordering field as a GraphQLFormatted string
     *
     * @return string
     */
    public function getGraphQLFormat()
    {
        return sprintf('{%s:%s}', $this->fieldName, $this->fieldOrderDirection);
    }
}