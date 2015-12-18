<h1><?php echo $post['title'];?></h1>
<small><?php echo date("c",$post["created"]); ?></small>
<p><?php echo $post['categorias']; ?></p>
<p>    
    <?php 
      // set $extra to true to render as MarkdownExtra
      markdown($post['content'], $extra = true);
    ?> 
</p>
