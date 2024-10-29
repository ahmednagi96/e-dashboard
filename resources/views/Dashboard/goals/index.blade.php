@extends('layouts.master')
@section('title','الاهداف')
@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

      <!-- Users List Table -->
      <div class="card">
        <div class="card-header border-bottom">
          <h5 class="card-title mb-3"> الاهداف</h5>
          <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
            {{-- <div class="col-md-4 user_role">
                <a href="/goals/create">
                <button class="btn btn-success">اضف</button>
               </a>
            </div> --}}
            <div class="col-md-4 user_plan"></div>
            <div class="col-md-4 user_status"></div>
          </div>
        </div>
        <div class="card-datatable table-responsive">
          <table class="datatables-users table">
            <thead class="border-top">
              <tr>
                <th>#</th>
                <th>العنوان</th>
                <th>النص</th>
                <th>تعديل </th>
                {{-- <th>حذف</th> --}}
              </tr>
            </thead>
            <tbody>
                @foreach ($goals as $goal )
                <tr>
                    <td>{{ $goal->id }}</td>
                    <td>{{ $goal->title }}</td>
                    <td>{{ $goal->text }}</td>

                    <td>
                        <a href="{{route('goals.edit',$goal->id)}}">
                            <button class="btn btn-secondary">edit</button>
                        </a>
                    </td>
                    {{-- <td>
                        <form   action="/goals/{{ $goal->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button  type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')" >حذف </button>
                        </form>
                    </td> --}}

               </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- / Content -->



    <div class="content-backdrop fade p-5"></div>
  </div>

@endsection
@section('script')
<script>
    function confirmDelete(id) {
        if (confirm("Are you sure you want to delete this item?")) {
            document.getElementById('delete-form-' + id).submit();
        }
    }
</script>
@endsection
