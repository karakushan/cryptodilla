<div class="form-group">
    <label for="site-name">{{ __($label) }}</label>
    <input type="text" class="form-control" name="{{ $name }}" id="site-name" value="{{ old($name,$value ?? 0) }}">
</div>

