<div class="row">
    <div class="col-md-12">
        <div class="panel panel-purple">
            <div class="panel-heading">
                DATA
                <span class="js-saving-data hidden pull-right">Saving...</span>
            </div>
            <div class="panel-body" ng-controller="ResourceDataController">

                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>title</th>
                            <th>purchased</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>eggs</td>
                            <td>true</td>
                            <td>
                                <i class="pull-right fa fa-lock"></i>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot style="background-color: #eee">
                        <tr>
                            <td>...</td>
                            <td>
                                <input type="text" name="title" class="form-control" placeholder="title">
                            </td>
                            <td>
                                <input type="checkbox" name="purchased">
                            </td>
                            <td>
                                <button class="btn btn-primary btn-sm pull-right js-add-row" type="button">
                                    <i class="fa fa-plus"></i>
                                    Add
                                </button>
                            </td>
                        </tr>
                    </tfoot>

                </table>

            </div>
        </div>
    </div>
</div>