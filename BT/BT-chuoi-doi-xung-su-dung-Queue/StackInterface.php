<?php


interface StackInterface
{
    function push($item);
    function pop();
    function isEmpty();
    function top();
    function isFull();

}