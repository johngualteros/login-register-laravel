@if (isset($errors) && count($errors) > 0)
    <div class="alert alert-danger">
        <ul class="lsit-unstyled mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (Session::get('success', false))
    <?php $data = Session::get('success'); ?>
    @if (is_array($data))
        @foreach ($data as $message)
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endforeach
    @else
        <div class="alert alert-success">
            {{ $data }}
        </div>
    @endif
@endif
