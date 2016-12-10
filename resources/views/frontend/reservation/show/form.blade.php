<div class="col-md-6">
    <div class="input-group margin-bottom">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input name="renter_name" type="text" class="form-control" placeholder="@lang("show.form_inputs.name")">
    </div>
    <div class="input-group margin-bottom">
        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
        <input name="renter_email" type="email" class="form-control" placeholder="@lang("show.form_inputs.email")">
    </div>

    <div class="input-group margin-bottom">
        <div class="input-group-addon"><i class="fa fa-calendar-o"></i></div>
        <input name="rent_start" type="text" class="form-control pull-right" id="rent_start" placeholder="@lang("show.form_inputs.birthdate")">
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <div class="input-group margin-bottom">
            <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
            <input name="rent_start" type="text" class="form-control pull-right" id="rent_start" placeholder="@lang("show.form_inputs.start")">
        </div>
        <div class="input-group margin-bottom">
            <div class="input-group-addon">
                <i class="fa fa-clock-o"></i>
            </div>
            <input name="rent_end" type="text" class="form-control pull-right" id="rent_end" placeholder="@lang("show.form_inputs.end")">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" namwe="tos">@lang("show.form_inputs.end")
            </label>
        </div>


    </div>
</div>
<div class="col-md-3">
    <button type="submit" class="button" >@lang("show.form_inputs.submit")</button>
</div>
