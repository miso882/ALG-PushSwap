Push_swap is an algorithm project to sort data with a limit set of instructions using the lowest possible number of actions.
You start with two empty stacks: a and b. You are given a random list of integers via command line arguments.
At the end, stack b must be empty and all integers must be in stack a, sorted in ascending order.
Only these moves are allowed:
sa : swap a - swap the first 2 elements at the top of stack a. Do nothing if there is only one or no elements).
sb : swap b - swap the first 2 elements at the top of stack b. Do nothing if there is only one or no elements).
pa : push a - take the first element at the top of b and put it at the top of a. Do nothing if b is empty
pb : push b - take the first element at the top of a and put it at the top of b. Do nothing if a is empty.
ra : rotate a - shift up all elements of stack a by 1. The first element becomes the last one.
rb : rotate b - shift up all elements of stack b by 1. The first element becomes the last one.

....

