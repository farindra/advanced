<?php
/* @var $this yii\web\View */
use lukisongroup\assets\AppAsset;
use lukisongroup\assets\sss\BeritaacaraAsset;
use kartik\sidenav\SideNav;
use yii\helpers\Html;




$this->title = 'New';
$this->params['breadcrumbs'][] = ['label' => 'Berita Acara', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
AppAsset::register($this);
BeritaacaraAsset:: register($this);
?>

    <div class="title-env">
        <h1 class="title">New</h1>
        <p class="description">Berita Acara</p>
    </div>

<div class="container">
<?//=Icon::show('gears')//=print_r($side_menu,true);?>

    <aside class="main-sidebar">
        <?php
        if (!Yii::$app->user->isGuest) {
            echo SideNav::widget([
                'items' => $side_menu,
                'encodeLabels' => false,
                //'heading' => $heading,
                'type' => SideNav::TYPE_DEFAULT,
                'options' => ['class' => 'sidebar-nav'],
            ]);
        };
        ?>
    </aside>

    <div class="a1000-create" >
      <?= $this->render('_form', [
            'model' => $model,'model2' => $model2,'user_list'=>$user_list
        ]);//echo json_encode($user_list);?>

    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            var user_list = <?=  json_encode($user_list); ?>;
            var my_Suggestion_class = new Bloodhound({
                limit: 10,
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                local: $.map(user_list, function(item) {
                    //console.log(item);
                    return {value: item};
                })
            });

            my_Suggestion_class.initialize();

            $('#a1000-touser').tagsinput({
                allowDuplicates: false,
                typeaheadjs: {
                    name: 'value',
                    displayKey: 'value',
                    valueKey: 'value',
                    source: my_Suggestion_class.ttAdapter(),
                    templates: {
                        empty: [
                            '<div class="noitems">',
                            'User Tidak ditemukan',
                            '</div>'
                        ].join('\n')
                    }
                }
            });

            $('#a1000-data_files').fileinput({
                uploadUrl: 'upload', // server upload action
                uploadAsync: true,
                showUpload: false,
                showRemove: false,
                //allowedFileExtensions : ['jpg', 'png','gif'],
                maxFileCount: 10
            });

        });
    </script>

    <script type="text/javascript">

    </script>

</div>


