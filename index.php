<?php
    $content = isset($_GET['page']) ? $_GET['page'] : '';

    require 'server/config.php';
    require 'lib/funcs.php';
    require 'template/head.php';
    require 'template/menu.php';
?>
    <div class="container">
        <?php
            routes($content);
        ?>
    </div>
<?php
    require 'template/footer.php';
?>