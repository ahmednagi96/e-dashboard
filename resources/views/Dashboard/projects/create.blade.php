@extends('layouts.master')
@section('title',"انشاء مشروع جديد")



@section('content')
<div class="container pt-5">
    <div class="card shadow-sm border-0">
        <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
            <h5 id="AddUserLabel" class="mb-0">اضف مشروع</h5>
        </div>
        <div class="card-body">
            <form class="add-new-user" id="addNewUserForm" action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data"   >
                @csrf
                <div class="row">
                    <!-- Name Field           //service_id ,    -->
                    <div class="col-md-6">
                        <label class="form-label" for="add-user-fullname">العنوان</label>
                        <input type="text" class="form-control" id="add-user-fullname" placeholder="اضف عنوان" name="addr" required>
                        @error('addr')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- link Field -->
                    <div class="col-md-6">
                        <label class="form-label" for="add-link">لينك</label>
                        <input type="link" id="add-link" class="form-control" placeholder="اضف لينك" name="link" required>
                        @error('link')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                <!-- description Field -->
                <div class="col-md-6">
                    <label class="form-label" for="add-des">الوصف</label>
                    <textarea name="des" id="add-des" class="form-control" placeholder="اضف وصف"></textarea>
                    @error('des')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                 <!-- select service Field -->
                 @php
                     $services= App\Models\Service::all();
                 @endphp
                 <div class="col-md-6">
                    <label class="form-label" for="add_service_id">اختر الخدمة</label>
                    <select id="add_service_id" name="service_id" class=" form-select" data-placeholder="Size">
                        <option value="">اختر</option>
                        @foreach ($services as $serv)
                        <option value="{{ $serv->id }}">{{ $serv->title }}</option>
                        @endforeach
                      </select>
                    @error('service_id')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">الصورة</label>
                    <input class="form-control" type="file"  name="img" id="formFile">
                  </div>
                  @error('img')
                  <div class="alert alert-danger mt-2">{{ $message }}</div>
                  @enderror
                <!-- Action Buttons -->
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-success me-2">Save</button>
                    <a href="{{ route('projects.index') }}" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


