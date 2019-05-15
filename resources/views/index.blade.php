@extends('layouts.app')
@section('content')
<div class="container-fluid mt--7" >
    <div class="card shadow">
        <div class="card-header border-0">
            <h3 class="mb-0">Latest trends</h3>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <tbody>
                    @include("_chansons", ["chansons" => $chansons])
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

