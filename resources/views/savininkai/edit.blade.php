@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __("messages.Savininkų_sąrašas") }}</div>
                    <div class="card-body">
                        <form method="post" action="{{ route("savininkai.update", $savininkais->id) }}">
                        @csrf
                        <div class="mb-3">
                               <label class="form-label">ID:</label>
                               <input class="form-control" name="id" type="text" value="{{ $savininkais->id }}" required>
                           </div>
                           <div class="mb-3">
                               <label class="form-label">{{ __("messages.Vardas") }}:</label>
                               <input class="form-control" name="vardas" type="text" value="{{ $savininkais->vardas }}" required>
                           </div>
                           <div class="mb-3">
                               <label class="form-label">{{ __("messages.Pavardė") }}:</label>
                               <input class="form-control" name="pavarde" type="text" value="{{ $savininkais->pavarde }}">
                           </div>
                           <button class="btn btn-success">{{ __("messages.Išsaugoti") }} </button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
