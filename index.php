<?php
error_reporting(E_ALL);
ini_set( "display_errors", "on" );

include_once __DIR__ . '/queue.php';

// COLA (FIFO)
echo "creo la cola".PHP_EOL;
$cola = new Queue();
var_dump($cola); //cola vacía

echo "agrego tres elementos: alice, bob y john e imprimo la cola y la cantidad de elementos".PHP_EOL;
$cola->add('alice');
$cola->add('bob');
$cola->add('john');
var_dump($cola); //muestra los 3 elementos
var_dump($cola->count()); // Prints 3

echo "quito el primer elemento de la cola, imprimo dicho primer elemento y la cola sin dicho elemento".PHP_EOL;
$primero = $cola->get();
var_dump($primero); //muestra alice
var_dump($cola); //muestra la cola sin alice

echo "pregunto si alice y luego si bob están en la cola".PHP_EOL;
var_dump($cola->contains('alice')); //false
var_dump($cola->contains('bob')); //true