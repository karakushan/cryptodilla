<div class="form-group row">
    <label for="{{ $name }}" class="col-sm-12 col-form-label">{{ __($label) }}</label>
    <div class="col-sm-12">
        <input type="checkbox" name="{{ $name }}" class="js-switch" value="1" {{ $value==1?'checked' :'' }}/>
    </div>
</div>
