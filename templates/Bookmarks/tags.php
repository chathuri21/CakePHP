<h1>
    Getting all bookmarks with sertain tags
    <?php $this->Text->toList($tags); ?>
</h1>

<section>
    <?php
        foreach ($bookmarks as $bookmark)
    ?>
        <article>
            <h4><?php $this->Html->link($bookmark->title, $bookmark->url); ?></h4>            
            <small><?php h($bookmark->url) ?></small>

            <?= $this->Text->autoParagraph($bookmark->description); ?>
        </article>
</section>