<?php
include_once 'templates.inc';
main_header("FizzBuzz");
?>
<p id="appName">FizzBuzz</p>
<h1>Author: Tony Flemings</h1>
<h1>Design Inspiration: Todd Whittaker</h1>
<p>This program will solve the classic "FizzBuzz" problem posed in
   many programming interviews. The idea is to examine all of the
   numbers between <span class="italic">start</span> and 
   <span class="italic">stop</span>. If the number is divisible
   by 3 then print "Fizz". If the number is divisible by 5 then
   print "Buzz". If it is divisible by both then print "FizzBuzz".
   Otherwise, print the number.</p>
<p>Valid values are integers only. All invalid or empty values will
   default to 1 for the start parameter and 100 for the stop parameter.
</p>
<fieldset>
    <legend>Input Your Data</legend>
    <form action="fizzbuzz.php?selected=1&page=h01" method="post">
        <label>Starting Number:</label>
            <input id="start" name="start"/>
        <label>Stopping Number:</label>
            <input id="stop" name="stop"/><br />
        <button type="submit" id="submit" name="page" value="fizzbuzz">Submit</button>
    </form>
</fieldset> 
<?php
main_footer();
?>
