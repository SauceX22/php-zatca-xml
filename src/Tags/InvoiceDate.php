<?php

namespace Saucex22\Zatca\Tags;

use Saucex22\Zatca\Tag;

class InvoiceDate extends Tag
{
    public function __construct($value)
    {
        parent::__construct(3, $value);
    }
}
