<?php

namespace App\Behavioral\Strategy;

class ObjectCollection
{
    private $elements;
    /**
     * @var ComparatorInterface
     */
    private $comparator;

    public function __construct($data)
    {
        $this->elements = $data;
    }

    public function sort()
    {
        if (!$this->comparator) {
            throw new \LogicException("Comparator is not set");
        }

        $callback = array($this->comparator, 'compare');
        uasort($this->elements, $callback);

        return $this->elements;

    }

    public function setComparator(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }
}