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
            
            
            echo form_open('/comment','',$hidden); 
            ?>
            <div class="form-horizontal">                            
                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control"  placeholder="username" value="<?php if (isset($row->username)) echo $row->username ?>">
                    </div>
                </div>   
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control"  placeholder="email" value="<?php if (isset($row->email)) echo $row->email ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control"  placeholder="password" value="<?php if (isset($row->password)) echo $row->password ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">
                        <select name="status" class ="form-control">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
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
