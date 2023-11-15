<?php
include_once 'include/header_include.php';
include_once 'header.php'; 
$db= new Database();
?>
<section id="faqs">
    <h1>FAQ'S</h1>
    <div class="container">
        <!-- Accordions  -->
        <div class="accordions">
            <img src="assets/images/faqs-img.png" alt="" class="main-img">
            <div class="row">
                <?php 
                    $query = "SELECT question,answer FROM faqs";
                    $result = $db->select($query);
                    if($result){
                  while($data = $result->fetch_assoc()){
                ?>
                <div class="accordion_card">
                    <div class="accordion_header">
                        <h3><?php echo $data['question'] ?></h3>
                        <button><svg xmlns="http://www.w3.org/2000/svg" width="12" height="21" viewBox="0 0 12 21" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5419 9.36548C11.8352 9.66126 12 10.0624 12 10.4806C12 10.8989 11.8352 11.3 11.5419 11.5958L2.69022 20.5185C2.54587 20.6691 2.37322 20.7893 2.18231 20.8719C1.99141 20.9546 1.78609 20.9981 1.57832 20.9999C1.37056 21.0018 1.16452 20.9619 0.972219 20.8825C0.77992 20.8032 0.605213 20.6861 0.458297 20.538C0.311381 20.3899 0.195195 20.2138 0.116519 20.02C0.0378435 19.8261 -0.00174648 19.6184 5.89215e-05 19.409C0.00186433 19.1996 0.0450298 18.9926 0.127036 18.8002C0.209041 18.6077 0.328245 18.4337 0.477692 18.2882L8.22309 10.4806L0.477692 2.67305C0.192665 2.37557 0.0349495 1.97714 0.0385146 1.56358C0.0420797 1.15002 0.20664 0.754419 0.496753 0.461977C0.786866 0.169536 1.17932 0.00365245 1.58958 5.87339e-05C1.99985 -0.00353499 2.3951 0.155446 2.69022 0.442762L11.5419 9.36548Z" fill="#FD3434" />
                            </svg>
                        </button>
                    </div>
                    <div class="paragraph">
                        <p><?php echo textShorten($data['answer'],250) ?></p>
                    </div>
                </div>
                <?php }
                }else{
                    echo "No FAQ's";
                } ?>
            </div>
        </div>
    </div>
</section>

<?php include_once 'footer.php'; ?>