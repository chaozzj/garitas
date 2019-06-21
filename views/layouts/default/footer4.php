</div>
<!-- END Page Content -->
</main>
<!-- END Main Container -->

<!-- Footer -->
<footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix content-boxed">
    <div class="pull-right">
        Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="<?php echo  APP_DEVELOPER_URL?>" target="_blank"><?php echo APP_DEVELOPER?></a>
    </div>
    <div class="pull-center">
        <a class="font-w600" href="#" target="_blank"><?php echo APP_COMPANY?></a> &copy; <span class="js-year-copy"></span>
    </div>
</footer>
<!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- Apps Modal -->
<!-- Opens from the button in the header -->
<div class="modal fade" id="apps-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-sm modal-dialog modal-dialog-top">
        <div class="modal-content">
            <!-- Apps Block -->
            <div class="block block-themed block-transparent">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Apps</h3>
                </div>
                <div class="block-content">
                    <div class="row text-center">
                        <div class="col-xs-6">
                            <a class="block block-rounded" href="base_pages_dashboard.html">
                                <div class="block-content text-white bg-default">
                                    <i class="si si-speedometer fa-2x"></i>
                                    <div class="font-w600 push-15-t push-15">Backend</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a class="block block-rounded" href="frontend_home.html">
                                <div class="block-content text-white bg-modern">
                                    <i class="si si-rocket fa-2x"></i>
                                    <div class="font-w600 push-15-t push-15">Frontend</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Apps Block -->
        </div>
    </div>
</div>
<!-- END Apps Modal -->

<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="<?php echo $_layoutParams['path_js']?>core/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<script src="<?php echo $_layoutParams['path_js']?>core/bootstrap.min.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>core/jquery.slimscroll.min.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>core/jquery.scrollLock.min.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>core/jquery.appear.min.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>core/jquery.countTo.min.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>core/jquery.placeholder.min.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>core/js.cookie.min.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>app.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>jquery.table2excel.js"></script>
<script type="text/javascript">
    $('#btnexport').click(function (){
        $('.table').table2excel({
            exclude: ".noExl",
            name:'"<?php echo $this->title;?>" export',
            filename: "<?php echo $this->title . '.xls';?>",
            fileext: ".xls",
            exclude_img: true,
            exclude_links: true,
            exclude_inputs: true
        })
    })
</script>
<!-- Page JS Plugins 
<script src="<?php echo $_layoutParams['path_js']?>plugins/chartjs/Chart.min.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>plugins/bootstrap-datetimepicker/moment.min.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>plugins/jquery-validation/additional-methods.min.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>plugins/select2/select2.full.min.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>plugins/slick/slick.min.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>nic_validator.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>age_calc.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>widgets/jqxcore.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>widgets/jqxdata.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>widgets/jqxbuttons.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>widgets/jqxscrollbar.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>widgets/jqxmenu.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>widgets/jqxpivot.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>widgets/jqxpivotgrid.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>plugins/fullcalendar/moment.min.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="<?php echo $_layoutParams['path_js']?>plugins/fullcalendar/gcal.min.js"></script>


<script src="<?php echo $_layoutParams['path_js']?>pages/base_tables_datatables.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pivottable/2.13.0/pivot.min.js"></script>-->


<?php if(isset($_layoutParams['JS']) && count($_layoutParams['JS'])):?>
    <?php for($i=0;$i<count($_layoutParams['JS']);$i++):?>
        <script src="<?php echo $_layoutParams['JS'][$i];?>" type="text/javascript"></script>
    <?php endfor;?>
<?php endif;?>
<script>
    jQuery(function () {
        // Init page helpers (Appear + CountTo plugins)
        App.initHelpers(['appear', 'appear-countTo']);
    });
</script>
</body>
</html>
