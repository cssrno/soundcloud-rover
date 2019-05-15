@extends('layouts.app')

@section('content')
<div class="container-fluid mt--7">
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Add music</h3>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            @include('_error')
            <div class="container">
                <form role="form"  action="/creer" data-pjax method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                            </div>
                            <input class="form-control" name="nom" required placeholder="Name of the song" type="text" value="{{old('nom')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                            </div>
                            <input class="form-control" name="style" required  placeholder="Style of the song" type="text" value="{{old('style')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                            </div>
                            <input class="form-control" name="chanson" required type="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-primary mt-4">Créer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection