<!-- NON FUNZIONA -> perchè? la parte dell'header non si "riempie". Non funziona il database dentro all'header  -->

<header>
    <div class="container">
    <h2>Questo è l'header</h2>

        <ul>
            <?php foreach ($menu as $item) { ?>
            <li>
                <a
                href="<?= $item["url"] ?>">
                    <?= $item["text"] ?>
                </a>
            </li>
            <?php } ?>  
        </ul>

    </div>
</header>
