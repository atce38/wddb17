<div>

    @if ($errors->any())
    <div class="alert bg-danger alert-dismissible fade show">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if(Session::has('error'))
    <div class="alert bg-danger  alert-dismissible fade show text-light">
        <strong>Failed!</strong> {!! Session::get('error') !!}

        @php
        Session::forget('error');
        @endphp
        <button type="button" class="btn-close btn" data-bs-dismiss="alert" aria-label="Close">&times;</button>
    </div>
    @endif
@if(Session::has('success'))
    <div class="alert bg-success  alert-dismissible fade show text-light">
        <strong>Success!</strong> {!! Session::get('success') !!}

        @php
        Session::forget('success');
        @endphp
        <button type="button" class="btn-close btn" data-bs-dismiss="alert" aria-label="Close">&times;</button>
    </div>
    @endif
</div>
