

		<!-- ==============================================
		 Dashboard
		=============================================== -->
        <section class="dashboard">
            <div class="container">
                <div class="row">

                 

                    <!-- Chat conversation START -->
                    <div class="col-lg-12 px-lg-4">
                      <div class="card card-chat rounded-start-lg-0 border-start-lg-0" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="1000">
                        <div class="card-body h-100">
                            <div class="h-100">
                                
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <div class="d-flex mb-2 mb-sm-0">
                                        <div class="flex-shrink-0 avatar me-2">
                                        	<!-- <img class="avatar-img rounded-circle" src="https://avatar.iran.liara.run/public?username=<?= $student['name'] ?>" alt="User"> -->
                                            <?= generate_letter_avatar($student['name']) ?>
                                        </div>
                                        <div class="d-block flex-grow-1">
                                        	<h6 class="mb-0 mt-1"><?= $student['name'] ?></h6>
                                        	<!-- <div class="small text-secondary">
												<i class="bi bi-circle-fill text-green me-1"></i>
												Online
											</div> -->
                                        </div>
                                    </div>

                                    <!-- <div class="d-flex align-items-center">
                                    
                                        <div class="dropdown">
											<a class="icon-md me-2 px-2" href="#" id="chatcoversationDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></a>               
											<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="chatcoversationDropdown">
												<li><a class="dropdown-item" href="#"><i class="bi bi-check-lg me-2 fw-icon"></i>Mark as read</a></li>
												<li><a class="dropdown-item" href="#"><i class="bi bi-mic-mute me-2 fw-icon"></i>Mute conversation</a></li>
												<li><a class="dropdown-item" href="#"><i class="bi bi-person-check me-2 fw-icon"></i>View profile</a></li>
												<li><a class="dropdown-item" href="#"><i class="bi bi-trash me-2 fw-icon"></i>Delete chat</a></li>
												<li class="dropdown-divider"></li>
												<li><a class="dropdown-item" href="#"><i class="bi bi-archive me-2 fw-icon"></i>Archive chat</a></li>
											</ul>
                                        </div>
                                        
                                    </div> -->

                                </div>
                                
                                <hr>
                                <!-- Chat conversation START -->
                                <div  class="chat-conversation-content" id = "chat-detail-box" style = "height: 400px; overflow-y: scroll;">


									<?php 
										
										foreach($messages as $message){	
									?>
                                    <div class="d-flex align-items-start <?= $_SESSION['id'] == $message['sender_id'] ? 'justify-content-end': '' ?> mb-3 chat-box">
										<?php 
											if($_SESSION['id'] != $message['sender_id']){
										?>
												<!-- <img src="https://avatar.iran.liara.run/public?username=<?= $student['name'] ?>" class="rounded-circle" width="40" alt=""> -->
                                                <?= generate_letter_avatar($student['name']) ?>
										<?php
											}
										?>
                                        
                                        <div class="ps-2 ms-1 chat-message">
                                            <div class=" p-3 mb-1 <?= $_SESSION['id'] == $message['sender_id'] ? 'bg-green text-light chat-text-right' : 'chat-text-left' ?>">
                                                <p><?= $message['message'] ?></p>
                                            </div>
                                            <div class="<?= $_SESSION['id'] == $message['sender_id'] ? 'd-flex justify-content-end align-items-center' : '' ?> fs-sm text-muted"><?= date("d M Y H:i", strtotime($message['sent_at'])) ?></div>
                                        </div>
                                    </div>  

									<?php 
										}
									?>

                                  

                                   

                                    <!-- Chat time -->
                                    <!-- <div class="text-center small my-2">2 New Messages</div> -->

                                
                                </div><!-- Chat conversation END -->
                            </div>
                            
                        </div>

                        <div class="chat-messages-footer">
                            <form action="" id = "chatForm" method = "POST">
                                <div class="chat-messages-form">
                                    <!-- <div class="chat-messages-form-btns">
                                        <button class="bi bi-emoji-smile me-2"></button>
                                        <button class="bi bi-image"></button>
                                    </div> -->
                                    <div class="chat-messages-form-controls"><input class="chat-messages-input" name = "message_input" id = "message_input" type="text" placeholder="Type a message"></div>
                                    <div class="chat-messages-form-btn"><button class="bi bi-send" type="submit"></button></div>
                                </div>
                            </form>
                        </div>            
                        
                      </div>
                    </div>
                    <!-- Chat conversation END -->

                </div>
            </div>
        </section>


<script>
	var currentUser = "<?= $_SESSION['id'] ?>";
	var receiverId = "<?= $student['id'] ?>";
	var receiverName = "<?= $student['name'] ?>";
</script>
