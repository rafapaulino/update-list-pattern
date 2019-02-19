<?php

namespace UpdateListPattern;

class UpdateListPattern
{
    private $_actualValues;
    private $_newValues;
    private $_included;
    private $_excluded;
    private $_kept;

    public function __construct(array $actual, array $new)
    {
        $this->_actualValues = $actual;
        $this->_newValues = $new;

        $this->setKept();
        $this->setExcluded();
        $this->setIncluded();

        return $this;
    }

    public function getResults(): array
    {
        return array(
            'actual' => $this->_actualValues,
            'new' => $this->_newValues,
            'included' => $this->getIncluded(),
            'excluded' => $this->getExcluded(),
            'kept' => $this->getKept()
        );
    }

    private function setKept()
    {
        $this->_kept = array_intersect($this->_actualValues, $this->_newValues);
    }

    public function getKept(): array
    {
        return $this->_kept;
    }

    private function setExcluded()
    {
        $this->_excluded = array_diff($this->_actualValues, $this->_newValues);
    }

    public function getExcluded(): array
    {
        return $this->_excluded;
    }

    private function setIncluded()
    {
        $this->_included = array_diff($this->_newValues, $this->_actualValues);
    } 

    public function getIncluded(): array
    {
        return $this->_included;
    }
}