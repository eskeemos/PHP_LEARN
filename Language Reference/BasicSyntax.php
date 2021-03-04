<!-- PHP TAGS -->
<!-- #1 -->
<?php# echo 'Standard tags' ?>
<?#= 'Short echo tag' ?>

<!-- ESCAPING FROM HTML -->
<!-- #1 -->
<!-- 
<?php# $x = 10; if ($x == true): ?>
    This will show if the expression is true.
<?php# else: ?>
    Otherwise this will show.
<?php# endif; ?> 
-->

<!-- COMMENTS -->
<!-- #1 -->
<?php
    // one-line c++ style comment
    # one-line shell-style comment
    /*multi line comment
    yet another line of comment*/
?>

<!-- INSTRUCTION SEPARATION -->
<!-- #1 -->
<!-- 
<?php# echo "Some text" ?>
No newline
<?#= "<br>But newline now" ?> 
-->
<!-- #2 -->
<?php
    #echo 'This is a test';
?>
<?php# echo 'This is a test' ?>
<?php# echo 'We omitted the last closing tag';