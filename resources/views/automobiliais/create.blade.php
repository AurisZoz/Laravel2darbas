@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __("messages.Automobilių_sąrašas") }}</div>
                    <div class="card-body">
                    <form method="post" action="{{ route("automobiliais.store") }}">
                    @csrf
                           <div class="mb-3">
                               <label class="form-label">ID:</label>
                               <input class="form-control" name="id" type="text" value="" required>
                           </div>
                           <div class="mb-3">
                               <label class="form-label">{{ __("messages.Markė") }}:</label>
                               <input class="form-control" name="marke" type="text" value="" required>
                           </div>
                           <div class="mb-3">
                               <label class="form-label">{{ __("messages.Modelis") }}:</label>
                               <input class="form-control" name="modelis" type="text" value="" required>
                           </div>
                           <div class="mb-3">
                               <label class="form-label">{{ __("messages.Numeris") }}:</label>
                               <input class="form-control" name="numeris" type="text" value="" required>
                           </div>

                           <button class="btn btn-success"> {{ __("messages.Pridėti") }}</button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


