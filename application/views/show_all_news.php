<div class="container body" style="padding: 50px">
    <h2> News List</h2>
    <hr>
    <?php foreach ($content_news as $news) {
        if ($news['type'] == "news") { ?>
        <ul style="list-style: disc">
            <br>
        <span><h4>
                <li>
                    <a href="<?php echo base_url('portalnews/news-details/' . $news['slug']) ?>"><?php echo $news['heading'] ?></a>
            </h4></span>
            <?php echo substr($news['details'], 0, 100);
            echo "......"?>
            </li>
            <br><br>
            <br>
        </ul>
    <?php } } ?>
</div>