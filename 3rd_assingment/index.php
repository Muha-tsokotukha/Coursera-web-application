<!DOCTYPE html>
<head><title>Mukhit Nassyrov's MD5 Cracker</title></head>
<body>
<h1>Mukhit Nassyrov MD5 cracker</h1>

<pre>
Debug Output:
<?php
$goodtext = "Not found";
// If there is no parameter, this code is all skipped
if ( isset($_GET['md5']) ) {
    $time_pre = microtime(true);
    $md5 = $_GET['md5'];

    
    
    // Outer loop go go through the alphabet for the
    // first position in our "possible" pre-hash
    // text
    $show = 15;
    for($i=0; $i<=9; $i++ ) {
        for($j=0; $j<=9; $j++ ) {
            for($k=0; $k<=9; $k++ ) {
                for($l=0; $l<=9; $l++ ) {
                    $try = $i.$j.$k.$l;
                    
                    
                    $check = hash('md5', $try);
                    if ( $check == $md5 ) {
                        $goodtext = $try;
                        break;   // Exit the inner loop
                    }

                    // Debug output until $show hits 0
                    if ( $show > 0 ) {
                        print "$check $try\n";
                        $show = $show - 1;
                    }




                }
            }   
        }
    }
    // Compute elapsed time
    $time_post = microtime(true);
    print "Elapsed time: ";
    print $time_post-$time_pre;
    print "\n";
}
?>
</pre>
<!-- Use the very short syntax and call htmlentities() -->
<p>PIN: <?= htmlentities($goodtext); ?></p>
<form>
<input type="text" name="md5" size="40">
<input type="submit" value="md5"/>
</form>
<ul>
<li><a href="index.php">Reset</a></li>


</ul>
</body>
</html>