<div>
    @if (session()->has('successMsg'))
        <div class="alert alert-success alert-dismissible fade show" id="alertSuccess" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <i class="fas fa-times"></i>
            </button>
            <strong>{{session()->get('successMsg')}}</strong>
        </div>
        {{session()->forget('successMsg')}}

    @elseif(session()->has('errorMsg'))
        <div class="alert alert-danger alert-dismissible fade show" id="alertDanger" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <i class="fas fa-times"></i>
            </button>
            <strong>{{session()->get('errorMsg')}}</strong>
        </div>
        {{session()->forget('errorMsg')}}
    @endif
</div>