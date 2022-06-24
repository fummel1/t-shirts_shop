<?php
    setcookie('email', '', time() - 1800, "/");
    unset($_COOKIE['email']);