@extends('admin')

@section('product-form')

    <form action="{{route('add-slide')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-sect">
            <label for="photo">
                <p>Выберите фотографию</p>
            </label>
            <input type="file" name="photo" id="photo" multiple="false" accept="image/*" class="filePlace">
        </div>

        <input type="hidden" name="slideNumber" value="{{count($data)+1}}">

        <div class="form-sect">
            <input type="submit" class="btn">
        </div>
    </form>
@endsection
