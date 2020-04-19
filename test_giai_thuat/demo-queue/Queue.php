<?php


interface Queue
{
    function enQueue($item);
    function deQueue();
    function isFull();
    function isEpty();

}