<!doctype html>
<html ng-app="sa_app">
<head>
    <meta charset="utf-8" />
    <title>PHP COM ANGULAR</title>
    <script src="angular.min.js"></script>
    <script src="controller.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css" />
</head>
<body>
    <div class="col-md-12">
        <h3 align="center">CRUD PHP com AngularJS</h3>

        <div ng-controller="controller" ng-init="show_data()">
            <div class="col-md-6">
                <label>Name</label>
                <input type="text" name="name" ng-model="name" class="form-control" />
                <br />
                <label>Email</label>
                <input type="text" name="email" ng-model="email" class="form-control" />
                <br />
                <label>Age</label>
                <input type="text" name="age" ng-model="age" class="form-control" />
                <br />
                <input type="hidden" ng-model="id" />
                <input type="submit" name="insert" class="btn btn-primary" ng-click="insert()" value="{{btnName}}" />
            </div>

            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody ng-repeat="x in names">
                        <td>{{x.id}}</td>
                        <td>{{x.name}}</td>
                        <td>{{x.email}}</td>
                        <td>{{x.age}}</td>
                        <td><buttton type="button" class="btn btn-success btn-xs" ng-click="update_data(x.id, x.name, x.email, x.age)">Edit</button></td>
                        <td><buttton type="button" class="btn btn-danger btn-xs" ng-click="delete_data(x.id)">Delete</button></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>