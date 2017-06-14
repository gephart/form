<?php

namespace Gephart\Form;

use Gephart\Form\Field\FieldInterface;

final class Form
{
    /** @var array */
    private $fields = [];

    public function __construct()
    {
    }

    public function add(FieldInterface $field)
    {
        $this->fields[] = $field;

        return $this;
    }

}