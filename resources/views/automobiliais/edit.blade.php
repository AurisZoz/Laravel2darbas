@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">{{ __("messages.Savininkų_sąrašas") }}</div>
                    <div class="card-body">
                       <form method="post" action="{{ route("automobiliais.update", $automobiliai->id) }}">
                           @csrf
                           @method('put')
                           <div class="mb-3">
                               <label class="form-label">ID:</label>
                               <input class="form-control" name="id" type="text" value="{{ $automobiliai->id }}" required>
                           </div>
                           <div class="mb-3">
                               <label class="form-label">{{ __("messages.Markė") }}:</label>
                               <input class="form-control" name="marke" type="text" value="{{ $automobiliai->marke }}" required>
                           </div>
                           <div class="mb-3">
                               <label class="form-label">{{ __("messages.Modelis") }}:</label>
                               <input class="form-control" name="modelis" type="text" value="{{ $automobiliai->modelis }}" required>
                           </div>
                           <div class="mb-3">
                               <label class="form-label">{{ __("messages.Numeris") }}:</label>
                               <input class="form-control" name="numeris" type="text" value="{{ $automobiliai->numeris }}" required>
                           </div>
                           <button class="btn btn-success">{{ __("messages.Išsaugoti") }}</button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
