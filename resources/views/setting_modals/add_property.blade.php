<div class="modal fade bs-modal-lg" id="add_property" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Properties</h4>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-md-3 control-label" style="font-size: 20px; color: green;">Add properties</label>
                </div>
                <div class="form-group row">
                    <label for="owner" class="col-md-3 control-label">Owner</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="owner" name="owner" id="owner">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="property_name" class="col-md-3 control-label">Property Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="property_name" id="property_name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="standard" class="col-md-3">Standard check-in time</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="standard" id="standard">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cleaning_fee" class="col-md-3">Cleaning fee</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="cleaning_fee" id="cleaning_fee">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prepayment" class="col-md-3">Prepayment</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="prepayment" id="prepayment">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cost_extra" class="col-md-3">Cost extra guest/night</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="cost_extra" id="cost_extra">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="max_num" class="col-md-3">Max. Number person</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="max_num" id="max_num">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="min_day" class="col-md-3">Min. day</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="min_day" id="min_day">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="min_stay" class="col-md-3">Minimum length of stay</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="min_stay" id="min_stay">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="discout" class="col-md-3">Discout</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="discout" id="discout">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="extra_value" class="col-md-3">Extra value</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="extra_value" id="extra_value">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="vat" class="col-md-3">VAT%</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="vat" id="vat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="currency" class="col-md-3">Currency</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="currency" id="currency">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 control-label" style="font-size: 20px; color: green;">Payment Methods</label>
                    <div class="col-md-9">
                        <div class="checkbox-list">
                            <label class="checkbox-inline">
                            <input type="checkbox" id="invoice" name="invoice"> Invoice </label>
                            <label class="checkbox-inline">
                            <input type="checkbox" id="stripe" name="stripe"> Stripe </label>
                            <label class="checkbox-inline">
                            <input type="checkbox" id="paypal" name="paypal"> Paypal upon arrival </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 control-label" style="font-size: 20px; color: green;">Contact</label>
                </div>
                <div class="form-group row">
                    <label for="first_name" class="col-md-1">First Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="first_name" id="first_name">
                    </div>
                    <div class="col-md-1"></div>
                    <label for="last_name" class="col-md-1">Last Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="last_name" id="last_name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-1">Email</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                    <label for="phone" class="col-md-1">Phone</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                    <label for="fax" class="col-md-1">Fax</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="fax" id="fax">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-md-1">Address</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="address" id="address">
                    </div>
                    <div class="col-md-1"></div>
                    <label for="country" class="col-md-1">Country</label>
                    <div class="col-md-4">
                        <select class="form-control">
                            <option>USA</option>
                            <option>Germany</option>
                            <option>Spain</option>
                            <option>Italy</option>
                            <option>France</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="note" class="col-md-2">Note</label>
                    <div class="col-md-10">
                        <input type="text" name="note" id="note" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="legal" class="col-md-2">Legal requirements</label>
                    <div class="col-md-10">
                        <input type="text" name="legal" id="note" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="link_terms" class="col-md-2">Link to Terms&Conditions</label>
                    <div class="col-md-10">
                        <input type="text" name="link_terms" id="link_terms" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="link_privacy" class="col-md-2">Link to Privacy Policy</label>
                    <div class="col-md-10">
                        <input type="text" name="link_privacy" id="link_privacy" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cancellation_policy" class="col-md-2">Cancellation Policy</label>
                    <div class="col-md-10">
                        <input type="text" name="cancellation_policy" id="cancellation_policy" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 control-label" style="font-size: 20px; color: green;">Property Photo</label>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 col-md-2">
                        <a href="javascript:;" class="thumbnail">
                        <img src="holder.js/100%x180" alt="100%x180" style="height: 80px; width: 100%; display: block;">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <a href="javascript:;" class="thumbnail">
                        <img src="holder.js/100%x180" alt="100%x180" style="height: 80px; width: 100%; display: block;">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <a href="javascript:;" class="thumbnail">
                        <img src="holder.js/100%x180" alt="100%x180" style="height: 80px; width: 100%; display: block;">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <a href="javascript:;" class="thumbnail">
                        <img src="holder.js/100%x180" alt="100%x180" style="height: 80px; width: 100%; display: block;">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <a href="javascript:;" class="thumbnail">
                        <img src="holder.js/100%x180" alt="100%x180" style="height: 80px; width: 100%; display: block;">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <a href="javascript:;" class="thumbnail">
                        <img src="holder.js/100%x180" alt="100%x180" style="height: 80px; width: 100%; display: block;">
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                <button type="button" class="btn blue">Save</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>