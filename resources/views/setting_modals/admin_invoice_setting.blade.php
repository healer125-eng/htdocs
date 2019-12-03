<div class="modal fade bs-modal-lg" id="admin_invoice_setting" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Admin Invoice Setting</h4>
            </div>
            <div class="modal-body">
                <div class="tbl_invoice"></div>
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

<script type="text/javascript" src="{{ asset('plugins/jquery.min.js') }}"></script>
<script>

    //여기서 row_id를 랜돔으로 하였는데 자료기지와 련결할때에는 자료기지table의 row_id를 쓸것
    $(document).ready(function() {
        var ajax_data =
        [
            {owner:"true", currency:"Airbnb.com", monthly_fee:"green", monthly_fees:"green", reservation_fee:"green", reservation_fees:"green", vat:"green", vats:"green", invoice_due:"green"},
            {owner:"true", currency:"Airbnb.com", monthly_fee:"green", monthly_fees:"green", reservation_fee:"green", reservation_fees:"green", vat:"green", vats:"green", invoice_due:"green"},
            {owner:"true", currency:"Airbnb.com", monthly_fee:"green", monthly_fees:"green", reservation_fee:"green", reservation_fees:"green", vat:"green", vats:"green", invoice_due:"green"},
            {owner:"true", currency:"Airbnb.com", monthly_fee:"green", monthly_fees:"green", reservation_fee:"green", reservation_fees:"green", vat:"green", vats:"green", invoice_due:"green"},
            {owner:"true", currency:"Airbnb.com", monthly_fee:"green", monthly_fees:"green", reservation_fee:"green", reservation_fees:"green", vat:"green", vats:"green", invoice_due:"green"},
        ]

        var random_id = function() 
        {
            var id_num = Math.random().toString(9).substr(2,3);
            var id_str = Math.random().toString(36).substr(2);
            return id_num + id_str;
        }

        var tbl = '';
        tbl += '<table class="table table-hover">'
        tbl += '<thead>';
            tbl += '<tr>';
            tbl += '<th>Owner</th>';
            tbl += '<th>Monthly Fees@</th>';
            tbl += '<th>Monthly Fees%</th>';
            tbl += '<th>Reservation Fees@</th>';
            tbl += '<th>Reservation Fees%</th>';
            tbl += '<th>VAT(Y/N)</th>';
            tbl += '<th>VAT$</th>';
            tbl += '<th>Invoice Due</th>';
            tbl += '<th>Options</th>';
            tbl += '</tr>';
        tbl += '</thead>';

        tbl += '<tbody>';
            $.each(ajax_data, function(index, val)
                {
                    var row_id = random_id();
                    tbl += '<tr row_id="'+row_id+'">';
                        tbl += '<td><div class="row_data" edit_type="click" col_name="owner">'+val['owner']+'</div></td>';
                        tbl += '<td><div class="row_data" edit_type="click" col_name="currency">'+val['currency']+'</div></td>';
                        tbl += '<td><div class="row_data" edit_type="click" col_name="monthly_fee">'+val['monthly_fee']+'</div></td>';
                        tbl += '<td><div class="row_data" edit_type="click" col_name="monthly_fees">'+val['monthly_fees']+'</div></td>';
                        tbl += '<td><div class="row_data" edit_type="click" col_name="reservation_fee">'+val['reservation_fee']+'</div></td>';
                        tbl += '<td><div class="row_data" edit_type="click" col_name="reservation_fees">'+val['reservation_fees']+'</div></td>';
                        tbl += '<td><div class="row_data" edit_type="click" col_name="vat">'+val['vat']+'</div></td>';
                        tbl += '<td><div class="row_data" edit_type="click" col_name="vats">'+val['vats']+'</div></td>';
                        tbl += '<td><div class="row_data" edit_type="click" col_name="invoice_due">'+val['invoice_due']+'</div></td>';
                        tbl +='<td>';
                            tbl +='<span class="btn_edit"> <a href="#" class="btn btn-link" row_id="'+row_id+'">Edit</a></span>';
                            tbl +='<span class="btn_save"> <a href="#" class="btn btn-link" row_id="'+row_id+'">Save</a> | </span>';
                            tbl +='<span class="btn_cancel"> <a href="#" class="btn btn-link" row_id="'+row_id+'">Cancel</a> | </span>';
                        tbl += '</td>';
                    tbl +='</tr>';
                });
            tbl +='</tbody>';
        tbl +='</table>';

        $(document).find('.tbl_invoice').html(tbl);
        $(document).find('.btn_save').hide();
        $(document).find('.btn_cancel').hide();

        $(document).on('click', '.row_data', function(event)
        {
            event.preventDefault();
            if ($(this).attr('edit_type') == 'button') {
                return false;
            }
            $(this).closest('div').attr('contenteditable', 'true');
            $(this).addClass('bg-warning').css('padding', '5px');
            $(this).focus();
        });

        $(document).on('focusout', '.row_data', function(event){
            event.preventDefault();
            if ($(this).attr('edit_type') == 'button') {
                return false;
            }
            var row_id = $(this).closest('tr').attr('row_id');

            var row_div = $(this)
            .removeAttr('contenteditable')
            .removeClass('bg-warning')
            .css('padding', '')

            var col_name = row_div.attr('col_name');
            var col_val = row_div.html();
            var arr = {};
            arr[col_name] = col_val;

            $.extend(arr, {row_id:row_id});
            // $('.post_msg').html('<pre class="bg-success">' + JSON.stringify(arr, null, 2) + '</pre>');
        });

        $(document).on('click', '.btn_edit', function(event){
            event.preventDefault();
            var tbl_row = $(this).closest('tr');
            var row_id = tbl_row.attr('row_id');

            tbl_row.find('.btn_save').show();
            tbl_row.find('.btn_cancel').show();

            tbl_row.find('.btn_edit').hide();

            tbl_row.find('.row_data')
            .attr('contenteditable', 'true')
            .attr('edit_type', 'button')
            .addClass('bg-warning')
            .css('padding', '3px')

            tbl_row.find('.row_data').each(function(index, val){
                $(this).attr('original_entry', $(this).html());
            })
        });

        $(document).on('click', '.btn_cancel', function(event){
            event.preventDefault();
            var tbl_row = $(this).closest('tr');
            var row_id = tbl_row.attr('row_id');

            tbl_row.find('.btn_save').hide();
            tbl_row.find('.btn_cancel').hide();

            tbl_row.find('.btn_edit').show();

            tbl_row.find('.row_data')
            .attr('edit_type', 'click')
            .removeAttr('contenteditable')
            .removeClass('bg-warning')
            .css('padding', '')

            tbl_row.find('.row_data').each(function(index, val){
                $(this).html($(this).attr('original_entry'));
            });
        });

        $(document).on('click', '.btn_save', function(event){
            event.preventDefault();
            var tbl_row = $(this).closest('tr');
            var row_id = tbl_row.attr('row_id');

            tbl_row.find('.btn_save').hide();
            tbl_row.find('.btn_cancel').hide();

            tbl_row.find('.btn_edit').show();

            tbl_row.find('.row_data')
            .attr('edit_type', 'click')
            .removeAttr('contenteditable')
            .removeClass('bg-warning')
            .css('padding', '')

            var arr = {};
            tbl_row.find('.row_data').each(function(index, val){
                var col_name = $(this).attr('col_name');
                var col_val = $(this).html();
                arr[col_name] = col_val;
            });

            $.extend(arr, {row_id:row_id});

            // $('.post_msg').html('<pre class="bg-success">'+JSON.stringify(arr, null, 2) + '</pre>');
        });
    });
</script>