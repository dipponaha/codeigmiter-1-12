<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h5>
                        How to insert employee data into database
                        <a href="<?php echo base_url('employee'); ?>" class="btn btn-danger float-right">BACK</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('employee/store'); ?>" method="POST">
                        <div class="from-group">
                            <label for="">First Name</label>
                            <input type="text" name="first_name" class="from-control">
                            <small> <?php echo form_error('first_name') ?> </small>
                        </div>

                        <div class="from-group">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" class="from-control">
                            <small> <?php echo form_error('last_name') ?> </small>
                        </div>

                        <div class="from-group">
                            <label for="">Phone Number</label>
                            <input type="text" name="phone" class="from-control">
                            <small> <?php echo form_error('phone') ?> </small>
                        </div>

                        <div class="from-group">
                            <label for="">Email ID</label>
                            <input type="text" name="email" class="from-control">
                            <small> <?php echo form_error('email') ?> </small>
                        </div>

                        <div class="from-group">
                            <button type="Submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>