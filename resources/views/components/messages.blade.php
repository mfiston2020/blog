<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->

    @if (session('successMessage'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('successMessage')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        
        @if (session('errorMessage'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{session('errorMessage')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session('warningMessage'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{session('warningMessage')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
</div>