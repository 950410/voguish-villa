<div id="page-wrapper">
    <div class="content_design">
        <?php if ($this->session->flashdata('message')) { ?>
            <div class="alert alert-info"> <?php echo($this->session->flashdata('message')) ?> </div>
        <?php } ?>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Gallery</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Add Images </b></div>
                    <div class="panel-body">
                        <div class="row">

                            <?php echo form_open_multipart('admin/image_manager/update_image') ?>

                            <div class="input-group input-group-lg ">
                                <span><b>Image:</b></span><br><br>
                                <input type="file" name="files[]" multiple>

                            </div>
                            <span> Description: </span>
                             <textarea class="form-control " style="width: 845px; height: 200px;"
                                       name="description"></textarea>
                            <br><br>
                            <button class="btn btn-success"> ADD</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
