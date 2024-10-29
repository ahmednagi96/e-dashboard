@extends('layouts.master')
@section('title',"اضافة تقيم")


//  ,status_rat ,
@section('content')
<div class="container pt-5">
    <div class="card shadow-sm border-0">
        <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
            <h5 id="AddUserLabel" class="mb-0">اضف  تقيم</h5>
        </div>
        <div class="card-body">
            <form class="add-new-user" id="addNewUserForm" action="{{ route('ratings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row ">
                    <!-- Name Field -->
                    <div class="col-12">
                        <label class="form-label" for="add-user-fullname">الاسم</label>
                        <input type="text" class="form-control" id="add-user-fullname" placeholder="اضف اسم" name="title" required>
                        @error('title')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="col-12">
                        <label class="form-label" for="textarea1">الوصف</label>
                        <textarea
                        id="textarea1"
                        class="form-control"
                        name="comment"
                        placeholder="أضف وصف"></textarea>
                        @error('comment')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label" for="add_rating">اختر التقيم</label>
                        <select id="add_rating" name="status_rat" class=" form-select" data-placeholder="Size">
                            <option value="">اختر</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                        @error('service_id')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
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
                    <button type="submit" class="btn btn-success me-2">حفظ</button>
                    <a href="{{ route('ratings.index') }}" class="btn btn-danger">تراجع</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


