<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Story </h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
				
			<form method="POST" action="edit_story.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Story ID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="story_id" value="<?php echo $rows->id; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Title:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="story_title" value="<?php echo $rows->title; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Author:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="story_author" value="<?php echo $rows->author; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Date Published:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="story_date" value="<?php echo $rows->date; ?>">
					</div>
				</div>
            

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Content:</label>
					</div>
					<div class="col-sm-10">
					
						<textarea class="form-control" required name="story_content" rows="10" res> <?php echo $rows->content; ?> </textarea>
					</div>
				</div>


            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <button type="submit" name="edit_story" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update Story</a>
			</form>
            </div>

        </div>
    </div>
</div>










<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Are you sure you want to delete blog:</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center text-danger"> This action is irreversable! </p>
				<h3 class="text-center"><?php echo $rows->title; ?></h3>
				<p class="text-center"><?php echo $rows->content; ?></p>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <a href="delete_story.php?id=<?php echo $rows->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>