<div  class="row">
    <div class="col-md-6">
        <div class="input-group margin-bottom">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input name="renter_name" type="text" class="form-control" placeholder="@lang("reservation.form_inputs.name")">
        </div>
        <div class="input-group margin-bottom">
            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
            <input name="renter_email" type="email" class="form-control" placeholder="@lang("reservation.form_inputs.email")">
        </div>

        <div class="input-group margin-bottom">
            <div class="input-group-addon"><i class="fa fa-calendar-o"></i></div>
            <input name="rent_start" type="text" class="form-control pull-right" id="rent_start" placeholder="@lang("reservation.form_inputs.birthdate")">
        </div>
    </div>
    <div class="col-md-6">
        <div class="input-group margin-bottom">
            <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
            <input name="rent_period" type="text" class="form-control pull-right" id="rent_start" placeholder="@lang("reservation.form_inputs.rent_period")">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" namwe="tos">@lang("reservation.form_inputs.end")
            </label>
        </div>
        <div id="reservation_amount">
            @lang('reservation.amount')<span></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="pull-right margin">
        <button type="submit" class="button" >@lang("reservation.form_inputs.submit")</button>
    </div>
</div>
