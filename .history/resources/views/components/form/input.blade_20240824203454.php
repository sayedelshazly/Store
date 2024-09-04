<input type="{{$type}}" name="{{$name}}" value="{{old('name', $value)}}" class="form-control @error('$') is-invalid @enderror">
    {{-- <input type="text" $="$" value="{{old('$') ?? $category->$}}" class="form-control @error('$') is-invalid @enderror"> --}}
    @error('$')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror