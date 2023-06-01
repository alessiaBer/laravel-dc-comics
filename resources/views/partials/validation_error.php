<?php if ($errors->any()) : ?>
    <div class="alert alert-danger">
        <ul class="list-unstyled">
            <?php foreach ($errors->all() as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>
