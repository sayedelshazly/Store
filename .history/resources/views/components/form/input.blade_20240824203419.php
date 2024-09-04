<input type="{{$type}}" name="{{$name}}" value="{{old('name', $category->name)}}" class="form-control @error('name') is-invalid @enderror">
    {{-- <input type="text" name="name" value="{{old('name') ?? $category->name}}" class="form-control @error('name') is-invalid @enderror"> --}}
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror