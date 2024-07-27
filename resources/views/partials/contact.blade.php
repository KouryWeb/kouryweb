<div id="contact" class="contact">
    <div class="container sec6 mw1600">
        <div class="row justify-content-end align-items-end">
            <div class="col-xl-6 col-lg-6">
                <h3>Say <span class="prp">Hi!</span></h3>
                <p class="mt20 text-secondary">
                    What ever the case may be, we’d love to hear from you. <br class="d-none d-xl-block"/>
                    We are here to make your dreams a reality.
                </p>
            </div>

            <div class="col-xl-6 col-lg-6 ">
                <form method="post">
                    @csrf
                    <label for="email" class="wt">Drop your <span class="prp">email here</span> and hit send.</label>
                    <input type="email" name="contact_email" class="form-control" id="inputEmail" placeholder="your@email.com">
                    <button type="submit" class="btnsubmit"></button>
                </form>
            </div>
        </div>
    </div>

    <div class="container sec7 mw1600">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-6 col-sm-6">
                <img class="logofoot" src="images/logo-footer.png" alt="KouryWeb Logo"/>
                <p class="mt60 copy">©{{ now()->year }} Koury Web, LLC. All Rights Reserved.</p>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6">
                <div class="row">
                    <h4 class="text-decoration-underline mb20 d-none d-lg-block">Directory</h4>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 d-none d-lg-block">
                        <a href="#why-us" class="fturl">Why Us</a>
                        <a href="#services" class="fturl">Services</a>
                        <a href="#our-work" class="fturl">Projects</a>
                        <a href="#about" class="fturl">About</a>
                        <a href="#contact" class="fturl">Contact</a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <a target="_blank" href="https://www.linkedin.com/company/9222038/admin/dashboard/" class="fturl">LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
