<div class="modal fade" id="add_owner" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add Owner</h4>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="nickname" class="col-md-3 control-label">Nickname</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="nickname" name="nickname" id="nickname">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="firstname" id="firstname">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lastname" class="col-md-3 control-label">Last name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="lastname" id="lastname">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-md-3 control-label">Phone</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" name="phone" id="phone">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fax" class="col-md-3 control-label">Fax</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="fax" id="fax">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="timezone" class="col-md-3 control-label">Time Zone</label>
                    <div class="col-md-9">
                        <!-- <input type="text" class="form-control" name="timezone" id="timezone"> -->
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date_format" class="col-md-3 control-label">Date Format</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="date_format" id="date_format">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="num_format" class="col-md-3 control-label">Number Format</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="num_format" id="num_format">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="photo" class="col-md-3 control-label">Photo</label>
                    <div class="col-sm-6 col-md-2"></div>
                    <div class="col-sm-6 col-md-2">
                        <a href="javascript:;" class="thumbnail">
                        <img src="holder.js/100%x180" alt="100%x180" style="height: 80px; width: 100%; display: block;" alt="upload your photo">
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                <button type="button" class="btn blue">Save</button>
            </div>
        <!-- /.modal-content -->
        </div>
    </div>
    <!-- /.modal-dialog -->
</div>