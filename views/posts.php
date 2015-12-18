<!DOCTYPE html>
<html>
<head>
  <title>Cockpit + Hugo</title>
  <link href="/cockpit/storage/cache/assets/app.base0.13.0.css?ver=0.13.0" type="text/css" rel="stylesheet" />
</head>
<body>
<div class="app-main">
  <div class="app-wrapper">
<?php 
$count = 0;
// $count_categories = 0;
print_r($posts);
foreach ($posts as $post): 
  $count++;
  $output_dir = "./content/posts";
  if (!is_dir($output_dir)) {
      mkdir($output_dir);         
  }
  //auto generated dates
  $created_at = date("c",$post["created"]);
  // $modified_at = date("c",$post["modified"]);

  //post fields
  $publishdate = $post["published"];
  $title = $post['title'];
  $slug = $post['title_slug'];
  $content = $post['content'];
  $featured_image = substr($post['featured_image'], 11); //remove 'site:static' from img path
  $type = "post";

  if ($post['categories']) 
  {
    //related collection
    foreach ($post['categories'] as $key => $value) {
      // $count_categories++;
      $categories_list[] = $value['Name'];
    }
    $categories = '"'.implode('", "', $categories_list).'"';
  } else 
  {
    $categories = '"Uncategorized"';
  }

  

  // $collection_id = "5672ef88974dfdoc1371303873";
  // $post_id = $post['_id'];
  // $edit_url = "http://blog-cockpit/cockpit/index.php/collections/entry/".$collection_id.'/'.$post_id;

  
  $file = $output_dir."/".$slug.".md" ;
  
  //if file exists, remove it first
  if (file_exists($file)) {
    unlink($file);
  }

  file_put_contents($file, '+++');
  file_put_contents($file, "\n", FILE_APPEND);
  file_put_contents($file, 'date = "' .$created_at.'"', FILE_APPEND);
  file_put_contents($file, "\n", FILE_APPEND);
  file_put_contents($file, 'publishdate = "' .$publishdate.'"', FILE_APPEND);
  file_put_contents($file, "\n", FILE_APPEND);
  file_put_contents($file, 'type = "' .$type.'"', FILE_APPEND);
  file_put_contents($file, "\n", FILE_APPEND);
  file_put_contents($file, 'title = "' .$title.'"', FILE_APPEND);
  file_put_contents($file, "\n", FILE_APPEND);
  file_put_contents($file, 'slug = "' .$slug.'"', FILE_APPEND);
  file_put_contents($file, "\n", FILE_APPEND);
  file_put_contents($file, 'categories = [' .$categories.']', FILE_APPEND);
  file_put_contents($file, "\n", FILE_APPEND);
  file_put_contents($file, 'featured_image = "' .$featured_image.'"', FILE_APPEND);
  file_put_contents($file, "\n", FILE_APPEND);
  file_put_contents($file, '+++', FILE_APPEND);
  file_put_contents($file, "\n\n", FILE_APPEND);
  file_put_contents($file, $content, FILE_APPEND);

  endforeach; 

  ?>
      <h2>
        <?php echo $count; ?> posts were generated sucessfully!
      </h2>
      <a href="/"  class="uk-button uk-button-primary uk-button">Go Back</a>
    </div>
</div>
</body>
</html>