<?php

namespace Gephart\Form\Field;

abstract class AbstractField implements FieldInterface
{
    /**
     * @var string
     */
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}