<h1>Le tchaaaaat</h1>

<?php foreach ($messages as $message) : ?>
    <p><?= $message['content'] ?></p>
    <small><?= message['author'] ?></small>

<?php endforeach ?>
