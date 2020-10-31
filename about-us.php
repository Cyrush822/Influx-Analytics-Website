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
        <header class="section background-image text-center" style="background-image:url(img/team-banner.jpg); padding: 12rem 1.25rem">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            <b>Meet the team</b>
          </h1>

          <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>

        <section class="section background-white">
          <div class="line" style="max-width: 100rem;">
            <div class="margin2x">
              <div class="line margin-bottom-80" style="max-width: 100rem;">
                <div class="margin2x vertical-center">
                  <div class="m-12 l-6 margin-m-bottom-30">
                    <div class="flex-vertical">
                      <input type="image" src="img/team-charles.jpg" name="charles" id="charlesPic" style="margin-bottom: 1rem; max-height: 30rem;" />
                      <h2><b>Charles Wang</b></h2>
                      <h3> Operations Coordinator </h3>
                    </div>
                  </div>
                  <div class="m-12 l-6 margin-m-bottom-30">
                    <div class="flex-vertical">
                      <input type="image" src="img/team-alex.jpg" name="alex" id="alexPic" style="margin-bottom: 1rem; max-height: 30rem;" />
                      <h2><b>Alex Gao</b></h2>
                      <h3> Business Coordinator </h3>
                    </div>
                  </div>
                  <div class="m-12 l-6 margin-m-bottom-30">
                    <div class="flex-vertical">
                      <input type="image" src="img/team-athena.jpg" name="athena" id="athenaPic" style="margin-bottom: 1rem; max-height: 30rem;" />
                      <h2><b>Athena Ru</b></h2>
                      <h3> Lead Data Analyst, Branding Designer </h3>
                    </div>
                  </div>
                  <div class="m-12 l-6 margin-m-bottom-30">
                    <div class="flex-vertical">
                      <input type="image" src="img/team-cyrus.jpg" name="cyrus" id="cyrusPic" style="margin-bottom: 1rem; max-height: 30rem;" />
                      <h2><b>Cyrus Hung</b></h2>
                      <h3> Lead Web Developer </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="margin2x " style="border-style: solid; padding: 1rem 1rem">
              <h3 class="animated-element text-strong text-size-50 text-line-height-1 margin-bottom-20" id="name">Charles Wang</h3>
              <p class="animated-element slow margin-bottom-10 text-size-30" id="age"><b>Age: </b> 17 </p>
              <p class="animated-element slow margin-bottom-30 text-size-30" id="pronouns"><b>Pronouns: </b> He/Him </p>

              <h3 class="animated-element text-strong text-size-30 text-line-height-1 margin-bottom-20">Skills and Personal Bio</h3>
              <p class="animated-element slow margin-bottom-30 text-size-20" id="bio">Charles Wang has worked on numerous data analytical projects. Driven by his passion for Data Science, he uses every opportunity to showcase how powerful data can truly be. He founded Influx Analytics to deliver accessible and relevant information for sustainable change and hopes, with his leadership, this project can be brought to life. Charles has also worked on AI Breast Cancer Data Image Processing at a Tencent-backed healthcare company known as WeDoctor, whilst also tracking and treating live Covid-19 cases and outbreaks across the world with data analytics programs. Whilst at Northwestern University Equinox Program he published a research paper about fascinating correlations in the sports realm. He strives to impact his community and the world.
              </p>
              <h3 class="animated-element text-strong text-size-30 text-line-height-1 margin-bottom-20">Why did you join Influx?</h3>
              <p class="animated-element slow margin-bottom-30 text-size-20" id="why">Charles Wang founded Influx Analytics in 2020 during the Coronavirus pandemic. Since January, he has been bombarded by a myriad of headlines regarding Covid-19's impact on politics and economics. Yet there was a community underrepresented: students. Charles believes that through data and its analysis, he and the Influx Analytics team could bring necessary information to the public. Furthermore, Charles thought that he could take this opportunity to put out further research and analysis on other important events around the world.
              </p>
            </div>

          </div>
        </section>

        <script>
        let charlesInfo = {
          name: "Charles Wang",
          age: 17,
          pronouns: "He/Him",
          bio: "Charles Wang has worked on numerous data analytical projects. Driven by his passion for Data Science, he uses every opportunity to showcase how powerful data can truly be. He founded Influx Analytics to deliver accessible and relevant information for sustainable change and hopes, with his leadership, this project can be brought to life. Charles has also worked on AI Breast Cancer Data Image Processing at a Tencent-backed healthcare company known as WeDoctor, whilst also tracking and treating live Covid-19 cases and outbreaks across the world with data analytics programs. Whilst at Northwestern University Equinox Program he published a research paper about fascinating correlations in the sports realm. He strives to impact his community and the world.",
          why: "Charles Wang founded Influx Analytics in 2020 during the Coronavirus pandemic. Since January, he has been bombarded by a myriad of headlines regarding Covid-19's impact on politics and economics. Yet there was a community underrepresented: students. Charles believes that through data and its analysis, he and the Influx Analytics team could bring necessary information to the public. Furthermore, Charles thought that he could take this opportunity to put out further research and analysis on other important events around the world."
        }

        let alexInfo = {
          name: "Alex Gao",
          age: 17,
          pronouns: "He/Him",
          bio: "Alex has been a passionate data analyst and avid economics enthusiast. With a passion for critical thinking and in depth analysis, Alex is a devoted and active member of the team and invests himself in macro level research around global phenomena and issues. Outside of Influx Analytics, Alex has been working on research projects for global conferences such as ICBDE and competitions that included NEC China Nationals. He has also worked for Aldephi FocusRx Ltd in their data analytics for pharma marketing in multiple areas of China.",
          why: "Sharing Charles’s passion for a student run data analytics group, Alex worked with Charles to found what is now Influx Analytics in 2020, forming the Influx Analytics Team with Cyrus and Athena. Being directly affected by Covid-19’s implications on education, Alex’s drive stems from his motivation to greatly improve the human perception of world issues. With a vision to navigate societal events with an analytical lense, Alex hopes to reveal the significance of data in an approachable and innovative fashion."
        }

        let athenaInfo = {
          name: "Athena Ru",
          age: 17,
          pronouns: "She/Her",
          bio: "Athena Ru is an experienced data analyst and graphic designer. Driven by an insatiable curiosity of the world, she takes pride in uncovering hidden data insights and presenting them in an engaging, thought-provoking manner. In addition to working at Influx, Athena has her own YouTube channel where she produces tutorials on how to use IBM Cognos Analytics, an AI-powered business analytics platform. She is also the proud co-author of a comic book series that aims to introduce Big Data to students.",
          why: "Athena Ru joined Influx Analytics in 2020 in the midst of the Coronavirus pandemic. As an international student whose school closed down during the onset of the pandemic, she wondered how data could facilitate the transition to distance learning. Athena hopes to use her skills to highlight the importance of using data to make informed decisions."
        }

        let cyrusInfo = {
          name: "Cyrus Hung",
          age: 17,
          pronouns: "He/Him",
          bio: "Cyrus is a long time Computer Science enthusiast and MUN debater. With a passion for creating things, he loves working on programming projects that seek to solve problems through a unique solution. So far, he has created many games for his school's community, created a website that helps children who stutter through verbal exercises, and an app designed for school coaches that tracks player information and creates customized schedules for sports practices.",
          why: "Cyrus Hung joined Influx Analytics in 2020 during the Coronavirus pandemic as he understands the power that technology and data can bring for this world. Believing in Influx's vision for using data analysis to uncover insights and informing the public, he joined as lead web developer to spread Influx's message and research. He hopes that he can use his skills to fulfil Influx's goal of bringing the public much needed information and insights."
        }

        $(document).ready(function() {
          $("#charlesPic").click(function() {setText(charlesInfo)});
          $("#athenaPic").click(function () {setText(athenaInfo)});
          $("#alexPic").click(function() {setText(alexInfo)});
          $("#cyrusPic").click(function() {setText(cyrusInfo)});

          function setText(info) {
            $("#name").text(info["name"]);
            $("#age").html("<b>Age: </b>" + info["age"]);
            $("#pronouns").html("<b>Pronouns: </b>" + info["pronouns"]);
            $("#bio").text(info["bio"]);
            $("#why").text(info["why"]);
          }
        });

        </script>
      </article>

      <hr class="break">
      <!-- Section 4 -->
      <section class="section-small-padding background-white text-center">
        <div class="line">
          <div class="s-12 m-12 l-9 center margin-bottom-30">
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-10"><b>We are four passionate students that seek to uncover true conclusions that the world needs. Through extensive learning and experience, we aim to provide the top of the line assistance and innovative research!</b>
</h3>
          </div>
        </div>
        <div class="line">
          <div class="s-12 m-12 l-3 center">
            <a href="contact.php" class="s-12 button border-radius background-primary text-size-20 text-white">Contact Us</a>
          </div>
        </div>
      </section>
    </main>

    <!-- FOOTER -->
    <?php include "includes/footer.php"; ?>

    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
  </body>
</html>
