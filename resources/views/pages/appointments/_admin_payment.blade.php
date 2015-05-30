<div class="widget">
    <div class="widget-header clearfix">
        <h3><i class="icon ion-android-storage"></i>
            <span>PAYMENT</span>
        </h3>
        <div class="btn-group widget-header-toolbar visible-lg">
            <a class="btn btn-link btn-toggle-expand" title="Expand/Collapse" href="#"><i
                        class="icon ion-ios7-arrow-up"></i></a>
            <a class="btn btn-link btn-remove" title="Remove" href="#"><i
                        class="icon ion-ios7-close-empty"></i></a>
        </div>
    </div>
    <div class="widget-content">
        <!-- email Form Input -->
        <div class="form-group {{ $errors->has('email') ? 'has-error':''}}">
            {!! Form::label('email','Email:',['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-6">
                {!! Form::text('email',null,['class'=>'form-control','Placeholder'=>'Email']) !!}
                {!! $errors->first('email','<span class="help-block">:message</span>') !!}
            </div>
        </div>

        <!-- card number Form Input -->
        <div class="form-group">
            {!! Form::label('card','Card number:',['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-6">
                {!! Form::text('',null,['class'=>'form-control','Placeholder'=>'Card Number','data-stripe'=>'number']) !!}
            </div>
        </div>
        <!-- CVC Form Input -->
        <div class="form-group">
            {!! Form::label('cvc','CVC:',['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-6">
                {!! Form::text('',null,['class'=>'form-control','Placeholder'=>'CVC','data-stripe'=>'cvc']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('expiration','Expiration Date:',['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        {!! Form::selectMonth(null, null, ['data-stripe' => 'exp-month','class'=>'form-control']) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::selectYear(null, date('Y'), date('Y') + 10, null, ['data-stripe' => 'exp-year','class'=>'form-control']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group padding_25">
            {!! Form::label('','',['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-6">
               <button type="submit" id="send-payment" class="btn btn-primary">Create Reservation & Make Payment</button>
            </div>
        </div>
    </div>
</div>