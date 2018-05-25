
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Manage Font-End Logo</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Add New Logo ( <span style="color: red;font-size: small;">The logo is not more than 150px and it must (1000px by 1000px)</span> )</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>

        <h3>
            <?php
            $msg = $this->session->userdata('message');
            if ($msg) {
                echo $msg;
                $this->session->unset_userdata('message');
            }
            ?>
        </h3><hr>

        <div class="box-content">
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(); ?>super_admin/save_logo" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Logo Name(<span style="color: red">*</span>)</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="logo_name"  data-provide="typeahead" data-items="4">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fileInput">Choose logo(<span style="color: red">*</span>)</label>
                        <div class="controls">
                            <input name="logo_image" class="span6" id="fileInput" type="file" title="The logo is not more than 100px and it must(180x61)">
                        </div> 
                    </div> 
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save logo</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->
</div><!--/row-->



<!--Manage logo-->
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Manage logo ( <span style="color: red;font-size: small">Published one logo at a time.</span>)</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th width="15%">Logo Name</th>
                        <th width="50%">Logo Image</th>
                        <th width="15%">Publication</th>
                        <th width="20%">Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php foreach ($all_logos as $value) { ?>
                        <tr>
                            <td><?php echo $value->logo_name; ?></td>
                            <td><img src="<?php echo base_url() . $value->logo_image; ?>" alt=""></td>
                            <td class="center">
                                <?php if ($value->publication == 1) { ?>
                                    <span class="label label-success"><?php echo "Published"; ?></span>
                                <?php } else { ?>
                                    <span class="label label-warning"><?php echo "Unpublished"; ?></span>
                                <?php } ?>
                            </td>
                            <td class="center">
                                <?php
                                if ($value->publication == 0) {
                                    ?>

                                    <a class="btn btn-success" href="<?php echo base_url(); ?>super_admin/published_logo/<?php echo $value->logo_id; ?>" title="Published">
                                        <i class="icon-arrow-down icon-white"></i>  

                                    </a>
                                <?php } else {
                                    ?>
                                    <a class="btn btn-danger" href="<?php echo base_url(); ?>super_admin/unpublished_logo/<?php echo $value->logo_id; ?>" title="Unpublished">
                                        <i class="icon-arrow-up icon-white"></i>  

                                    </a>
                                <?php } ?>

                                <a class="btn btn-danger" href="<?php echo base_url(); ?>super_admin/delete_logo/<?php echo $value->logo_id; ?>" title="Delete" onclick="return check_delete();">
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



