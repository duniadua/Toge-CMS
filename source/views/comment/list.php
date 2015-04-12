<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">                  
    <h2 class="sub-header"><?php echo $pageTitle?></h2>
    <!--                section-->  
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><a href="<?php echo site_url('postpage'); ?>"><i class="fa fa-plus-square fa-2x" style="color: #198cff"></i></a></th>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Content</th>
                        <th>Post ID</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Ip Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($listPage) > 0):
                        $i = 0;
                        foreach ($listPage as $row):
                            $i++;
                            if ($row->status == 0):
                                $status = 'Not Active';
                            else:
                                $status = 'Active';
                            endif;
                            ?>
                            <tr>
                                <td>
                                    <a href="<?php echo site_url('postpage/update/' . $row->ID); ?>"><i class="fa fa-circle-o-notch fa-2x" style="color: #198cff"></i></a>
                                    <a href="<?php echo site_url('postpage/delete/' . $row->ID); ?>"><i class="fa fa-minus-circle fa-2x" style="color: #e13300"></i></a>
                                </td>
                                <td><?php echo $i; ?></td>
                                <td><?php if(isset($row->name)) echo $row->name; ?></td>
                                <td><?php if(isset($row->content)) echo word_limiter($row->content, 50); ?></td>
                                <td><?php if(isset($row->post_id)) echo $row->post_id ?></td>
                                <td><?php if(isset($row->createdt)) echo date('Y-m-d H:i:s', strtotime($row->createdt)); ?></td>
                                <td><?php if(isset($status)) echo $status; ?></td>
                                <td><?php if(isset($row->ip_address)) echo $row->ip_address; ?></td>
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
