<div class="alert alert-danger alert-dismissible fade show" role="alert">
												
    <strong>Error!</strong> <br/> 
    @foreach ($errors->all() as $error)
        <p class="text-danger"> {{ $error }} </p>
    @endforeach
    
</div>