<div id="headerbar">
    <h1><?php echo trans('payment_history'); ?></h1>
</div>

<div id="content">

    <div class="row">
        <div class="col-xs-12 col-md-10 col-lg-8">

            <?php $this->layout->load_view('layout/alerts'); ?>

            <div id="report_options" class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-print"></i>
                        <?php echo trans('report_options'); ?>
                    </h3>
                </div>

                <div class="panel-body">

                    <form method="post" action="<?php echo site_url($this->uri->uri_string()); ?>">

                        <input type="hidden" name="_ip_csrf" value="<?= $this->security->get_csrf_hash() ?>">

                        <div class="form-group has-feedback">
                            <label for="from_date">
                                <?php echo trans('from_date'); ?>
                            </label>

                            <div class="input-group">
                                <input name="from_date" id="from_date"
                                       class="form-control datepicker">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar fa-fw"></i>
                                </span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="to_date">
                                <?php echo trans('to_date'); ?>
                            </label>

                            <div class="input-group">
                                <input name="to_date" id="to_date" class="form-control datepicker">
                                <span class="input-group-addon">
									<i class="fa fa-calendar fa-fw"></i>
							    </span>
                            </div>
                        </div>

                        <input type="submit" class="btn btn-success" name="btn_submit"
                               value="<?php echo trans('run_report'); ?>">

                    </form>

                </div>

            </div>

        </div>
    </div>

</div>
