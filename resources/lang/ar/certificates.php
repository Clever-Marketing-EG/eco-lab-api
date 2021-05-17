<?php

use App\Models\Certificate;

$certificate = Certificate::loadArabic();
return ['data' => $certificate];
