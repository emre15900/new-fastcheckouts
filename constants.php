<?php

define('IS_LOCAL', false); // Change to false in prod
$base_url = IS_LOCAL ? '/fastcheckouts' : '';
define('BASE_URL', $base_url);