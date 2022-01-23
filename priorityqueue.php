<?php

class PriorityQueue
{
    private $items = array();

    public function get()
    {
        // ksort ordena el array por clave mientras que asort lo ordena por contenido
        ksort($this->items);
        // array_shift devuelve en el resultado de la función el primer elemento y además el array queda almacenado sin (este/)su primer elemento.
        return array_shift($this->items);
    }

    public function add($item, int $priority = null): void
    {
        $this->items[$priority] = $item;
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