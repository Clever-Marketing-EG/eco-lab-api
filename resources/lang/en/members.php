<?php

use App\Models\Member;

$member = Member::loadEnglish();
return ['data' => $member];
