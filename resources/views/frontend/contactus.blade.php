<section id="contact" class="wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Contact</h2>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="contactmap">
                    <div class="mapcont">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14118.373639293623!2d-82.6744931!3d27.7914996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa03f44d4f6f85547!2sNail+Art+%26+Spa!5e0!3m2!1svi!2s!4v1514690198834"
                            width="100%" height="450" frameborder="0" style="border: 0" allowfullscreen></iframe>
                    </div>
                    <div class="social">
                        <p>3020 22nd Ave N, St. Petersburg, FL 33713</p>
                        <span>Phone - <a href="tel:727-999-1581">727-999-1581</a> </span>
                        <br />
                        <span>Email -
                            <a href="mailto:NailArtSpa@Yahoo.com">NailArtSpa@Yahoo.com</a>
                        </span>
                        <div class="social-icon">
                            <a href="https://www.facebook.com/nailartspaStPete/" class="facebook"></a>
                            <a href="https://www.google.com/search?ei=8b0EWqmTA8We0gLS8JWwBQ&q=Nail+Art+%26+Spa+33713"
                                class="google"></a>
                            <!-- <a href="https://www.instagram.com/nailartspa/" class="youtube"></a>
                            <a href="https://www.yelp.com/biz/nail-art-and-spa-st-petersburg" class="twitter"></a> -->
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 pull-right">
                <div id="ContactSuccessMessage" style="color: white !important">
                    {{ isset($contactSuccessMessage) ?? '' }}
                </div>
                <div id="ContactErrorMessage">{{ isset($contactErrorMessage) ?? '' }}</div>
                <form (ngSubmit)="onSubmit()" name="ContactForm" id="ContactForm">
                    <div class="form-group pull-left">
                        <input type="text" class="form-control" required name="name" formControlName="name"
                            placeholder="Name" />
                    </div>
                    <div class="form-group pull-left marright0">
                        <input type="email" required class="form-control email" name="email" formControlName="email"
                            placeholder="Email Id" />
                    </div>
                    <div class="textarea pull-left">
                        <input type="text" required class="form-control w-100" name="subject" formControlName="subject"
                            placeholder="subject" />
                    </div>

                    <div class="textarea pull-left">
                        <textarea placeholder="Description" required name="description" formControlName="description"
                            class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default" value="Submit" [disabled]="!contactUsForm.valid">
                        SUBMIT
                    </button>
                </form>
                <div class="coypright">
                    <p>&copy; Nail Art & Spa {{ isset($year) ?? now()->year() }}</p>
                </div>
            </div>
        </div>
    </div>
</section>