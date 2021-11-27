@if (isset($errors) and $errors->any())
    <div class="col-xl-12 pt-3">
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><strong>{{ t('oops_an_error_has_occurred') }}</strong></h5>
            <ul class="list list-check">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
