<input type="{{$type}}" name="{{$name}}" value="{{old('name', $value)}}" class="form-control @error('$na') is-invalid @enderror">
    {{-- <input type="text" $na="$na" value="{{old('$na') ?? $category->$na}}" class="form-control @error('$na') is-invalid @enderror"> --}}
    @error('$na')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror