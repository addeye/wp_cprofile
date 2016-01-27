<?php
/**
* This is where you can copy and paste your functions !
*/
add_filter('tc_credits_display', 'my_custom_credits');
function my_custom_credits(){
$credits = '';
$newline_credits = '';
return '<div class="span6 credits">
<p>&middot; &copy; 2016 CV. Karya Mandiri Anugerah &middot; Designed By <a target="_blank" href="http://gowonan.com">Gowonan</a> | Deye &middot;</p>
</div>';
}
