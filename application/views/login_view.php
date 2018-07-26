<? include('common/header_view.php');?>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-3 mx-auto">
                <form method="post" action="<? echo base_url();?>users/login_validation">
                <div class="form-group">
                    <label for="username"><i class="fa fa-user"></i></label>
                    <input type="text" class="form-control" name='username' placeholder="Username">
                    <small class="text-danger" ><? echo form_error('username'); ?></small>
                </div>
                    <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <small class="text-danger" ><? echo form_error('password'); ?></small>
                </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    <small class="text-danger"><?php echo $this->session->flashdata('error');?></small>
                    <!-- <button type="submit" class="btn btn-danger col-sm-3" name="clear">Clear</button> -->
                </form>
            </div>
        </div>
    </div>
</div>
<? include('common/footer_view.php');?>
