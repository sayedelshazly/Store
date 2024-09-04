<input type="{{$type}}" name="{{$name}}" value="{{old('name', $value)}}" class="form-control @error('$nA') is-invalid @enderror">
    {{-- <input type="text" $nA="$nA" value="{{old('$nA') ?? $category->$nA}}" class="form-control @error('$nA') is-invalid @enderror"> --}}
    @error('$nA')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror