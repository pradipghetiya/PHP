<?php

def power(base, exponent):
    result = 1
    for _ in range(exponent):
        result *= base
    return result


base = 2
exponent = 5
print(f"{base} raised to the power of {exponent} is:", power(base, exponent))

?>

