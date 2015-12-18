<?php 

foreach ($projects as $project): 

  $output_dir = "./content/projects/";
  if (!is_dir($output_dir)) {
      mkdir($output_dir);         
  }

  $published_at = date("c",$project["created"]);
  $title = $project['title'];
  $slug = $project['title_slug'];
  $content = $project['description'];
  $type = "project";
  $featured_image = substr($project['featured_image'], 11);
  $category = $project['category']['Name'];  //a project can have only one category
  
  
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
  file_put_contents($file, 'categories = ["' .$category.'"]', FILE_APPEND);
  file_put_contents($file, "\n", FILE_APPEND);
  file_put_contents($file, 'featured_image = "' .$featured_image.'"', FILE_APPEND);
  file_put_contents($file, "\n", FILE_APPEND);
  file_put_contents($file, '+++', FILE_APPEND);
  file_put_contents($file, "\n\n", FILE_APPEND);
  file_put_contents($file, $content, FILE_APPEND);

  endforeach; ?>