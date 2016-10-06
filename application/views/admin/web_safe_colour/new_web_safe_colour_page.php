<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************************************************
	- File Info -
		File name		: new_web_safe_colour.php
		Author(s)		: DAVINA Leong Shi Yun
		Date Created	: 01 Oct 2016

	- Contact Info -
		Email	: leong.shi.yun@gmail.com
		Mobile	: (+65) 9369 3752 [Singapore]

***********************************************************************************/
/**
 * @var $colour_type_options
 */
?><!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('admin/_snippets/meta_admin'); ?>

    <?php $this->load->view('admin/_snippets/head_resources'); ?>
    <link rel="stylesheet" type="text/css" href="<?=RESOURCES_FOLDER;?>css/parsley.css" />
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
                <li><a href="<?=site_url(ADMIN_HOME_URL);?>">Home</a></li>
                <li><a href="<?=site_url('admin/web_safe_colour/browse_web_safe_colour');?>">Web Safe Colours</a></li>
                <li class="active">New Web Safe Colour</li>
            </ol>

            <h1 class="page-header"><i class="fa fa-globe fa-fw"></i> Web Safe Colours Module</h1>
            <h3><i class="fa fa-angle-right fa-fw"></i> New Web Safe Colour</h3>

            <div class="row mt">
                <div class="col-lg-12">
                    <?php $this->load->view('admin/_snippets/validation_errors_box'); ?>
                    <?php $this->load->view('admin/_snippets/message_box'); ?>

                    <div class="content-panel">
                        <form id="new_web_safe_colour_form" class="form-horizontal" method="post" data-parsley-validate>

                            <fieldset>
                                <legend>Name</legend>
                                <div class="form-group">
                                    <label class="control-label col-md-2" for="colour_name">
                                        Name <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="colour_name" name="colour_name"
                                               placeholder="Name" required minlength="3" maxlength="512"
                                               value="<?=set_value('colour_name');?>" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2" for="colour_selector">
                                        Selector <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="colour_selector"
                                               name="colour_selector" placeholder="Name" required minlength="3"
                                               maxlength="512" data-parsley-type="alphanum"
                                               value="<?=set_value('colour_selector');?>" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2" for="colour_type">Type <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <select class="form-control" id="colour_type" name="colour_type" required>
                                            <option value="" id="colour_type_none"></option>
                                            <?php foreach($colour_type_options as $key=>$option): ?>
                                            <option value="<?=$option;?>" id="colour_type_<?=$key;?>"
                                                <?=set_select("colour_type", $option);?>><?=$option;?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend>Values</legend>
                                <div class="row">

                                    <div class="col-md-10">
                                        <!-- RGB (0 - 255) -->
                                        <div class="form-group">
                                            <label class="control-label col-md-2">RGB Values</label>
                                            <div class="col-md-10">
                                                <div class="row">

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-2" for="red_255">
                                                                R <span class="text-danger">*</span></label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="number" step="1"
                                                                       id="red_255" name="red_255" placeholder="0"
                                                                       required min="0" max="255" data-parsley-type="digits"
                                                                       value="<?=set_value('red_255');?>" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-2" for="green_255">
                                                                G <span class="text-danger">*</span></label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="number" step="1"
                                                                       id="green_255" name="green_255" placeholder="0"
                                                                       required min="0" max="255" data-parsley-type="digits"
                                                                       value="<?=set_value('green_255');?>" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-2" for="blue_255">
                                                                B <span class="text-danger">*</span></label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="number" step="1"
                                                                       id="blue_255" name="blue_255" placeholder="0"
                                                                       required min="0" max="255" data-parsley-type="digits"
                                                                       value="<?=set_value('blue_255');?>" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <span class="help-block">(0&mdash;255)</span>
                                            </div>
                                        </div>

                                        <!-- RGB (0.00 - 1.00) -->
                                        <div class="form-group">
                                            <label class="control-label col-md-2">RGB Ratio</label>
                                            <div class="col-md-10">
                                                <div class="row">

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-2" for="red_ratio">
                                                                R <span class="text-danger">*</span></label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="number" step="0.01"
                                                                       id="red_ratio" name="red_ratio" placeholder="0.00"
                                                                       required min="0" max="1" data-parsley-type="number"
                                                                       value="<?=set_value('red_ratio');?>"
                                                                       onchange="format_decimal('#red_ratio')" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-2" for="green_ratio">
                                                                G <span class="text-danger">*</span></label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="number" step="0.01"
                                                                       id="green_ratio" name="green_ratio" placeholder="0.00"
                                                                       required min="0" max="1" data-parsley-type="number"
                                                                       value="<?=set_value('green_ratio');?>"
                                                                       onchange="format_decimal('#green_ratio')" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-2" for="blue_ratio">
                                                                B <span class="text-danger">*</span></label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="number" step="0.01"
                                                                       id="blue_ratio" name="blue_ratio" placeholder="0.00"
                                                                       required min="0" max="1" data-parsley-type="number"
                                                                       value="<?=set_value('blue_ratio');?>"
                                                                       onchange="format_decimal('#blue_ratio')" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <span class="help-block">(0.00&mdash;1.00)</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-2" for="hex">
                                                Hex <span class="text-danger">*</span></label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="hex" name="hex"
                                                       placeholder="#000000" required maxlength="7"
                                                       data-parsley-pattern="<?=REGEX_PARSLEY_COLOUR_HEX;?>"
                                                       value="<?=set_value('hex');?>" onchange="update_sample('#hex')" />
                                                <span class="help-block">(#000000)</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2" style="height: 280px">
                                        <p>Colour Sample (Hex)</p>
                                        <div id="cr-foreground-sample">
                                            Foreground
                                        </div>
                                        <div id="cr-background-sample">
                                            Background
                                        </div>
                                    </div>

                                </div>
                            </fieldset>
                            <br/>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">
                                    <button id="submit_btn" class="btn btn-theme" type="submit">
                                        <i class="fa fa-check fa-fw"></i> Submit
                                    </button>
                                    <button class="btn btn-theme02" type="button" onclick="update_sample('#hex')">
                                        Update Sample
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    <?php $this->load->view('admin/_snippets/footer_admin'); ?>
</section>

<?php $this->load->view('admin/_snippets/body_resources'); ?>
<script src="<?=RESOURCES_FOLDER;?>js/parsley.min.js"></script>
<script src="<?=RESOURCES_FOLDER;?>js/numeral.min.js"></script>
<script>
    function format_decimal(selector)
    {
        var val_numeral = numeral($(selector).val());
        $(selector).val(val_numeral.format('0.00'));
    }

    function update_sample(selector)
    {
        var jq_selector = $(selector);
        $('#cr-foreground-sample').attr('style', 'color: ' + jq_selector.val());
        $('#cr-background-sample').attr('style', 'background-color: ' + jq_selector.val());
    }
</script>
</body>
</html>