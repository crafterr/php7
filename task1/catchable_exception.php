<?php

function hello_from($user) {
    return $user->say_hello();
}

//php 5.6
function hello_from2($user) {
    if (is_null($user)) {
        throw new Exception("User is null");
    }
    return $user->say_hello();
}

try {
    echo hello_from2(null);

} catch (Exception $e) {
    echo "ssss: {$e->getMessage()}";
}


try {
    echo hello_from(null);
} catch (Error $e) {
    echo "<br />Rescued from: {$e->getMessage()}";
}
