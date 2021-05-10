<?php

use App\Models\Certificate;

$certificate = Certificate::loadEnglish();
return ['data' => $certificate];
