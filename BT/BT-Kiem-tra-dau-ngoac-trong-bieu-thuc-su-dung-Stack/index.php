<?php
$string1 = "(8 * 2 /  9 - 2)";
$string2 = "[7 - 3 / 5 * ( 6 +4 ))]";
$string3 = "({ (4 - 6) * 7)";
$string4 = "(8*9/3 + 2)";
function String($string)
{
    $check = true;
    $stack = new SplStack();
    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];
        switch ($char) {
            case '(':
            case '[':
            case '{':
                $stack->push($char);
                break;
            case ')':
            case ']':
            case '}':
                if ($stack->isEmpty()) {
                    $check = false;
                } else {
                    $last = $stack->pop();
                    if ($last != '(' && $char == ')' || $last != '[' && $char == ']' || $last != '{' && $char == '}') {
                        $check = false;
                    }
                }
                break;
        }
        if (!$check) {
            break;
        }

    }
    if (!$stack->isEmpty()) {
        $check = false;
    }
    return $check;
}

var_dump(String($string1));
echo "<br>";
var_dump(String($string2));
echo "<br>";
var_dump(String($string3));
echo "<br>";
var_dump(String($string4));
