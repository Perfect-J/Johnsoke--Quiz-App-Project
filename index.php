<? php
  if (have-posts()):
while (have-post()): the-post(); ?>
<?phpendwhile;
  else:
  echo '<p>No content found</p>';
    end if;
?>
<h2><?php the-title(); ?> </h2>
<?php the_content (); ?>
<a href="<?php the_permalink(); ?>" </a>
<h2><a href="<?php the _permalonk(); ?>"<?php the_title (); ?></a></h2>
-get-header ();
-get-footer ();
