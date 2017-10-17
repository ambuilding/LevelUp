<?php
  $dom = simplexml_load_file("http://rss.nytimes.com/services/xml/rss/nyt/Technology.xml");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"> 
  <head>
    <title>NYT</title> 
  </head>
  <body> 
    <h1>NYT</h1> 
    <ul>
      <?php foreach ($dom->channel->item as $item): ?>
        <li>
          <a href="<?= $item->link ?>">
            <?= htmlspecialchars($item->title) ?>
          </a>
        </li>
      <?php endforeach ?> 
    </ul>
  </body> 
</html>