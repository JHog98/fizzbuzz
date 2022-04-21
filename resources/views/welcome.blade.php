<script>
/* 

I knew that i needed to create a loop, so that i can check each number in the range of 1-100, and then i could use if statements to check the numbers. I know that Modulus or the remainder operator lets me check remainders, which i could use to check if 3, 5, or 15 multiplies into other numbers as if it did, you'd get a remainder of 0.

I needed the smallest number that both 3 and 5 go into, which i could then use to check if it multiplies into larger numbers which is 15. 

The best way to check the numbers in the loop would be by using an if statement, so i could go if 15 goes into 'x' print fizzbuzz, if 5 goes into 'x' pint buzz, if 3 goes into 'x' print fizz. and to check if this is true, each time the remainder just needed to be 0.

If the remainder is not 0, print the variable for example 7, as: 
3 would have gave a remainder of 1, 
5 would have gave a remainder of 2,
15 does not go into 7, 
therefore print the variable (7).

After that repeat the loop, check again and so on until we reach 100. I did this by using ++ which increases the number in the range by 1 after each loop has finished.

As a side note, i originally wrote 'x < 100' but then realised the loop then misses the 100 number, which is why i now have 101
*/


// Set the vaiable 'x' as 1, create a range between 1 & 100, increase the value by 1 after each loop
    for (var x = 1; x < 101; x++) {
        // Checks to see if there's a remainder '%' we're looking for a remainder of 0 does 15 go into the number and is the remainder 0, if its true print, if false, continue the loop.
        if (x % 15 === 0) {
            console.log('FIZZBUZZ');
        }
        // So if 15 doesn't fit into the number, does 5, and is there a remainder of 0?
        else if (x % 5 === 0) {
            console.log('BUZZ');
        }
        // Does 3? Is there a remainder of 0?
        else if (x % 3 === 0) {
            console.log('FIZZ');
        }
        // We have gotten remainders from 15, 5 and 3, therefore we can print the variable.
        else {
            console.log(x);
        }
    }

</script>