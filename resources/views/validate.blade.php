@if($errors -> any()) 
    <p class="alert alert-danger">{{ $errors -> first() }} <button data-dismiss="alert" class="close">&times;</button></p>
@endif

@if(Session::has('success')) 
    <p class="alert alert-success">{{ Session::get('success') }} <button data-dismiss="alert" class="close">&times;</button></p>
@endif


@if(Session::has('danger')) 
    <p class="alert alert-danger">{{ Session::get('danger') }} <button data-dismiss="alert" class="close">&times;</button></p>
@endif


@if(Session::has('warning')) 
    <p class="alert alert-warning">{{ Session::get('warning') }} <button data-dismiss="alert" class="close">&times;</button></p>
@endif