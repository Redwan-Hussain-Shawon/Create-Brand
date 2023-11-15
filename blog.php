<?php
include_once 'include/header_include.php';
include_once 'header.php';

$db = new Database();
?>

<section id="blog">
    <h1>Blog</h1>
    <div class="container">
        <div class="row">
            <div class="content">
                <?php
                $per_page = 5;
                if (isset($_GET['page']) && !empty($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }
                $start = ($page - 1) * $per_page;
                $query = "SELECT * FROM blog_post ORDER BY id DESC LIMIT $start,$per_page";
                $result = $db->select($query);
                if ($result) {
                    while ($bPost = $result->fetch_assoc()) {
                ?>
                        <a href="blog_details.php?id=<?php echo $bPost['id'] ?>" class="blog_link">
                            <div class="card">
                                <div class="img">
                                    <img src="cb_admin/upload/<?php echo $bPost['image'] ?>" alt="">
                                </div>
                                <div class="blog_text">
                                    <h3><?php echo $bPost['title'] ?></h3>
                                    <p><?php echo textShorten($bPost['body'], 135) ?></p>
                                </div>
                            </div>
                        </a>
                <?php    }
                } ?>

                <?php
                // Pagination 
                $query = "SELECT * FROM blog_post";
                $result = $db->select($query);
                if ($result) {
                    $total_row = $result->num_rows;
                    $total_page = ceil($total_row / $per_page);


                ?>
                    <div class="pagination_buttons">
                        <?php
                        if ($page > 1) { ?>
                            <a href="blog.php?page=<?php echo ($page - 1) ?>">
                                <div class="n_p_btn"><img src="assets/icons/pgRight.png" alt=""></div>
                            </a>
                        <?php } ?>

                        <?php for ($i = 1; $i <= $total_page; $i++) {
                            if ($i == $page) {
                                $active = 'activeP';
                            } else {
                                $active = '';
                            }
                        ?>
                            <a href="blog.php?page=<?php echo $i ?>" class='<?php echo $active ?>'><?php echo $i ?></a>
                        <?php   } ?>
                        <?php
                        if ($total_page > $page) { ?>
                        <a href="blog.php?page=<?php echo ($page + 1) ?>">

                            <div class='n_p_btn'><img src="assets/icons/pgLeft.png" alt=""></div>
                        </a>
                        
                        <?php }?>
                    </div>
            </div>
        <?php } ?>
     
            <?php include_once 'sidebar.php'; ?>

        </div>
    </div>
    </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>