<?php

?>

<ul>
    <?php
    if(get_post_taxonomies()){
        foreach (get_post_taxonomies() as $item){
            ?>
            <li><a href="#"><?php echo $item ?></a></li>
            <?php
        }
    }
    ?>
</ul>
