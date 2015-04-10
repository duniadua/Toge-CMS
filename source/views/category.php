<?php
if (isset($rowAcc)):
    $row = $rowAcc;
endif;
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">                  
    <h2 class="sub-header"><?php echo $pageTitle ?></h2>
    <!--                section-->
    <div class="row placeholders">
        <div class="col-xs-12 col-sm-10">
            <?php
            $hidden = array(
                'registered' => date('Y-m-d H:i:s'),
                'author' => 'ADMIN'
            );


            echo form_open('/category', '', $hidden);
            ?>
            <div class="form-horizontal">                            
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-8 col-md-8">
                        <input type="text" name="cat_name" class="form-control"  placeholder="Category Name" value="<?php if (isset($row->cat_name)) echo $row->cat_name ?>">
                    </div>
                </div>                                               
                <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-4 col-md-4">
                        <select name="status" class ="form-control">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                </div>                
                <div class="form-group">                    
                    <a class="btn btn-lg btn-warning" href="<?php echo site_url('postpage'); ?>"> Cancel</a>
                    <input name="submit" class="btn btn-lg btn-primary " type="submit" value="Save"/>                    
                </div>
            </div>
            <?php echo form_close() ?>
        </div>                    
    </div>
    <!--                end section-->
</div>
</div>
</div>
