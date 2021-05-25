<?php

use App\Models\Partner;

$partner = Partner::loadArabic();
return ['data' => $partner];
