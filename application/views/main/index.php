<h1><?php echo $h1; ?></h1>
 <?php foreach($news as $item) { ?>
    <h2><?php echo $item['title']; ?></h2>
    <p><?php echo $item['description']; ?></p>
 <?php } ?>
