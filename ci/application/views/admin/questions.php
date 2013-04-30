<!DOCTYPE html>
<html lang="en">
  <head>
		<?php $this->load->view('admin/meta'); ?>
  </head>

  <body>

	<?php $this->load->view('admin/nav'); ?>
	
    <div class="container">

      <h1>Manage Questions</h1>
		<p>From here you can manage Questions of Online Examination System.</p>
	  <br/>	  
	  <h3 class="pull-left">Recent Questions <span style="font-size:14px;">(<a href="<?php echo site_url("admin/questions/create/"); ?>"> Add Questions </a> | <a href=""> Questions Types</a>)</span></h3>
			
	 <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
				  <th>Question</th>
  				  <th>Exam Name</th>
                  <th>Question Type</th>
				  <th>Marks</th>
				  <th>Remark</th>
				  <th>Actions</th>
                </tr>
              </thead>
              
               <tbody>
               <?php 
               $count = 0;
               foreach ($questions as $question){
               		$count++;
               	?>
               <tr>
               <td><?php echo $count;?></td>
               <td><?php echo $question['question'];?></td>
               <td><?php echo 
               $qid = $question['exam_id'];
               

               
		     	  
    	 // 	echo form_dropdown('course_id', array('-- Select Course -- ') + $course_select, '40');   	  

               ?></td>
               <td><?php echo $question['questiontype_id'];?></td>
               <td><?php echo $question['marks'];?></td>
               <td><?php echo $question['remark'];?></td>
               <td><a href="#">Details</a> | <a href="">Edit</a> | <a onclick="return confirm('Are you sure you want to delete?')"   href="<?php echo site_url("admin/questions/delete/".$question['id']);?>" >Delete</a></td>
               </tr>
               <?php } ?>
                
			   </tbody>
                
              </table>  	  

	      </div> <!-- /container -->
	
	
<?php $this->load->view('admin/nav'); ?>
    

  </body>
</html>
