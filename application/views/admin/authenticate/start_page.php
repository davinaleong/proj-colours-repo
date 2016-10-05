<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************************************************
	- File Info -
		File name		: start_page.php
		Author(s)		: DAVINA Leong Shi Yun
		Date Created	: 28th Sep 2016

	- Contact Info -
		Email	: leong.shi.yun@gmail.com
		Mobile	: (+65) 9369 3752 [Singapore]

***********************************************************************************/
?><!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('admin/_snippets/meta_admin'); ?>

    <?php $this->load->view('admin/_snippets/head_resources'); ?>
</head>

<body>

<section id="container" >

    <?php $this->load->view('admin/_snippets/navbar_admin'); ?>

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <ol class="breadcrumb">
                <li class="active">Home</li>
            </ol>

            <h1><i class="fa fa-dashboard fa-fw"></i> Welcome, <strong><?= $this->session->userdata('name'); ?></strong></h1>
            <p><small>Today: <?= $this->datetime_helper->now('r'); ?></small></p>
            <div class="row mt">
                <div class="col-lg-12">
                    <?php $this->load->view('admin/_snippets/message_box'); ?>

                    <div class="content-panel">
                        <h3 class="cr-content-panel-header"><i class="fa fa-angle-right fa-fw"></i> Status</h3>
                        <div class="alert alert-warning">
                            <h4 style="font-weight: bold;"><i class="fa fa-minus-circle fa-fw"></i> Beta</h4>
                            <p>Components are ready; not all features fully implemented yet.</p>
                        </div>
                    </div>
                    <br/>

                    <div class="content-panel">
                        <h3 class="cr-content-panel-header"><i class="fa fa-angle-right fa-fw"></i> About this Repo</h3>
                        <p>Click on the links on the sidebar to the left to begin.</p>
                        <p><strong>Colour Repo</strong> serves as a database of commonly used colours like Web Safe colours,
                            'Paint' colours, etc.</p>
                    </div>
                    <br/>

                    <div class="content-panel">
                        <h3 class="cr-content-panel-header"><i class="fa fa-angle-right fa-fw"></i> Tasks</h3>

                        <!-- Task Accordion start -->
                        <div class="panel-group" id="task_accordion" role="tablist" aria-multiselectable="true">
                            <!-- Site UI -->
                            <div class="panel panel-warning">
                                <div class="panel-heading" role="tab" id="heading_one">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#task_accordion"
                                           href="#collapse_one" aria-expanded="true" aria-controls="collapse_one">
                                            <i class="fa fa-minus fa-fw"> Site UI
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse_one" class="panel-collapse collapse in" role="tabpanel"
                                     aria-labelledby="heading_one">
                                    <ul class="list-group">
                                        <li class="list-group-item text-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Import DashGum</li>
                                        <li class="list-group-item text-danger">
                                            <i class="fa fa-times-circle fa-fw"></i> Change Colour Scheme</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Login Screen -->
                            <div class="panel panel-success">
                                <div class="panel-heading" role="tab" id="heading_two">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#task_accordion"
                                           href="#collapse_two" aria-expanded="false" aria-controls="collapse_two">
                                            <i class="fa fa-check fa-fw"></i> Login Screen
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse_two" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading_two">
                                    <ul class="list-group">
                                        <li class="list-group-item text-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Login Screen</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- User Module -->
                            <div class="panel panel-success">
                                <div class="panel-heading" role="tab" id="heading_three">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#task_accordion"
                                           href="#collapse_three" aria-expanded="false" aria-controls="collapse_three">
                                            <i class="fa fa-check fa-fw"></i> User Module
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse_three" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading_three">
                                    <ul class="list-group">
                                        <li class="list-group-item text-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Browse Users</li>
                                        <li class="list-group-item text-success">
                                            <i class="fa fa-check-circle fa-fw"></i> New User</li>
                                        <li class="list-group-item text-success">
                                            <i class="fa fa-check-circle fa-fw"></i> View User</li>
                                        <li class="list-group-item text-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Edit User</li>
                                        <li class="list-group-item text-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Reset User</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Personal Profile Module -->
                            <div class="panel panel-success">
                                <div class="panel-heading" role="tab" id="heading_four">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#task_accordion"
                                           href="#collapse_four" aria-expanded="false" aria-controls="collapse_four">
                                            <i class="fa fa-check fa-fw"></i> Personal Profile Module
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse_four" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading_four">
                                    <ul class="list-group">
                                        <li class="list-group-item text-success">
                                            <i class="fa fa-check-circle fa-fw"></i> View Personal Profile</li>
                                        <li class="list-group-item text-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Edit Personal Profile</li>
                                        <li class="list-group-item text-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Change Password</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Web Safe Colours Module -->
                            <div class="panel panel-warning">
                                <div class="panel-heading" role="tab" id="heading_five">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#task_accordion"
                                           href="#collapse_five" aria-expanded="false" aria-controls="collapse_five">
                                            Web Safe Colour Module
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse_five" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading_five">
                                    <ul class="list-group">
                                        <li class="list-group-item text-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Browse Web Safe Colours</li>
                                        <li class="list-group-item text-success">
                                            <i class="fa fa-check-circle fa-fw"></i> New Web Safe Colour</li>
                                        <li class="list-group-item text-danger">
                                            <i class="fa fa-times-circle fa-fw"></i> New Web Safe Colour (Colour Picker)</li>
                                        <li class="list-group-item text-success">
                                            <i class="fa fa-check-circle fa-fw"></i> View Web Safe Colour</li>
                                        <li class="list-group-item text-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Edit Web Safe Colour</li>
                                        <li class="list-group-item text-danger">
                                            <i class="fa fa-times-circle fa-fw"></i> Edit Web Safe Colour (Colour Picker)</li>
                                        <li class="list-group-item text-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Delete Web Safe Colour</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Standard Colours Module -->
                            <div class="panel panel-danger">
                                <div class="panel-heading" role="tab" id="heading_six">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#task_accordion"
                                           href="#collapse_six" aria-expanded="false" aria-controls="collapse_six">
                                            Standard Colour Module
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse_six" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading_six">
                                    <ul class="list-group">
                                        <li class="list-group-item text-danger">
                                            <i class="fa fa-times-circle fa-fw"></i> Browse Standard Colours</li>
                                        <li class="list-group-item text-danger">
                                            <i class="fa fa-times-circle fa-fw"></i> New Standard Colour</li>
                                        <li class="list-group-item text-danger">
                                            <i class="fa fa-times-circle fa-fw"></i> New Standard Colour (Colour Picker)</li>
                                        <li class="list-group-item text-danger">
                                            <i class="fa fa-times-circle fa-fw"></i> View Standard Colour</li>
                                        <li class="list-group-item text-danger">
                                            <i class="fa fa-times-circle fa-fw"></i> Edit Standard Colour</li>
                                        <li class="list-group-item text-danger">
                                            <i class="fa fa-times-circle fa-fw"></i> Edit Standard Colour (Colour Picker)</li>
                                        <li class="list-group-item text-danger">
                                            <i class="fa fa-times-circle fa-fw"></i> Delete Standard Colour</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- Task Accordion end -->
                        <ol class="cr-no-bullets">
                            <li class="text-warning"><i class="fa fa-minus fa-fw"></i> Site Template
                                <ol class="cr-no-bullets">
                                    <li class="text-success"><i class="fa fa-check-circle fa-fw"></i> Import DashGum</li>
                                    <li class="text-danger"><i class="fa fa-times-circle fa-fw"></i> Change Colour Scheme</li>
                                </ol>
                            </li>
                            <li class="text-success"><i class="fa fa-check fa-fw"></i> Login Screen</li>
                            <li class="text-success"><i class="fa fa-check fa-fw"></i> User Module
                                <ol class="cr-no-bullets">
                                    <li class="text-success"><i class="fa fa-check-circle fa-fw"></i> Browse Users</li>
                                    <li class="text-success"><i class="fa fa-check-circle fa-fw"></i> New User</li>
                                    <li class="text-success"><i class="fa fa-check-circle fa-fw"></i> View User</li>
                                    <li class="text-success"><i class="fa fa-check-circle fa-fw"></i> Edit User</li>
                                    <li class="text-success"><i class="fa fa-check-circle fa-fw"></i> Reset User</li>
                                </ol>
                            </li>
                            <li class="text-success"><i class="fa fa-check fa-fw"></i> Personal Profile Module

                            </li>
                            <li class="text-danger"><i class="fa fa-times fa-fw"></i> Standard Colours Module

                            </li>
                            <li class="text-warning"><i class="fa fa-minus fa-fw"></i> Web Safe Colours Module

                            </li>
                        </ol>
                    </div>
                </div>
            </div>

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    <?php $this->load->view('admin/_snippets/footer_admin'); ?>
</section>

<?php $this->load->view('admin/_snippets/body_resources'); ?>
</body>
</html>