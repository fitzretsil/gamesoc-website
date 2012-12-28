
<?php foreach ($news as $post): ?>

<?php echo $this->Html->image( 'michelle.jpeg', array( 'width' => '65px', 'style' => 'vertical-align: top; float: left;' ) );?>
<div class='news' id='<?php echo $post['News']['id']; ?>'>
<!--<h2><?php echo $html->link($post['News']['title'], array('controller' => 'news', 'action' => 'view', $post['News']['id'])); ?></h2>-->
<h2><?php echo $post['News']['title']; ?></h2>
<div class="news-text">
<p><?php echo $post['News']['body']; ?><p>

<iframe src="https://www.facebook.com/plugins/like.php?href=YOUR_URL"
        scrolling="no" frameborder="0"
        style="border:none; width:450px; height:40px; margin-top: 10px;"></iframe>

</div>
<span class='news-info'>posted by <?php echo $post['User']['first_name']; ?> on <?php echo date('d/m/Y', strtotime($post['News']['publish_date'])); ?></span>
</div>

<?php endforeach; ?>
