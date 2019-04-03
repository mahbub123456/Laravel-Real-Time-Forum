@if(session()->has('msg'))
    <div class="alert alert-info">
        {{ session()->get('msg')  }}
    </div>
@endif
