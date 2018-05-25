<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Services Forms</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Add Research area</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <!–-  to show category successful message   ––>
        <h3>
            <?php
            $msg = $this->session->userdata('message');
            if ($msg) {
                echo $msg;
                $this->session->unset_userdata('message');
            }
            ?>
        </h3>

        <div class="box-content">
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(); ?>super_admin/save_service" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Name(<span style="color: red">*</span>) </label>
                        <div class="controls">
                            <select name="category_name" required exclude="">
                                <option value=" ">-----Select Category-----</option>
                                <option value="Training">Training</option>
                                <option value="Editing">Editing</option>
                                <option value="Research">Research</option>
                                <option value="Help on analysis">Help on analysis</option>
                            </select>
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Title(<span style="color: red">*</span>)</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="category_title"  data-provide="typeahead" data-items="4">
                        </div>
                    </div> 

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Short Description(<span style="color: red">*</span>)</label>
                        <div class="controls">
                            <textarea name="category_short_description" class="cleditor" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Long Description(<span style="color: red">*</span>)</label>
                        <div class="controls">
                            <textarea name="category_long_description" class="cleditor" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="fileInput">Image(<span style="color: red">max:100KB</span>)</label>
                        <div class="controls">
                            <input name="category_image" class="span6" id="fileInput" type="file">
                        </div> 
                    </div> 


                    <div class="control-group">
                        <label class="control-label" for="typeahead">Location</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="location"  data-provide="typeahead" data-items="4">
                        </div>
                    </div>



                    <div class="control-group">
                        <label class="control-label" for="textarea2">Publication Status</label>
                        <div class="controls">
                            <select name="publication_status" required exclude=" " err="Select Publication Status..">
                                <option value=" ">Select Publication Status</option>
                                <option value="1">Published</option>
                                <option value="0">Un Published</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div>

</div>

