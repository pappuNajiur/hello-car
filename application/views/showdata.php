<?php $this->load->view('new_header');?>
<style>				
.content{
	padding: 5px 0px;
}					
</style>

			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h3 class="text-white">
							Data Table
							</h3>	
							
						</div>											
					</div>
				</div>
			</section>
			
			<div>
				<div>
				<section class="col-lg-12">
					<table class="table table-bordered table-striped">
						<thead>
						<tr>
						<th>No</th>
						<th>Name</th>
						<th>Dep</th>
						<th>Batch</th>
						<th>ID</th>
						<th>Action</th>
						</tr>
						</thead>
						<tbody>
						
							<tr>
							<?php
							$i=0;
							foreach($h->result() as $row){
								$i++;
							?>
							
							<td><?php echo $i;?></td>
							<td><?php echo $row->name;?></td>
							<td><?php echo $row->dep;?></td>
							<td><?php echo $row->batch;?></td>
							<td><?php echo $row->sid;?></td>
							<td><a onclick="return confirm('Are you sure to remove?');" href="<?php echo base_url();?>Admin_controller/delete_ctest/<?php echo $row->c_id;?>"><i class="fa fa-trash-o" ></i></a></td>
							
							</tr>
							<?php } ?>
						</tbody>
					</table>
				
				</section>
				
				</div>
			</div>
			
			
			
			
			
						
<?php $this->load->view('new_footer');?>			