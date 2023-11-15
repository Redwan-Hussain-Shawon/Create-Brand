<?php
include_once 'include/header_include.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/site_responsive.css">
</head>

<body>
    <header>

        <?php
        $db = new Database();

        $query = "SELECT gmail,phone from information_create_brand WHERE id ='1'";
        $result = $db->select($query);
        if ($result) {
            $socialLink = $result->fetch_assoc();
        ?>
            <section class="top-bar">
                <div class="container">
                <a href="tel:<?php echo $socialLink['phone'] ?>" style="align-items: center; display:flex">
                    <img src="assets/icons/phone_icons.png" alt="phone">
                    <h3 class="first-h3"><?php echo $socialLink['phone'] ?></h3>
                </a>
                <a href="mailto:<?php echo $socialLink['gmail'] ?>" style="align-items: center; display:flex">
                    <img src="assets/icons/top-mail.png" alt="Mail">
                    <h3><?php echo $socialLink['gmail'] ?></h3>
                </a>
                </div>
            </section>
        <?php } ?>
        <nav>
            <div class="container">
                <div class="logo">
                    <h2>Create Brand</h2>
                </div>
                <ul class="main_menu">
                    <li><a href="">Home</a></li>
                    <li><a class="dorp_down_a">Our Services <img src="assets/icons/mingcute_down-line.png"></a>
                        <div class="drop_menu">
                            <ul class="drop-down">
                                <li><a href="">Web Development </a></li>
                                <li><a href="">Web Design</a></li>
                                <li><a href="">SEO</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="dorp_down_a" href='our-team.php'>Our Team</a>
                    </li>
                    <li><a href="about-us.php">About</a></li>
                    <li><a href="contact-us.php">Contact</a></li>
                    <li><a href="our-work.php" class="dorp_down_a">Our Project <img src="assets/icons/mingcute_down-line.png"></a>
                        <div class="drop_menu">
                            <ul class="drop-down">
                                <li><a href="our-work.php">Our Work </a></li>
                                <li><a href="">Web Design</a></li>
                                <li><a href="">SEO</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="faqs.php">FAQ's</a></li>
                    <li><a href="blog.php">Blog</a></li>

                </ul>
                <div class="menu-icon">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </nav>
    </header>
    <main>