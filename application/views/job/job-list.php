<?php 
	$this->load->view('layouts/head', ['page_title' => $page_title]);
?>



<div class="app-content">
    <div class="">

	    <?php 
			$this->load->view('layouts/header');
		?>


        <main class="parent-container">
            <div class="container-fluid">
                <div class="row">

                    <!-- order 1 -->
                    <div class="col-xxl-9">
                        <!-- Row Created Callback Example start -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Jobs</h5>
                                </div>

                                <div class="card-body p-0">
                                    <div class="app-datatable-default overflow-auto">

                                        <table id="job-list" class="display w-100 row-callback-datatable">
                                            <thead>
                                                <tr>
													<th>#</th>
                                                    <th>Title</th>
													<th>Job Category</th>
                                                    <th>Location</th>
													<th>Company Name</th>
													<th>Job Type</th>
													<th>Salary Range</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                               
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                    <!-- Sidebar -->
					<?php 
						$this->load->view('layouts/sidebar');
					?>

                </div>
            </div>
        </main>


    </div>
</div>
   

<?php 
	$this->load->view('layouts/footer');
?>
 

<script>
	 $('#job-list').DataTable({
        "processing": true,
        "serverSide": true, // Enable server-side processing
        "ajax": {
            "url": "<?= base_url('job/fetch-jobs') ?>",
            "type": "POST"
        },
        "columns": [
            { "data": 0 },
            { "data": 1 },
            { "data": 2 },
            { "data": 3 },
            { "data": 4 },
            { "data": 5 },
            { "data": 6 }
        ],
        "order": [[0, "desc"]] // Default sorting by Job ID descending
    });
</script>


<?php 
	$this->load->view('layouts/footer-end');
?>
