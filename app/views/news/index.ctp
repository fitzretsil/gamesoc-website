<?php foreach ($news as $post): ?>

<?php echo $this->Html->image( 'users/' . $post['User']['id'] . '.png', array( 'width' => '65px', 'style' => 'vertical-align: top; float: left;' ) );?>
<div class='news' id='<?php echo $post['News']['id']; ?>'>
<!--<h2><?php echo $html->link($post['News']['title'], array('controller' => 'news', 'action' => 'view', $post['News']['id'])); ?></h2>-->
<h2><?php echo $post['News']['title']; ?></h2>
<div class="news-text">
<p><?php echo $post['News']['body']; ?><p>
</div>

<span class='news-info'>posted by <?php echo $post['User']['first_name']; ?> on <?php echo date('d/m/Y', strtotime($post['News']['publish_date'])); ?></span>

</div>

<?php endforeach; ?>
