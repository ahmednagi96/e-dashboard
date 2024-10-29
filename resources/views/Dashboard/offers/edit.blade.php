
                    @extends('layouts.master')
                    @section('title',"انشاءعرض ")
                    @section('content')
                    <div class="container pt-5">
                        <div class="card shadow-sm border-0">
                            <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
                                <h5 id="AddUserLabel" class="mb-0"> تعديل عرض</h5>
                            </div>
                            <div class="card-body">
                                <form class="add-new-user" id="addNewUserForm" action="{{ route('offers.update' ,$offer->id) }}" method="POST" enctype="multipart/form-data"   >
                                    @method('PUT')
                                    @csrf
                                    <div class="row g-3">
                                        <!-- Name Field -->
                                        <div class="col-md-6">
                                            <label class="form-label" for="add-user-fullname">العنوان</label>
                                            <input type="text" class="form-control" id="add-user-fullname" placeholder="اضف عنوان" value="{{ $offer->title }}" name="title" required>
                                            @error('title')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Email Field -->
                                        <div class="col-md-6">
                                            <label class="form-label" for="add-user-email">السعر قبل الخصم</label>
                                            <input type="number" id="add-user-email" class="form-control" placeholder="السعر قبل الخصم" value="{{ $offer->original_price }}" name="original_price" required>
                                            @error('original_price')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="add-user-email">السعر بعد الخصم</label>
                                            <input type="number" id="add-user-email" class="form-control" placeholder="السعر بعد الخصم" value="{{ $offer->discounted_price }}"name="discounted_price" required>
                                            @error('discounted_price')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="add-user-email">العملة</label>
                                            <input type="text" id="add-user-email" class="form-control" placeholder="العملة" value=" {{ $offer->currency }}" name="currency" >
                                            @error('currency')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="add-user-email">اللينك</label>
                                            <input type="link" id="add-user-email" class="form-control" placeholder="اضف لينك"value=" {{ $offer->link }}" name="link" >
                                            @error('link')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="add-user-email">الوصف</label>
                                            <textarea type="number" id="add-user-email" class="form-control" placeholder="اضف وصف" name="description" >{{ $offer->description }}</textarea>
                                            @error('description')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">الصورة</label>
                                        <input class="form-control" type="file"  name="image" id="formFile">
                                      </div>
                                      @error('image')
                                      <div class="alert alert-danger mt-2">{{ $message }}</div>
                                      @enderror
                                    <!-- Action Buttons -->
                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="submit" class="btn btn-success me-2">تعديل</button>
                                        <a href="{{ route('offers.index') }}" class="btn btn-danger">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endsection


