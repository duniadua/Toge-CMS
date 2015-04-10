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


            echo form_open('/config', '', $hidden);
            ?>
            <div class="form-horizontal">                            
                <div class="form-group">
                    <label for="sitename" class="col-sm-2 control-label">Blog Name</label>
                    <div class="col-sm-8 col-md-8">
                        <input type="text" name="sitename" class="form-control"  placeholder="Blog Name" value="<?php if (isset($row->sitename)) echo $row->sitename ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="sitedesc" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                        <textarea name="sitedesc" class="form-control" >
                            <?php if (isset($row->sitedesc)) echo $row->sitedesc ?>
                        </textarea>  
                    </div>
                </div>                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">E-Mail</label>
                    <div class="col-sm-8 col-md-8">
                        <input type="text" name="email" class="form-control"  placeholder="email" value="<?php if (isset($row->email)) echo $row->email ?>">
                    </div>
                </div>               
                <div class="form-group">
                    <label for="fb" class="col-sm-2 control-label">Facebook</label>
                    <div class="col-sm-8 col-md-8">
                        <input type="text" name="fb" class="form-control"  placeholder="Facebook" value="<?php if (isset($row->fb)) echo $row->fb ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="twitter" class="col-sm-2 control-label">Twitter</label>
                    <div class="col-sm-8 col-md-8">
                        <input type="text" name="twitter" class="form-control"  placeholder="Twitter" value="<?php if (isset($row->twitter)) echo $row->twitter ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="instagram" class="col-sm-2 control-label">Instagram</label>
                    <div class="col-sm-8 col-md-8">
                        <input type="text" name="instagram" class="form-control"  placeholder="Instagram" value="<?php if (isset($row->instagram)) echo $row->instagram ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="gplus" class="col-sm-2 control-label">Google +</label>
                    <div class="col-sm-8 col-md-8">
                        <input type="text" name="gplus" class="form-control"  placeholder="Google +" value="<?php if (isset($row->gplus)) echo $row->gplus ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="linked" class="col-sm-2 control-label">Linkedin</label>
                    <div class="col-sm-8 col-md-8">
                        <input type="text" name="linked" class="form-control"  placeholder="Linkedin" value="<?php if (isset($row->linked)) echo $row->linked ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-8 col-md-8">
                        <input type="text" name="phone" class="form-control"  placeholder="phone" value="<?php if (isset($row->phone)) echo $row->phone ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="bbm" class="col-sm-2 control-label">BBM</label>
                    <div class="col-sm-8 col-md-8">
                        <input type="text" name="bbm" class="form-control"  placeholder="bbm" value="<?php if (isset($row->bbm)) echo $row->bbm ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="maillogin" class="col-sm-2 control-label">E-Mail Login</label>
                    <div class="col-sm-8 col-md-8">
                        <input type="text" name="maillogin" class="form-control"  placeholder="maillogin" value="<?php if (isset($row->maillogin)) echo $row->maillogin ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="mailpassword" class="col-sm-2 control-label">E-Mail Password</label>
                    <div class="col-sm-8 col-md-8">
                        <input type="text" name="mailpassword" class="form-control"  placeholder="mailpassword" value="<?php if (isset($row->mailpassword)) echo $row->mailpassword ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="mailserver" class="col-sm-2 control-label">Mail Server Name</label>
                    <div class="col-sm-8 col-md-8">
                        <input type="text" name="mailserver" class="form-control"  placeholder="mailserver" value="<?php if (isset($row->mailserver)) echo $row->mailserver ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="mailport" class="col-sm-2 control-label">E-Mail Port</label>
                    <div class="col-sm-8 col-md-8">
                        <input type="text" name="mailport" class="form-control"  placeholder="mailport" value="<?php if (isset($row->mailport)) echo $row->mailport ?>">
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
                <div class="form-group col-md-8 col-md-push-2">
                    <input name="submit" class="btn btn-lg btn-primary btn-block" type="submit" value="Save"/>
                    <input name="submit" class="btn btn-lg btn-default btn-block" type="submit" value="Update"/>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>                    
    </div>
    <!--                end section-->
</div>
</div>
</div>
