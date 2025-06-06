					<?php if($this->session->flashdata('error')): ?>
                                    <div class="alert alert-danger" role="alert">
                                          <strong>Error!</strong> <?= $this->session->flashdata('error') ?>
                                    </div>
                              <?php endif ?>    

                              <?php if( $this->session->flashdata('success')): ?>
                                    <div class="alert alert-success" role="alert">
                                          <strong>Success!</strong> <?= $this->session->flashdata('success') ?>
                                    </div>
                              <?php  endif ?>
