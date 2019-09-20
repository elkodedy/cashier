<div class="container">
    <div class="row justify-content-center p-5">
        <div class="col-4 border p-5">
            <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                <div class="text-center">
                    <h1>Login</h1>
                </div>
                <!-- Alert -->
                <?php
                    if($this->session->flashdata('alert')){
                        echo '<div class="alert alert-warning">';
                        echo $this->session->flashdata('alert');
                        echo '</div>';
                    }?>
                <!-- Form -->
                <div class="form-group">
                    <label for="exampleInputUsername">Username:</label>
                    <input name="username" type="text" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password:</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                    <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                    <small id="emailHelp" class="form-text text-muted">We'll never share your privacy with anyone else.</small>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>