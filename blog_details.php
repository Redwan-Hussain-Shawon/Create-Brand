<?php
include_once 'include/header_include.php';
if (!isset($_GET['id']) || $_GET['id'] == NULL) {
    redirect('blog.php');
} else {
    $id = $_GET['id'];
}
include_once 'header.php';

?>
<section class="blog_details" id="blog_details">
    <h1>Blog Details</h1>
    <div class="container">
        <?php
        $db = new Database();
        $query = "SELECT * FROM blog_post WHERE id ='$id'";
        $result = $db->select($query);
        if ($result) {
            $data = $result->fetch_assoc();
        ?>
            <h2><?php echo $data['title'] ?></h2>

            <h5 class="blog_author_time"><span><?php echo $data['author'] ?></span><?php echo formateDate($data['created_at']) ?></h5>
            <div class="blog_img">
                <img src="cb_admin/upload/<?php echo $data['image'] ?>" alt="">
                <div class="blog_img_ef"></div>
            </div>
            <div class="body">
                <?php echo $data['body'] ?>
            </div>
            <!-- Related Posts -->
            <?php 
                 $category = $data['cat'];
                 $id = $data['id'];
                $query1 = "SELECT * FROM blog_post  WHERE NOT id = '$id' AND cat='$category' ORDER BY id DESC LIMIT 3" ;
                $result = $db->select($query1);
         if($result){
            ?>
            <div class="related_posts">
                <h3>Related Posts</h3>
                <div class="content">

                    <?php while($pData=$result->fetch_assoc()){ ?>
                    <a href="blog_details.php?id=<?php echo $pData['id'] ?>" class="blog_link">
                        <div class="card">
                            <div class="img">
                                <img src="cb_admin/upload/<?php echo $pData['image'] ?>" alt="">
                            </div>
                            <div class="blog_text">
                                <h3><?php echo $pData['title'] ?></h3>
                                <p><?php echo textShorten($pData['body'], 135) ?></p>
                            </div>
                        </div>
                    </a>
                    <?php }?>
                </div>
            </div>

        <?php }
         } else {
            echo "<h3 style='text-align:center;color:red;'>No Data Found<h3>";
        } ?>
    </div>
</section>


<?php require_once "footer.php"; ?>