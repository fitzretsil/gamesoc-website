<?php
$session->flash('auth');
echo "<div class='news'>";
echo "<h2>Login</h2>";
echo "<div class='news-text' id='login'>";
echo $form->create('User', array('action' => 'login'));
echo $form->input('username');
echo $form->input('password');
echo $form->end('Login');
echo "<div id='login-text'>";
echo "<p>If you are a member of <strong>Edinburgh University Computer Gaming Society</strong> you can login here to access your profile, information 
of upcoming tournaments, events &amp; online gaming sessions. In addition you can also add your own kit to our society listing, and gain access to our 
own gaming server, Trogdor.</p><p>If you are not a member you can join by visiting our <a href='users/register/'>registration page</a>.</p>";
echo "</div>";
echo "</div>";
echo "</div>";
?>
