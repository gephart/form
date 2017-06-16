<?php

namespace Gephart\Form\Field;

class RadioField extends AbstractField
{

    /** @var array */
    private $options = [];

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param array $options
     * @return RadioField
     */
    public function setOptions(array $options)
    {
        $this->options = $options;

        return $this;
    }

}