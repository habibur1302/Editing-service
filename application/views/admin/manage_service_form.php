
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Manage Services</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <h3>
                <?php
                $msg = $this->session->userdata('message'); // to show a successfull message
                if ($msg) {
                    echo $msg;
                    $this->session->unset_userdata('message');
                }
                ?>
            </h3>         
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Category Id</th>
                        <th>Category Name</th>
                        <th>Category Title</th>
                        <th>Publication Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    foreach ($all_services as $v_service) {
                        ?>
                        <tr>
                            <td><?php echo $v_service->category_id; ?></td>
                            <td class="center"><?php echo $v_service->category_name; ?></td>
                            <td class="center"><?php echo $v_service->category_title; ?></td>

                            <td class="center">
                                <?php if ($v_service->publication_status == 1) { ?>
                                    <span class="label label-success"><?php echo "Published"; ?></span>
                                <?php } else { ?>
                                    <span class="label label-warning"><?php echo "Unpublished"; ?></span>
                                <?php } ?>
                            </td>
                            <td class="center">
                                <?php
                                if ($v_service->publication_status == 0) {
                                    ?>

                                    <a class="btn btn-success" href="<?php echo base_url(); ?>super_admin/published_service/<?php echo $v_service->category_id; ?>" title="Published">
                                        <i class="icon-arrow-down icon-white"></i>  

                                    </a>
                                <?php } else {
                                    ?>
                                    <a class="btn btn-danger" href="<?php echo base_url(); ?>super_admin/unpublished_service/<?php echo $v_service->category_id; ?>" title="Unpublished">
                                        <i class="icon-arrow-up icon-white"></i>  

                                    </a>
                                <?php } ?>

                                <a class="btn btn-info" href="<?php echo base_url(); ?>super_admin/edit_service/<?php echo $v_service->category_id; ?>" title="Edit">
                                    <i class="icon-edit icon-white"></i>  

                                </a>
                                <a class="btn btn-danger" href="<?php echo base_url(); ?>super_admin/delete_service/<?php echo $v_service->category_id; ?>" title="Delete" onclick="return check_delete();">
                                    <i class="icon-trash icon-white"></i> 

                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->
