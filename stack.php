<?php

class Stack
{
    private $items = array();

    public function get()
    {
        // array_pop() extrae y devuelve el último valor del array, acortando el array con un elemento menos.
        return array_pop($this->items);
    }

    public function add($item): void
    {
        $this->items[] = $item;
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function contains($item_to_search): bool
    {
        return in_array($item_to_search, $this->items);
    }
}