<?php 

foreach ($pages as $page): 

  $output_dir = "./content/";
  if (!is_dir($output_dir)) {
      mkdir($output_dir);         
  }

  $published_at = date("c",$page["created"]);
  $title = $page['title'];
  $slug = $page['title_slug'];
  $content = $page['content'];
  $type = "page";
  
  
  $file = $output_dir."/".$slug.".md" ;

   //if file exists, remove it first
  if (file_exists($file)) {
    unlink($file);
  }
  
  file_put_contents($file, '+++');
  file_put_contents($file, "\n", FILE_APPEND);
  file_put_contents($file, 'date = "' .$published_at.'"', FILE_APPEND);
  file_put_contents($file, "\n", FILE_APPEND);
  file_put_contents($file, 'type = "' .$type.'"', FILE_APPEND);
  file_put_contents($file, "\n", FILE_APPEND);
  file_put_contents($file, 'title = "' .$title.'"', FILE_APPEND);
  file_put_contents($file, "\n", FILE_APPEND);
  file_put_contents($file, 'slug = "' .$slug.'"', FILE_APPEND);
  file_put_contents($file, "\n", FILE_APPEND);
  file_put_contents($file, '+++', FILE_APPEND);
  file_put_contents($file, "\n\n", FILE_APPEND);
  file_put_contents($file, $content, FILE_APPEND);

  endforeach; ?>