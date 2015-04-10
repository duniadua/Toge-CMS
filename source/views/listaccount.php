<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">                  
    <h2 class="sub-header">Register Account</h2>
    <!--                section-->  
    <div class="col-xs-12 col-sm-10 col-md-10">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><a href="<?php echo site_url('account'); ?>"><i class="fa fa-plus-square fa-2x" style="color: #198cff"></i></a></th>
                        <th>#</th>
                        <th>Username</th>
                        <th>Email's</th>
                        <th>Registered</th>                                
                        <th>Status</th                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($listAccount) > 0):
                        $i = 0;
                        foreach ($listAccount as $row):
                            $i++;
                        if($row->status == 0):
                            $status='Not Active';
                        else:
                            $status='Active';
                        endif;
                            ?>
                            <tr>
                                <td>
                                    <a href="<?php echo site_url('account/update/'.$row->ID); ?>"><i class="fa fa-circle-o-notch fa-2x" style="color: #198cff"></i></a>
                                    <a href="<?php echo site_url('account/delete/'.$row->ID); ?>"><i class="fa fa-minus-circle fa-2x" style="color: #e13300"></i></a>
                                </td>
                                <td><?php echo $i;?></td>
                                <td><?php echo $row->username ?></td>
                                <td><?php echo $row->email ?></td>
                                <td><?php echo $row->registered ?></td>
                                <td><?php echo $status ?></td>
                            </tr>
                            <?php
                        endforeach;
                    endif;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--                end section-->
</div>
</div>
</div>
