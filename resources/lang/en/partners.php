<?php

use App\Models\Partner;

$partner = Partner::loadEnglish();
return ['data' => $partner];
