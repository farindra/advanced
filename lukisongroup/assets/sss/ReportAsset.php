<?php
namespace lukisongroup\assets\sss;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author maseka
 * @since 2015
 */
class ReportAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets_sss/css/fonts/linecons/css/linecons.css',
        'assets_sss/css/fonts/fontawesome/css/font-awesome.min.css',
        'assets_sss/css/xenon/xenon-core.css',
        'assets_sss/css/xenon/xenon-forms.css',
        'assets_sss/css/xenon/xenon-components.css',
        'assets_sss/css/xenon/xenon-skins.css',
        'assets_sss/css/xenon/custom.css',
        'assets_sss/js/xenon/daterangepicker/daterangepicker-bs3.css',
        'assets_sss/js/xenon/select2/select2.css',
        'assets_sss/js/xenon/select2/select2-bootstrap.css',
        'assets_sss/js/xenon/multiselect/css/multi-select.css',
        //'assets_sss/js/xenon/tagsinput2/bootstrap-tagsinput.css',
        //'assets_sss/js/angular.min.js',
        //'assets_sss/js/xenon/tagsinput2/app.css',
        //'assets_sss/bootstrap-fileinput/css/fileinput.min.css',
    ];
    public $js = [

        //'assets_sss/js/xenon/typeahead.bundle.js',
        //'assets_sss/js/xenon/tagsinput2/bootstrap-tagsinput.js',
        //'assets_sss/bootstrap-fileinput/js/fileinput.min.js',

        'assets_sss/js/xenon/bootstrap.min.js',
        'assets_sss/js/xenon/TweenMax.min.js',
        'assets_sss/js/xenon/resizeable.js',
        'assets_sss/js/xenon/joinable.js',
        'assets_sss/js/xenon/xenon-api.js',
        'assets_sss/js/xenon/xenon-toggles.js',
        'assets_sss/js/xenon/moment.min.js',
        'assets_sss/js/xenon/datatables/js/jquery.dataTables.min.js',
        'assets_sss/js/xenon/xenon-widgets.js',
        'assets_sss/js/xenon/devexpress-web-14.1/js/globalize.min.js',
        'assets_sss/js/xenon/devexpress-web-14.1/js/dx.chartjs.js',
        'assets_sss/js/xenon/devexpress-web-14.1/js/knockout-3.1.0.js',
        'assets_sss/js/xenon/toastr/toastr.min.js',
        'assets_sss/js/xenon/daterangepicker/daterangepicker.js',
        'assets_sss/js/xenon/datepicker/bootstrap-datepicker.js',
        'assets_sss/js/xenon/timepicker/bootstrap-timepicker.min.js',
        'assets_sss/js/xenon/colorpicker/bootstrap-colorpicker.min.js',
        'assets_sss/js/xenon/select2/select2.min.js',
        'assets_sss/js/xenon/jquery-ui/jquery-ui.min.js',
        'assets_sss/js/xenon/selectboxit/jquery.selectBoxIt.min.js',
        'assets_sss/js/xenon/tagsinput/bootstrap-tagsinput.min.js',
        'assets_sss/js/xenon/typeahead.bundle.js',
        'assets_sss/js/xenon/handlebars.min.js',
        'assets_sss/js/xenon/multiselect/js/jquery.multi-select.js',
        'assets_sss/js/xenon/datatables/dataTables.bootstrap.js',
        'assets_sss/js/xenon/datatables/yadcf/jquery.dataTables.yadcf.js',
        'assets_sss/js/xenon/datatables/tabletools/dataTables.tableTools.min.js',
        'assets_sss/js/xenon/xenon-custom.js',


    ];
        public $jsOptions = [
            'position' => View::POS_END,
    ];

}



