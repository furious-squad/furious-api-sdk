<?php

namespace Furious\FuriousApiSdk\Query\Filter;


abstract class AbstractFieldFilter
{
    protected string $fieldName;
    protected string $operator;
    protected $fieldValue;
        
    /**
     * __construct
     *
     * @param  string $fieldName
     * @param  string $operator
     * @param  mixed $fieldValue
     * @return void
     */
    protected function __construct(string $fieldName, string $operator, $fieldValue = null)
    {
        $this->fieldName    = $fieldName;
        $this->operator     = $operator;
        $this->fieldValue   = $fieldValue;
    }
    
    /**
     * getGraphQLFormat return filtering field as a GraphQLFormatted string
     *
     * @return string
     */
    public function getGraphQLFormat()
    {
        $value = $this->fieldValue;

        if(is_array($value)) {
            $value = json_encode($value);
        }else if(is_string($value)) {
            $value = '"'.$value.'"';
        }else if(is_bool($value)) {
            $value = $value ? 'true' : 'false';
        }

        return sprintf('%s:{%s:%s}', $this->fieldName, $this->operator, $value);
    }
}