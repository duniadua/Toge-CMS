<?php 
if(isset($rowAcc)):
    $row = $rowAcc;
endif;

?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">                  
    <h2 class="sub-header">Update Comments</h2>
    <!--                section-->
    <div class="row placeholders">
        <div class="col-xs-12 col-sm-8">
            <?php 
            $hidden = array(
                'registered' => date('Y-m-d H:i:s'),                
            );                        
            
            echo form_open('/comment/update/'.$row->ID,'',$hidden); 
            ?>
            <div class="form-horizontal">                            
                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control"  placeholder="name" value="<?php if (isset($row->name)) echo $row->name ?>">
                    </div>
                </div>   
                
                <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">
                        <textarea name="content"><?php if (isset($row->content)) echo $row->content ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">                        
                        <?php 
                        $options = [0 => 'No', 1 => 'Yes'];
                        
                        echo form_dropdown('status', $options, $row->status, 'class = form-control');                        
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <input name="submit" class="btn btn-lg btn-primary btn-block" type="submit" value="Save"/>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>                    
    </div>
    <!--                end section-->
</div>
</div>
</div>
