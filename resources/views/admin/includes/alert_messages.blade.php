@if ($message = Session::get('success'))
<div class="col-sm-8 col-sm-offset-2 col-xs-12">
    <div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
    </div>
</div>
<div class="clear"></div>
@endif

@if ($message = Session::get('error'))
<div class="col-sm-8 col-sm-offset-2 col-xs-12">
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
    </div>
</div>
<div class="clear"></div>
@endif

@if ($message = Session::get('warning'))
<div class="col-sm-8 col-sm-offset-2 col-xs-12">
    <div class="alert alert-warning alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
    </div>
</div>
<div class="clear"></div>
@endif

@if ($message = Session::get('info'))
<div class="col-sm-8 col-sm-offset-2 col-xs-12">
    <div class="alert alert-info alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
    </div>
</div>
<div class="clear"></div>
@endif