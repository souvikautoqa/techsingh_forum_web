<style>
	label.error{
		color: red;
	}
</style>
        <!-- ==============================================
         Main
        =============================================== -->

        <section class="vine-main pt-5">
            <div class="container-fluid">
                <div class="row">


                    <!--/col-lg-3-->
                    <div class="col-lg-12 ps-lg- ">

                        <div class="events-container">
                            <div class="events-header my-4">
                                <span class="events-title">
                                    <i class="megaphone-icon"></i> Post a new topic
                                </span>
                                <button class="close-btn"></button>
                            </div>


                            <div class="contact-form">

                                <form action="" enctype = "multipart/form-data" id = "postForm" method = "POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="pb-3">
                                                <label for="topic_name">Topic Name: </label>
                                                <input type="text" name="topic_name" id="topic_name" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="pb-3 field-textarea">
                                                <label for="message">Message body:</label>
                                                <textarea id="message" name="message" rows="5" cols="80"></textarea>
                                            </div>
                                        </div>


										<div class="col-md-12">
                                            <div class="pb-3">
                                                <label for="featured_image">Upload Image:</label>
                                                <input type="file" name="featured_image" id="featured_image"
                                                    placeholder="">
                                            </div>
                                        </div>

										<input type="hidden" name="category_id" value = "<?= $category['id']?>">


										<!-- Google reCAPTCHA (using test site key) -->
										<div class="g-recaptcha mb-4 w-100" data-sitekey="<?= GOOGLE_SITE_KEY ?>"></div> 
										
                                        <div class="d-flex flex-row-reverse">
                                            
                                            <div class="col-md-2 mt-4">
                                                <div class="field-submit">
                                                    <input type="submit" value="Submit" class="btn btn-org"
                                                        name="submit">
                                                </div>
                                            </div>
                                        </div>


                                        




                                    </div>
                                </form>
                            </div>



                        </div>



                    </div><!--/col-lg-9-->

                </div>
            </div>
        </section>

