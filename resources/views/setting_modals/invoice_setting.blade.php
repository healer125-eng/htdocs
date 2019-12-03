<div class="modal fade" id="invoice_setting" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Invoice Settings</h4>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="firstname" class="col-md-3 control-label">Owner</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="firstname" id="firstname">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal">Back</button>
                <button type="button" class="btn blue" data-toggle="modal" data-target="#invoice_setting_continue" id="setting_continue">Continue</button>
            </div>
        <!-- /.modal-content -->
        </div>
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="invoice_setting_continue" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Invoice Settings</h4>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="firstname" class="col-md-3 control-label">Owner</label>
                    <div class="col-md-9">
                        <!-- <input type="text" class="form-control" name="firstname" id="firstname"> --><p>make ajax for this</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sender" class="col-md-3 control-label">Sender</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="sender" id="sender">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-3 control-label">Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="street" class="col-md-3 control-label">Street</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="street" id="street">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="postal_code" class="col-md-3 control-label">Postal code</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="postal_code" id="postal_code">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="city" class="col-md-3 control-label">City</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="city" id="city">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="country" class="col-md-3 control-label">Country</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="country" id="country">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="currency" class="col-md-3 control-label">Currency</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="currency" id="currency">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="vat" class="col-md-3 control-label">VAT</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="vat" id="vat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="vat%" class="col-md-3 control-label">VAT%</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="vat%" id="vat%">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="invoice_due" class="col-md-3 control-label">Invoice due</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="invoice_due" id="invoice_due">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="paypal_link" class="col-md-3 control-label">Paypal Payment link</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="paypal_link" id="paypal_link">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="template" class="col-md-3 control-label">Template</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="template" id="template">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-6 control-label" style="font-size: 20px; color: green;">Note, Footer and Logo</label>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <textarea class="form-control" name="note_footer_logo" id="note_footer_logo"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-6 control-label" style="font-size: 20px; color: green;">Standard Footer Information</label>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <textarea class="form-control" name="footer_information" id="footer_information"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="photo" class="col-md-3 control-label">Logo or Photo</label>
                    <div class="col-sm-6 col-md-2"></div>
                    <div class="col-sm-6 col-md-2">
                        <a href="javascript:;" class="thumbnail">
                        <img src="holder.js/100%x180" alt="100%x180" style="height: 80px; width: 100%; display: block;" alt="upload your photo">
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal" id="invoice_setting_continue_back">Back</button>
                <button type="button" class="btn blue">Save</button>
            </div>
        <!-- /.modal-content -->
        </div>
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    $(document).ready(function() {
        $('#setting_continue').click(function(){
            $('#invoice_setting').hide();
            $('#invoice_setting_continue').show();
        });
        $('#invoice_setting_continue_back').click(function(){
            $('#invoice_setting_continue').hide();
            $('#invoice_setting').show();    
        });
    });
</script>