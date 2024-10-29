@extends('layouts.master')
@section('title',"اضافة الشروط والاحكام")
@section('content')
<div class="container pt-5">
    <div class="card shadow-sm border-0">
        <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
            <h5 id="AddUserLabel" class="mb-0">اضافة الشروط والاحكام </h5>
        </div>
        <div class="card-body">
            <form class="add-new-user" id="addNewUserForm" action="{{ route('conditions.store') }}" method="POST" enctype="multipart/form-data"   >
                @csrf
                <div class="row ">
                    <!-- Name Field -->
                    <div class="col-12">
                        <label class="form-label" for="add-user-fullname">المحتوى</label>
                        <textarea
                        type="text"
                        class="form-control"
                        id="add-user-fullname"
                         placeholder="اضف نص"
                         rows="8"
                         name="condtions" > </textarea>
                        @error('condtions')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <!-- Action Buttons -->
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-success me-2">حفظ</button>
                    <a href="/conditions" class="btn btn-danger">تراجع</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

