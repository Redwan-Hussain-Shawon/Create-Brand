<?php
$query = "SELECT facebook,linkedin,instagram,twitter FROM information_create_brand WHERE id = '1'";
$result = $db->select($query);
if ($result) {
    $socialLink = $result->fetch_assoc();
?>
    <div class="sidebar">
        <div class="social_link">
            <h4>Social Networks</h4>
            <div class="card">
                <div class="card-body">
                    <a href="<?php echo $socialLink['facebook'] ?>" target="_blank">
                        <div class="facebook"><img src="assets/icons/facebook.svg" alt=""></div> Facebook
                    </a>
                    <a href="<?php echo $socialLink['instagram'] ?>" target="_blank">
                        <div class="instagram"><img src="assets/icons/instagram.svg" alt=""></div> Instagram
                    </a>
                </div>
                <div class="card-body">
                    <a href="<?php echo $socialLink['linkedin'] ?>" target="_blank">
                        <div class="linkdin"><img src="assets/icons/linkdin.svg" alt=""></div>Linkdin
                    </a>
                    <a href="<?php echo $socialLink['twitter'] ?>" target="_blank">
                        <div class="twitter"><img src="assets/icons/twitter.svg" alt=""></div>Twitter
                    </a>
                </div>
            </div>
        </div>
    <?php } // end of Social Link php 
    ?>
    <div class="recent_post">
        <h4>Resent Post</h4>
        <a href="">
            <div class="card">
                <img src="assets/images/frontend-600x338.webp" alt="">
                <div class="texts">
                    <h5>7 Content marketing strategies for your online shop </h5>
                    <p>11 March 2023</p>
                </div>
            </div>
        </a>

        <a href="">
            <div class="card">
                <img src="assets/images/card-img.png" alt="">
                <div class="texts">
                    <h5>7 Content marketing strategies for your online shop </h5>
                    <p>11 March 2023</p>
                </div>
            </div>
        </a>
        <a href="">
            <div class="card">
                <img src="assets/images/blog-img.png" alt="">
                <div class="texts">
                    <h5>7 Content marketing strategies for your online shop </h5>
                    <p>11 March 2023</p>
                </div>
            </div>
        </a>
        <a href="">
            <div class="card">
                <img src="assets/images/blogpost.webp" alt="">
                <div class="texts">
                    <h5>7 Content marketing strategies for your online shop </h5>
                    <p>11 March 2023</p>
                </div>
            </div>
        </a>
        <a href="">
            <div class="card">
                <img src="assets/images/frontend-600x338.webp" alt="">
                <div class="texts">
                    <h5>7 Content marketing strategies for your online shop </h5>
                    <p>11 March 2023</p>
                </div>
            </div>
        </a>

    </div>

    <!-- Category  -->
    <?php
    $query1 = "SELECT * FROM blog_category";
    $result = $db->select($query1);
    if ($result) {
    ?>
        <div class="category">
            <div class="row">
                <h4>Category</h4>
                <?php while($data=$result->fetch_assoc()){ ?>
            <a href="blogs.php?category=<?php echo $data['id']; ?>">
                <div class="card">
                  <?php echo $data['name'] ?>
                  </div>
                </a>
                <?php } ?>
            </div>
        <?php
    } else {
    } ?>
        </div>
    </div>