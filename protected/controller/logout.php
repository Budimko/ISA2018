<?php

setcookie("cookie", "", time()-3600, '/', NULL);

header('Location: '.SITE_URL);