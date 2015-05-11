<?php namespace Definitely246\Pharos\Common;

class Validator extends \Validator
{
    protected $messages = array();

    protected $exceptionMessage = 'Invalid input data provided';

    protected $redirect = null;

    public function assertValid($input, $rules)
    {
        $validator = Validator::make($input, $rules, $this->messages);

        if ($validator->fails())
        {
            throw new ValidationException($this->exceptionMessage, $validator, $this->redirect);
        }
    }

    public function valid($input, $instance = false)
    {
        return $instance ? $this->updateValid($input, $instance) : $this->createValid($input);
    }

    public function createValid($input)
    {
        $this->assertValid($input, $this->createRules());
    }

    public function updateValid($input, $instance)
    {
        $this->assertValid($input, $this->updateRules($instance));
    }

    public function rules()
    {
        return isset($this->rules) ? $this->rules : array();
    }

    public function createRules()
    {
        return isset($this->createRules) ? $this->createRules : $this->rules();
    }

    public function updateRules($instance)
    {
        return isset($this->updateRules) ? $this->updateRules : $this->rules();
    }
}