<?php require($DOCUMENT_ROOT . "partials/header.html"); ?>

<div class="hero">
    <div class="container">
        <div class="copy cushycms" title="Contact information">
            <h2>Contact Us for a quote</h2>
            <a class="phone" href="tel:5089477852">508-947-7852</a>
            <a class="email" href="mailto:info@rockeymeadowenterprises.com">email us</a>
        </div>
    </div>
</div>

<div class="torso home">
    <main>
        <section class="services">
            <div class="container">
                <h1 class="cushycms" title="Services Heading">Construction Services and General Contractor</h1>
                <div class="tiles">
                    <ul class="cushycms" title="Services Column 1">
                        <li>Septic Systems</li>
                        <li>Title V inspections</li>
                        <li>All Utilities</li>
                    </ul>
                    <ul class="cushycms"  title="Services Column 2">
                        <li>Demolition</li>
                        <li>Site Work</li>
                        <li>Underground Utilities</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="cta">
            <div class="container">
                <div class="columns">
                    <div>
                        <h3>View our Photo Gallery</h3>
                        <div class="slider">
                            <img src="img/excavator-construction.jpg" alt="Excavator at Work">
                        </div>
                        <div class="actions">
                            <a href="gallery.php" class="button alt">View Gallery</a>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <h3>Contact Us!</h3>
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
        