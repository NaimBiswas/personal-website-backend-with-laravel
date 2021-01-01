@extends('layouts.backend.app')
@section('content')
<div class="row">
    @include('include.error')
    <div class="col-lg-6 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-header">
                <strong>Header </strong> Content
            </div>
            <form action="{{ route('admin.header.store') }}"
                method="post"
                class="">
                @csrf
                <div class="card-body card-block">

                    <div class="form-group"><label for="nf-email"
                            class=" form-control-label">Heading</label><input type="text"
                            id="nf-email"
                            name="heading"
                            placeholder="Enter Site Heading"
                            class="form-control"><span class="help-block">Enter Your Site Heading</span></div>

                    <div class="form-group"><label for="nf-password"
                            class=" form-control-label">Static Text</label><input type="password"
                            id="nf-password"
                            name="static_text"
                            placeholder="Enter Site Static Text.."
                            class="form-control"><span class="help-block">Enter Site Static Text</span></div>
                    <div class="form-group"><label for="nf-password"
                            class=" form-control-label">Dynamic Text</label><input type="password"
                            id="nf-password"
                            name="statdynamic_textic_text"
                            placeholder="Enter Site Dynamic Text.."
                            class="form-control"><span class="help-block">Enter Site Dynamic Text</span></div>

                </div>
                <div class="card-footer">
                    <button type="submit"
                        class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
            </form>
        </div>
    </div>
</div>
<div class="col-lg-6 col-sm-12 col-xs-12">
    <div class="card">
        <div class="card-header">
            <strong>Headrer</strong> Images
        </div>
        <div class="card-body card-block">
            <form action="{{ route('admin.header.images.store') }}"
                method="post"
                class="">
                @csrf
                <div class="form-group">

                    <input type="file"><br><span class="help-block">Select Your Site Header Images</span></div>
                <div class="card-footer">
                    <button type="submit"
                        class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>

</div>
@endsection
