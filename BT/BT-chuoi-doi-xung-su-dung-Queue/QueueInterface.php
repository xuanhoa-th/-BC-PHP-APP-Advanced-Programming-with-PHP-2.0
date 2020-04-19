<?php


interface QueueInterface
{
    function enQueue($item);
    function deQueue();
    function isFull();
    function isEpty();

}