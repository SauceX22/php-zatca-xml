<?php

namespace Saucex22\Zatca\Tags;

use Saucex22\Zatca\Tag;

class PublicKey extends Tag
{
    public function __construct($value)
    {
        parent::__construct(8, $value);
    }
}
