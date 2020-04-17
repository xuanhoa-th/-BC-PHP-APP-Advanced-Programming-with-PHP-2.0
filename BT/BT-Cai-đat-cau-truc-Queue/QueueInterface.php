<?php


interface QueueInterface
{
    function enqueue($item);
    function dequeue();
    function isEmpty();
    function isFull();
}