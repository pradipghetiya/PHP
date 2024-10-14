<?php

$user_input = 'rasmuslerdorf';
$hashed_password = '$6$rounds=1000000$NJy4rIPjpOaU$0ACEYGg/aKCY3v8O8AfyiO7CTfZQ8/W231Qfh2tRLmfdvFD6XfHk12u6hMr9cYIA4hnpjLNSTRtUwYr9km9Ij/';

// Validate an existing crypt() hash in a way that is compatible with non-PHP software.
if (hash_equals($hashed_password, crypt($user_input, $hashed_password))) {
   echo "Password verified!";
}


?>