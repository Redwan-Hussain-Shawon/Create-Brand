<?php
include_once 'include/header_include.php';
if (isset($_GET['category']) && !empty($_GET['category'])) {
    $category = $_GET['category'];
    include_once 'header.php';

    $db = new Database();
?>
    <section id="blog">
        <h1>Blog</h1>
        <div class="container">
            <div class="row">
                <div class="content">
                    <?php
                    $query = "SELECT * FROM blog_post WHERE cat=$category ORDER BY id DESC LIMIT 5";
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
                    } else {
                        echo "<h3 style='text-align: center'>No Blog Available</h3>";
                    } ?>

                </div>
                <?php include_once 'sidebar.php'; ?>

            </div>
        </div>
        </div>
        </div>
    </section>

<?php
    include_once 'footer.php';
} else {
    redirect('blogs.php');
}
?>