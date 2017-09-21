@if(count($errors) > 0)
    <div class="alert alert-danger">
        {{--{{ dd($errors->toArray()) }}--}}
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif