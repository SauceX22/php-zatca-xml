<?php

namespace Saucex22\Zatca\Tags;

use Saucex22\Zatca\Tag;

class TaxNumber extends Tag
{
    public function __construct($value)
    {
        parent::__construct(2, $value);
    }
}
