<?php

use App\Models\Member;

$member = Member::loadArabic();
return ['data' => $member];
