<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Story</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">
			

			<form method="POST" action="add_story.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Story ID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="story_id" readonly value="<?php echo strtotime(date('Y-m-d H:i:s')); ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Story Title:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="story_title">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Story Author:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required name="story_author">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Date Published:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required readonly name="story_date" value="<?php echo date('M/d/Y') ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Content:</label>
					</div>
					<div class="col-sm-10">
					
						<textarea class="form-control" required name="story_content" rows="10" res></textarea>
					</div>
				</div>

				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                
                <button type="submit" name="publish" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Publish </a>
			</form>
            </div>

        </div>
    </div>
</div>