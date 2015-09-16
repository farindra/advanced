<?php
/* @var $this yii\web\View */
//use lukisongroup\assets\SssAsset;
use kartik\sidenav\SideNav;
use yii\helpers\Html;
use kartik\icons\Icon;

$this->title = 'Berita Acara';
$this->params['breadcrumbs'][] = $this->title;
//SssAsset::register($this);

?>
<!--<body ng-app="myApp" ng-controller="userCtrl">-->

<?php// echo print_r($side_menu);exit?>

<div class="beritaacara-index">
    <h3>Berita Acara</h3>
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

    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:dodgerblue;color: #ffffff">PM</div>
            <div class="panel-body">2</div>
            <div class="panel-footer">Read All</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: seagreen;color: #ffffff">Inbox</div>
            <div class="panel-body">2</div>
            <div class="panel-footer">Read All</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default" >
            <div class="panel-heading" style="background-color: greenyellow;color: #ffffff">Sent</div>
            <div class="panel-body">2</div>
            <div class="panel-footer">Read All</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: indianred;color: #ffffff">Draft</div>
            <div class="panel-body">2</div>
            <div class="panel-footer">Read All</div>
        </div>
    </div>

    <?=Html::a(icon::show('pencil').'Create New',['new'],['class'=>'col-md-3 btn btn-info'])?>
</div>

























    <!---
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Edit</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        </thead>
        <tbody>
        <tr ng-repeat="user in users">
            <td>
                <button class="btn" ng-click="editUser(user.id)">
                    <span class="glyphicon glyphicon-pencil"></span>  Edit
                </button>
            </td>
            <td>{{ user.fName }}</td>
            <td>{{ user.lName }}</td>
        </tr>
        </tbody>
    </table>

    <hr>
    <button class="btn btn-success" ng-click="editUser('new')">
        <span class="glyphicon glyphicon-user"></span>  Create New User
    </button>
    <hr>

    <h3 ng-show="edit">Create New User:</h3>
    <h3 ng-hide="edit">Edit User:</h3>

    <form class="form-horizontal">
        <div class="form-group">
            <label class="col-sm-2 control-label">First Name:</label>
            <div class="col-sm-10">
                <input type="text" ng-model="fName" ng-disabled="!edit" placeholder="First Name">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Last Name:</label>
            <div class="col-sm-10">
                <input type="text" ng-model="lName" ng-disabled="!edit" placeholder="Last Name">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Password:</label>
            <div class="col-sm-10">
                <input type="password" ng-model="passw1" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Repeat:</label>
            <div class="col-sm-10">
                <input type="password" ng-model="passw2" placeholder="Repeat Password">
            </div>
        </div>
    </form>

    <hr>
    <button class="btn btn-success" ng-disabled="error || incomplete">
        <span class="glyphicon glyphicon-save"></span>  Save Changes
    </button>

</div>

<script src= "<?=SSS_JS_PATH.'myUsers.js' ?>"></script>
-->
</body>
</html>


