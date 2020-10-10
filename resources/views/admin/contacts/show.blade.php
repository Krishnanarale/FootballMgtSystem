@extends('layouts.admin')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary float-left">Contacted Us</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control " id="name" name="name" value="{{ $contact->name }}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control " id="phone" name="phone" value="{{ $contact->phone }}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control " id="email" name="email" value="{{ $contact->email }}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea type="text" class="form-control " id="message" name="message">{{ $contact->message }}</textarea>
                </div>
            </div>
            <div class="col-md-12">
                <a href="/admin/contacts" class="btn btn-warning float-right btn-sm text-white">Back</a>
            </div>
        </div>
    </div>
</div text-white>
@endsection