<div class="container">
    <div class="col-md-4">
        <h1>Bienvenu dans mon chat</h1>
        <div class="form-group">
            <form action="index.php?controller=Message&method=insert" method="post">
                <textarea  name="message" cols="30" rows="10" placeholder="Your message"></textarea>
                <input  type="text" name="user" placeholder="Your name">
                <button type="submit" class="btn btn-primary">Send</button>
            </form>

            <div class="col-md-6">
                <h2>Le tchaaaaat</h2>
                <div class="form-group">
                    <?php foreach ($allMyMessages as $message) : ?>
                        <p><?= $message->getMessage() ?></p>
                        <small><?= $message->getAuthor() ?></small>

                    <?php endforeach ?>
                </div>
            </div>

        </div>
    </div>

</div>
