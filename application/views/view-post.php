<section class="vine-main pt-5">
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12 col-lg-3 mb-3">
				<?php 
                    $this->load->view('layouts/user-sidebar');
                ?>
            </div>
            <!--/col-lg-3-->


            <!--/col-lg-3-->
            <div class="col-lg-9 ps-lg- ">

				<div class="events-container">
					<div class="events-header">
						<span class="events-title">
							<i class="megaphone-icon"></i> View Post
						</span>
						<button class="close-btn"></button>
					</div>


					<div class="contact-form">

					
							<div class="row">
								<div class="col-md-12">
									<div class="pb-3">
										<label for="topic_name">Topic Name: </label>
										<input type="text" name="topic_name" id="topic_name" value = "<?= $forum_post['title'] ?>" placeholder="">
									</div>
								</div>

								<div class="col-md-12">
									<div class="pb-3 field-textarea">
										<label for="message">Message body:</label>
										<textarea id="message" name="message" rows="5"
											cols="80"><?= $forum_post['content'] ?></textarea>
									</div>
								</div>


								<div class="col-md-12">
									<div class="pb-3">
										<label for >Featured Image</label>
										<br>
										<img src="<?= base_url() . $forum_post['featured_image'] ?>" height = "300px" width = "300px" alt="">
									</div>
								</div>


							</div>
						
					</div>



				</div>



            </div>
            <!--/col-lg-9-->

        </div>
    </div>
</section>
