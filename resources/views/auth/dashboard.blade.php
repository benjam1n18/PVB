@extends('auth.layouts')

@section('content')

    <div class="row justify-content-center mt-5">
        <div class="col-lg-6 col-md-6 res-margin">
            <!-- Paper Block -->
            <div class="paper_block">
                <div class="card-header">Dashboard</div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @else
                    <div class="alert alert-success">
                        You are logged in!
                    </div>
                @endif
            </div>

        </div>
    </div>

@endsection
