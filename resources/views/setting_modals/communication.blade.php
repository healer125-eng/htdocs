<div class="modal fade bs-modal-lg" id="communication" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Communication</h4>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-md-1"></div>
                    <label for="email" class="col-md-2 control-label">Email</label>
                    <div class="col-md-8">
                        <input type="email" class="form-control" name="email" id="email">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-6 control-label" style="font-size: 20px; color: green;">Personalize Template</label>
                </div>
                <div class="form-group row">
                    <div class="col-md-1"></div>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_message" id="add_msg">Add Message</button>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="portlet box purple">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-comments"></i>Communication Table
                                </div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-scrollable">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Owner</th>
                                                <th>Property</th>
                                                <th>Language</th>
                                                <th>Short Message</th>
                                                <th>Subject</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Michel</td>
                                                <td>Belveder</td>
                                                <td>English</td>
                                                <td>this is short message</td>
                                                <td>this is subject</td>
                                                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit_message" id="edit_msg">Edit</button></td>
                                                <td><button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Michel</td>
                                                <td>Belveder</td>
                                                <td>English</td>
                                                <td>this is short message</td>
                                                <td>this is subject</td>
                                                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit_message" id="edit_msg">Edit</button></td>
                                                <td><button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal">Back</button>
                <button type="button" class="btn blue">Send</button>
            </div>
        <!-- /.modal-content -->
        </div>
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="add_message" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add Message</h4>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="owner" class="col-md-3 control-label">Owner</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="owner" id="owner">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="property" class="col-md-3 control-label">Property</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="property" id="property">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="template" class="col-md-3 control-label">Select Template</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="template" id="template">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal" id="add_message_back">Back</button>
                <button type="button" class="btn blue">Personalize</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_message" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Personalize Message</h4>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="owner" class="col-md-3 control-label">Owner</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="owner" id="owner">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="property" class="col-md-3 control-label">Property</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="property" id="property">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="language" class="col-md-3 control-label">Language</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="language" id="language">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="subject" class="col-md-3 control-label">Subject</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="subject" id="subject">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text" class="col-md-3 control-label">Text</label>
                    <div class="col-md-9">
                        <input type="textarea" class="form-control" name="text" id="text">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal" id="edit_message_back">Back</button>
                <button type="button" class="btn blue">Add Template</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#add_msg').click(function(){
            $('#communication').hide();
            $('#add_message').show();
        });
        $('#add_message_back').click(function(){
            $('#add_message').hide();
            $('#communication').show();    
        });

        $('#edit_msg').click(function(){
            $('#communication').hide();
            $('#edit_message').show();
        });
        $('#edit_message_back').click(function(){
            $('#edit_message').hide();
            $('#communication').show();  
        });
    });
</script>