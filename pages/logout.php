<?php

session_destroy();

header('Location : /', true, 303);
exit();
