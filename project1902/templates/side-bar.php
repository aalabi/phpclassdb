<div class="sidebar" data-color="purple" data-image="<?php echo URL ?>assets/img/sidebar-5.jpg">
    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
	<div class="sidebar-wrapper">
        <div class="logo">
            <a href="" class="simple-text">
                <?php echo SITENAME; ?>
            </a>
        </div>

        <ul class="nav">
            <li class="active">
                <a href="<?php URL ?>home.php">
                  <i class="fa fa-home"></i>
                  <p>Home</p>
                </a>
            </li>
            
            <li class="active">
                <a href="<?php URL ?>create-student.php">
                    <i class="fa fa-user"></i>
                    <p>Create Student</p>
                </a>
            </li>
            
            <li class="active">
                <a href="<?php URL ?>view-students.php">
                    <i class="fa fa-users"></i>
                    <p>View Students</p>
                </a>
            </li>

        </ul>
	</div>
</div>