<!DOCTYPE html>

<html lang="en-US">
  <head>
    <?php include 'includes/header.php'; ?>

    <body class="size-1280">
      <!-- HEADER -->
      <?php include 'includes/head-banner.php'; ?>

    <!-- MAIN -->
    <main role="main">
      <article>
        <!-- Header -->
        <header class="section background-image text-center" style="background-image:url(img/img-05.jpg)">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            <b>Contact Us</b>
          </h1>
          <p class="animated-element text-white"></p>

          <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>

        <!-- Section 1 -->
        <section class="section-small-padding background-white text-center">
          <div class="line">
            <!-- <i class="icon-sli-heart text-primary text-size-40"></i> -->
            <h2 class="text-dark text-size-50 text-m-size-40">We are here for you <b class="text-primary">24/7</b></h2>
          </div>
        </section>

        <!-- Section 2 -->
        <section class="full-width background-grey">
          <div class="m-12 l-6">
            <div class="padding-3x">
              <div class="margin2x">

                <div class="l-12 xl-6 margin-bottom-60">
                  <div class="float-left">
                    <i class="icon-sli-location-pin text-primary text-size-40 text-line-height-1"></i>
                  </div>
                  <div class="margin-left-60">
                    <h2 class="text-size-20 margin-bottom-10 text-strong">Company Address</h2>
                    <p>Building 3, 102</p>
                    <p>Huang Yang rd, 360</p>
                    <p>Pudong</p>
                    <p>Shanghai, China</p>
                  </div>
                </div>

                <div class="l-12 xl-6 margin-bottom-60">
                  <div class="float-left">
                    <i class="icon-sli-envelope text-primary text-size-40 text-line-height-1"></i>
                  </div>
                  <div class="margin-left-60">
                    <h2 class="text-size-20 margin-bottom-10 text-strong">E-mail</h2>
                    <p><a class="text-primary-hover" href="mailto:contact@influxanalytics.org">contact@influxanalytics.org</a></p>
                  </div>
                </div>

                <div class="l-12 xl-6 margin-bottom-60">
                  <div class="float-left">
                    <i class="icon-sli-earphones-alt text-primary text-size-40 text-line-height-1"></i>
                  </div>
                  <div class="margin-left-60">
                    <h2 class="text-size-20 margin-bottom-10 text-strong">Phone Number</h2>
                    <p>+86 177 2134 1972</p>
                  </div>
                </div>

                <!-- <div class="l-12 xl-6">
                  <div class="float-left">
                    <i class="icon-sli-paper-plane text-primary text-size-40 text-line-height-1"></i>
                  </div>
                  <div class="margin-left-60">
                    <h2 class="text-size-20 margin-bottom-10 text-strong">Billing information</h2>
                    <p>Hendrerit in vulputate duis autem vel eum iriure dolor in velit esse molestie consequat, vel illum dolore nulla facilisis</p>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          <div class="m-12 l-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d838.1680908957192!2d121.59133669477878!3d31.240795999243723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35b276678ce10d2f%3A0x9ba9277fcd7f7744!2sBiyun%20International%20Community%20Xiaoyuan!5e0!3m2!1sen!2s!4v1600017236505!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </section>

        <!-- Section 3 -->
        <section class="section background-dark">
          <div class="s-12 m-12 l-4 center">
            <h3 class="text-size-30 margin-bottom-40 text-center"><b>Contact Form</b></h3>
            <a name="form"></a>
            <form class="customform text-white" method="post" action="contact.php#form" enctype="multipart/form-data">
              <div class="line">
                <div class="margin">
                  <div class="s-12 m-12 l-6">
                    <input name="from" class="required email" placeholder="Your e-mail" title="Your e-mail" type="text" />
                  </div>
                  <div class="s-12 m-12 l-6">
                    <input name="name" class="name" placeholder="Your name" title="Your name" type="text" />
                  </div>
                </div>
              </div>

              <div class="line">
                <div class="s-12">
                  <input name="subject" class="required subject" placeholder="Subject" title="Subject" type="text" />
                </div>
                <div class="s-12">
                  <textarea name="message" class="required message" placeholder="Your message" rows="3"></textarea>
                </div>
                <div class="s-12"><button class="button border-radius text-white background-primary" type="submit">Send!</button></div>
              </div>
            </form>
            <?php


              if(array_key_exists("from",$_POST)) {

                $subject = "Contact Us Form: " . $_POST["subject"];
                $msg = "\nFrom: ". $_POST["name"]. "\nEmail:" .$_POST["from"];

                mail("cyrus2021262@concordiashanghai.org", $subject, $msg);

                echo "<h4 style='text-align:center'> Your message has been sent! Thanks for taking the time to contact us :)</h4>";
              }

            ?>
          </div>
        </section>
      </article>
    </main>

    <!-- FOOTER -->
    <?php include "includes/footer.php"; ?>

    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
  </body>
</html>
