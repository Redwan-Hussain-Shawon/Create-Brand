<?php include "header.php"; ?>

<!-- ^Contact Section Start-->
<section id="contact">
<h1>Contact Us</h1>
    <div class="container">
        <div class="row">
            <form>
                <div class="form-group-setion">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" placeholder="enter your name" id="name" name="name">
                        <small>Error</small>
                    </div>
                    <div class="form-group">
                        <label for="order">Your Email</label>
                        <input type="text" placeholder="enter your email" id="email" name="email">
                        <small>Error</small>
                    </div>
                </div>
                <div class="form-group-setion">
                    <div class="form-group">
                        <label for="how_much">Phone</label>
                        <input type="text" placeholder="enter your phone number" id="phone" name="phone">
                        <small>Error</small>
                    </div>
                    <div class="form-group">
                        <label for="how_much">Your Subject</label>
                        <input type="text" placeholder="enter your phone number" id="subject" name="subject">
                        <small>Error</small>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Your Message</label>
                    <textarea id="message" placeholder="enter your address" style="height: 140px;"></textarea>
                </div>
                <button type='submit' id="contactBtn">Submit</button>
            </form>
            <div class="contact_details">
                <h3>Let's Keep in Touch</h3>
                <p>Have and Question in your Mind, don't Hesitate to Ask.</p>
                <h2>Create Brand</h2>
                <div class="contact_social">
                    <a href="mailto:createbrand.team@gmail.com"><span><img src="assets/icons/top-mail.png" alt=""></span>createbrand.team@gmail.com</a>
                    <a href="tel:0132322232"><span><img src="assets/icons/phone_icons.png" alt=""></span>01322322323</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ^Contact Section End-->
<?php require_once "footer.php"; ?>