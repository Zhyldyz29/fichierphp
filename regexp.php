<?php

$email = "jam29@gmail.com" ;
if (preg_match("/^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/",$email)) {
    echo $email. "matche" ;
} else {
    echo "pas bon";
}