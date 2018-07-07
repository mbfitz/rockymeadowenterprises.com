<?php require($DOCUMENT_ROOT . "partials/header.html"); ?>

<div class="hero contact">
    <div class="container">
        <div class="copy cushycms" title="Contact information">
            <h1>Contact Us</h1>
        </div>
    </div>
</div>

<div class="torso contact">
    <main>
      <section>
        <div class="container">
          <div class="actions">
            <a class="phone" href="tel:5089477852">508-947-7852</a>
            &nbsp;&nbsp;
            <a class="email" href="mailto:info@rockymeadowenterprises.com">email us</a>
          </div>
        </div>
      </section>
      <section class="cta">
          <div class="container">
            <div class="columns">
              <div>
                <img src="img/team.jpg" alt="Our Team">
              </div>
              <hr>
              <div>
                <p>
                    Please fill out the form below and we will get back to you shortly. 
                </p>
                <form method="post" action="contactengine.php" name="contact">
                <input type="text" name="fullname" id="name" placeholder="Full Name" />

                <input type="text" name="phone" id="city" placeholder="Phone" />

                <input type="email" name="email" id="email" placeholder="Email" />

                <textarea name="comments" rows="40" cols="20" id="comments"  placeholder="Tell us about your project."></textarea>

                <div class="g-recaptcha" data-sitekey="6LfCJU4UAAAAAIh-JI5ma-cTUWJP2ogA9uFvPVjy"></div>

                <input type="submit" name="submit" value="Submit" class="submit-button" />
                </form>
              </div>
            </div>
              
          </div>
      </section>
    </main>
</div>

<?php require($DOCUMENT_ROOT . "partials/footer.html"); ?>

