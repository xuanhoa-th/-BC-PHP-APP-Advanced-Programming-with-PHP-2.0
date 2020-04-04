<!DOCTYPE HTML>
<html>
<head>
    <title></title>
</head>
<body>
<form method="get">
    <input type="text" name="nameNumber" placeholder="Nhap so can doc">
    <input type="submit">
</form>
<?php
function NumbertoWord($number)
{
    switch ($number) {
        case 0:
            return '';
        case 1:
            return 'One';
        case 2:
            return 'Two';
        case 3:
            return 'Three';
        case 4:
            return 'Four';
        case 5:
            return 'Five';
        case 6:
            return 'Six';
        case 7:
            return 'Seven';
        case 8:
            return 'Eight';
        case 9:
            return 'Nine';
        case 10:
            return 'Ten';
        case 11:
            return 'Eleven';
        case 12:
            return 'Twelve';
        case 13:
            return 'Thirteen';
        case 14:
            return 'Fourteen';
        case 15:
            return 'Fifteen';
        case 16:
            return 'Sixteen';
        case 17:
            return 'Seventeen';
        case 18:
            return 'Eighteen';
        case 19:
            return 'Nineteen';
        case 20:
            return 'Twenty';
        case 30:
            return 'Thirty';
        case 40:
            return 'Forty';
        case 50:
            return 'Fifty';
        case 60:
            return 'Sixty';
        case 70:
            return 'Seventy';
        case 80:
            return 'Eighty';
        case 90:
            return 'Ninety';
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $number = $_GET['nameNumber'];
    $hundreds = floor($number / 100);
    $tens = floor($number / 10) % 10;
    $units = $number % 10;
    $readNumber = '';
    if ($number > 0 && $number < 1000) {
        if (($tens * 10 + $units) >= 0 && ($tens * 10 + $units) <= 20) {
            if ($hundreds == 0) {
                $readNumber .= NumbertoWord($tens * 10 + $units);
            } else {
                $readNumber = NumbertoWord($hundreds) . ' hundred and ' . NumbertoWord($tens * 10 + $units);
            }
        } else {
            if ($hundreds == 0) {
                $readNumber = NumbertoWord($tens * 10) . ' ' . NumbertoWord($units);
            } else {
                $readNumber = NumbertoWord($hundreds) . ' hundred and ' . NumbertoWord($tens * 10) . ' ' . NumbertoWord($units);
            }
        }
    } elseif ($number === 0) {
        $readNumber = 'Zero';
    } else {
        $readNumber = 'out of ability';
    }
    echo $readNumber;
}
?>
</body>
</html>