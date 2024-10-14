<?php

limit = 50

if limit >= 2:
    print(2, end=" ")

Check for prime numbers from 3 up to the limit
for num in range(3, limit + 1):
    is_prime = True
	
     Check divisibility from 2 to num-1
    for i in range(2, num):
        if num % i == 0:
            is_prime = False
            break
    if is_prime:
        print(num, end=" ")
?>