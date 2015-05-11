
<table class="table">
    <tbody>
        <tr>
            <input type="hidden" name="filters[<?= $type ?>][]" value="3">
            <td>Authenticated (auth.login)</td>
            <td>
                <a class="pull-right" href="#">
                    <i class="fa fa-remove"></i>
                </a>
            </td>
        </tr>
        <tr>
            <input type="hidden" name="filters[<?= $type ?>][]" value="12">
            <td>Cannot Delete Others (no.delete.others)</td>
            <td>
                <a class="pull-right" href="#">
                    <i class="fa fa-remove"></i>
                </a>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td>
                <select class="form-control">
                    <option value="">Add a new filter</option>
                    <option value="1">Filter Name (filter.name) 1</option>
                    <option value="2">Filter Name (filter.name) 2</option>
                    <option value="3">Filter Name (filter.name) 3</option>
                    <option value="4">Filter Name (filter.name) 4</option>
                    <option value="5">Filter Name (filter.name) 5</option>
                </select>
            </td>
            <td>
                <a class="pull-right" href="#">
                    <i class="fa fa-plus"></i>
                </a>
            </td>
    </tr></tfoot>
</table>