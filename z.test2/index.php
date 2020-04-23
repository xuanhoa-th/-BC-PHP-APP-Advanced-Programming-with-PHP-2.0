<?php

$subject = "51-X2-123.04";
$pattern = '/^\d{2}-[A-Z]\d-\d{3}\.\d{2}$/';
if(preg_match($pattern, $subject, $matches))
echo 'Khớp';
else
echo 'Không khớp';

