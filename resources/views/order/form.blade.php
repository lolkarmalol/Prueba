<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="order" class="form-label">{{ __('Order') }}</label>
            <input type="text" name="order" class="form-control @error('order') is-invalid @enderror" value="{{ old('order', $order?->order) }}" id="order" placeholder="Order">
            {!! $errors->first('order', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="state" class="form-label">{{ __('State') }}</label>
            <input type="text" name="state" class="form-control @error('state') is-invalid @enderror" value="{{ old('state', $order?->state) }}" id="state" placeholder="State">
            {!! $errors->first('state', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="table_id" class="form-label">{{ __('Table Id') }}</label>
            <input type="text" name="table_id" class="form-control @error('table_id') is-invalid @enderror" value="{{ old('table_id', $order?->table_id) }}" id="table_id" placeholder="Table Id">
            {!! $errors->first('table_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>