@extends('layouts.master')
@section('title',"شركاءالنجاح")



@section('content')
<div class="container pt-5">
    <div class="card shadow-sm border-0">
        <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
            <h5 id="AddUserLabel" class="mb-0">شركاءالنجاح</h5>
        </div>
        <div class="card-body">
            <form class="add-new-user" id="addNewUserForm" action="{{ route('partenrs.update',$partenr->id) }}" method="POST" enctype="multipart/form-data"   >
                @csrf
                @method('PUT')
                <div class="row ">
                    <!-- Name Field -->
                    <div class="col-12">
                        <label class="form-label" for="add-user-fullname">الاسم</label>
                        <input type="text" class="form-control" id="add-user-fullname" placeholder="اضف الاسم" name="title" value="{{ $partenr->title }}" required>
                        @error('title')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Confirm Password Field -->
                    {{-- <div class="col-12">
                        <label class="form-label" for="textarea1">الوصف</label>
                        <textarea
                        id="textarea1"
                        class="form-control"
                        name="des"
                        placeholder="أضف وصف"></textarea>
                        @error('des')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div> --}}

                </div>
                <div class="row">
                    <div class="col-mb-10">
                        <label for="formFile" class="form-label">الصورة</label>
                        <input
                        class="form-control"
                        type="file"
                        name="img"
                        id="formFile">
                        @error('img')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                </div>
                </div>
                <!-- Action Buttons -->
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-success me-2" onclick="return confirm('Are you sure edit?')">تعديل</button>
                    <a href="{{ route('partenrs.index') }}" class="btn btn-danger">تراجع</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


