<?php

class Captcha
{
    private $number_array = ["", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine"];
    private $operator_array = ["", "+", "-", "x"];

    public function __construct($pattern, $left, $operator, $right)
    {
        $this->pattern  = $pattern;
        $this->left     = $left;
        $this->operator = $operator;
        $this->right    = $right;
    }
    
    private function getLeftOperand()
    {
        if ($this->pattern == 1) {
            return $this->left;
        } else {
            return $this->number_array[$this->left];
        }
    }
    
    private function getRightOperand()
    {
        if ($this->pattern == 2) {
            return $this->right;
        } else {
            return $this->number_array[$this->right];
        }
    }

    private function getOperator()
    {
        return $this->operator_array[$this->operator];
    }
    
    public function toString()
    {
        return $this->getLeftOperand() . ' ' . $this->getOperator() . ' ' . $this->getRightOperand();
    }
}
