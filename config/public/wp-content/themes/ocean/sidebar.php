    </div>
    <div id="subcontent">
      <h5>Pages</h5>
      <ul>
        <?php wp_list_pages('title_li='); ?>
      </ul><br>
      <h5>Categories</h5>
      <ul>
        <?php wp_list_categories('title_li='); ?>
      </ul>
      <br>
      <h5>Archives</h5>
      <ul>
        <?php wp_get_archives('type=monthly'); ?>
      </ul><br>
    </div>
