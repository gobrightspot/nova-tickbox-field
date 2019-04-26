<?php

namespace Brightspot\Nova\Fields\Tickbox;

use Laravel\Nova\Fields\Boolean;

class Tickbox extends Boolean
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'tickbox';

    /**
     * The label to be used when the field is "true".
     *
     * @var bool
     */
    public $trueLabel = 'Yes';

    /**
     * The label to be used when the field is "false".
     *
     * @var bool
     */
    public $falseLabel = 'No';

    /**
     * Create a new field.
     *
     * @param  string  $name
     * @param  string|callable|null  $attribute
     * @param  callable|null  $resolveCallback
     * @return void
     */
    public function __construct($name, $attribute = null, callable $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this->displayUsing(function ($value) {
            return $value == $this->trueValue ? $this->trueLabel : $this->falseLabel;
        });
    }

    /**
     * Specify the labels to store for the field.
     *
     * @param  mixed  $trueLabel
     * @param  mixed  $falseLabel
     * @return $this
     */
    public function labels($trueLabel, $falseLabel)
    {
        return $this->trueLabel($trueLabel)->falseLabel($falseLabel);
    }

    /**
     * Specify the label to store when the field is "true".
     *
     * @param  mixed  $label
     * @return $this
     */
    public function trueLabel($label)
    {
        $this->trueLabel = $label;

        return $this;
    }

    /**
     * Specify the label to store when the field is "false".
     *
     * @param  mixed  $label
     * @return $this
     */
    public function falseLabel($label)
    {
        $this->falseLabel = $label;

        return $this;
    }
}
