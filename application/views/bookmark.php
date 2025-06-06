
            <section class="dashboard">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12 col-lg-3 mb-3">

                            <?php 
								$this->load->view('layouts/user-sidebar');
							?>

                        </div>
                        <!--/col-lg-3-->

                        <div class="col-12 col-lg-9">
                                                        

                            <div class="row mt-2 userprofile-stats" id="bookmark">




                                <div class="container">
                                    <!-- Bookmarks Section -->
                                    <div class="mybookmarks-container">
                                        <div class="mybookmarks-header">Show bookmarks from:</div>
                                        <form action="" method = "GET">
											<?php 
												$category_id = $_GET['category_id'] ?? '';
												$from_date = $_GET['from_date'] ?? '';
												$to_date = $_GET['to_date'] ?? '';
											?>
											<div class="d-flex flex-wrap align-items-center">
												<select class="form-select mybookmarks-select me-3" name = "category_id" id = "category_id" aria-label="Forum">
													<option selected>All</option>
													<?php 
														foreach($categories as $category){
													?>
															<option value="<?= $category['id'] ?>" <?= $category_id == $category['id'] ? "selected" : "" ?>><?= $category['name'] ?></option>
													<?php
														}
													?>
												</select>
												<div class="d-flex mybookmarks-date-range">
													<input type="date" class="form-control mybookmarks-date-input" name = "from_date" id = "from_date" placeholder="yyyy-mm-dd" value = "<?= $from_date?>">
													<span>to</span>
													<input type="date" class="form-control mybookmarks-date-input" name = "to_date" id = "to_input" placeholder = "yyyy-mm-dd" value = "<?= $to_date ?>">
													<button type = "submit" class="mybookmarks-go-btn">Go</button>
												</div>
											</div>
										</form>
                                        <div class="mybookmarks-buttons mt-3">
                                            <button class="btn" type = "button" id = "select_all_btn">SELECT ALL</button>
                                            <!-- <button class="btn">INVERSE SELECTION</button> -->
                                            <button class="btn" type = "button" id = "remove_selected_btn">REMOVE SELECTED</button>
                                        </div>
                                        <table class="table  mybookmarks-table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Kudos</th>
                                                    <th>Topic / Post</th>
                                                    <th>Forum</th>
                                                    <th>Bookmark Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>

											    <?php 
													if(!empty($bookmark_posts)){
														foreach($bookmark_posts as $key => $b_post){
												?>
															<tr>
																<td><input type="checkbox" name="b_id[]" id="" value = "<?= $b_post['id'] ?>" class = "bookmark_checkbox"></td>
																<td><?= $b_post['total_likes'] ?></td>
																<td><a href="<?=base_url() . $b_post['cat_url_slug'] . "/" . $b_post['url_slug'] ?>"><?= $b_post['post_title'] ?></td>
																<td><a href="<?=base_url() . "forum/" .  $b_post['cat_url_slug'] ?>"><?= $b_post['category_name'] ?></a></td>
																<td><?= $b_post['created_at'] ?></td>
															</tr>

												<?php
														}
													}else{
												?>
														<tr>
															<td colspan="5" class="text-center">You have no bookmarks.</td>
														</tr>
												<?php
													}
												?>

                                                
                                            </tbody>
                                        </table>
                                    </div>

                                    
                                </div>
                            </div>
                            <!--/row-->

                        </div>
                        <!--/col-lg-9-->

                    </div>
                </div>
            </section>
