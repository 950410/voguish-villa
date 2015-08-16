<div id="page-wrapper">
    <div class="content_design">
        <?php if ($this->session->flashdata('message')) { ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
        <?php } ?>

        <div class="row">
            <div class=" col-lg-12">
                <h1 class="page-header">Subscribers</h1>
            </div>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Subscribers</th>

            </tr>
            <?php $c = 1; ?>
            <?php foreach ($data as $subscribers) { ?>
                <tr>
                    <td><?php echo $c++; ?></td>
                    <td><?php echo $subscribers['subscribers']; ?></td>
                </tr>
            <?php } ?>
        </table>

    </div>
</div>