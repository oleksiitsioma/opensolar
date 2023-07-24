<div class="comments">

    <h2 class="comments__title">Comments</h2>

    <?php if( !is_user_logged_in(  ) ) { ?>

        <button href="#" class="comments__add">Write a comment...</button>

    <?php } ?>

<?php

// $comQuery = new WP_Query([
//     'id'    => get_the_ID(),
// ]);





// comment_form(); 
?>

</div>