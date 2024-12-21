# Unexpected Array Modification in Recursive PHP Function

This repository demonstrates a common error in PHP involving unexpected modification of an array within a recursive function. The function `processData` aims to remove exclamation marks from string values within a nested array. However, due to pass-by-reference behavior, the original array is modified directly.

The `bug.php` file shows the buggy implementation.  The `bugSolution.php` provides a corrected version that uses `return` to avoid in-place modifications.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output due to array mutation.
4. Run `bugSolution.php` to see the corrected behavior.
