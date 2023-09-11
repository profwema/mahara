<?php
$title='شركة مهارة الرقمية للتجارة - تواصل معنا';
?>
<!DOCTYPE html>
<html lang="en">

    <?php require_once("head.php");?>


<body>
    <?php require_once("header.php");?>


    <!-- Breadcrumb Start -->
    <div class="container-fluid mt-5">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">الرئيسية</a>
                    <span class="breadcrumb-item active">التواصل</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pr-3">تواصل معنا</span>
        </h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="الاسم"
                                required="required" data-validation-required-message="ادخل اسمك من فضلك" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="البريد الالكتروني"
                                required="required" data-validation-required-message="قم بادخال بريدك الالكتروني" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="العنوان"
                                required="required" data-validation-required-message="ادخل عنوان الرسالة" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="9" id="message" placeholder="محتوى الرسالة"
                                required="required"
                                data-validation-required-message="ادخل محتوى الرساله"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">إرسال</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-30">
                    <iframe style="width: 100%; height: 250px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.309720125402!2d46.68751201537415!3d24.681877658469528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f032bd3bf6593%3A0xd02547a2fea14!2sRiyadh%20olaya%20computer%20Market!5e0!3m2!1sen!2sbg!4v1667505244383!5m2!1sen!2sbg"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="bg-light p-30 mb-3">
                    <p class="mb-2">
                      <i class="fa fa-map-marker-alt text-primary mr-3"></i>
                      المملكة العربية السعودية - الرياض - العليا - سوق الكمبيوتر
                  </p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@maharahdigital.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>0112162777</p>
                    <p class="mb-2"><i class="fa fa-mobile-alt text-primary mr-3"></i>0552204321</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <?php require_once("footer.php");?>

    <?php require_once("js-src.php");?>
        <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
</body>

</html>