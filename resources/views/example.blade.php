@extends('layouts.admin.app')

@push('head')
    <style>
    </style>
@endpush

@section('content')
<div class="nk-content">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Shop Categories</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a  class="btn btn-primary" data-toggle="modal" data-target="#addCategory" style="color: white"><em class="icon ni ni-plus"></em><span>Create New Category</span></a>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-xxl-12">
                            <div class="col-12 div_alert">
                                @include('layouts.alerts')
                              </div>
                                        {{-- <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Today Orders</h6>
                                            </div>
                                        </div> --}}
                                        <table class="datatable-init nowrap nk-tb-list is-separate dataTable no-footer" data-auto-responsive="false" id="DataTables_Table_2" role="grid" aria-describedby="DataTables_Table_2_info">
                                            <thead>
                                               <tr class="nk-tb-item nk-tb-head" role="row">
                                                  <th class="nk-tb-col sorting" ><span>Sr No</span></th>
                                                  <th class="nk-tb-col  sorting" ><span>Name</span></th>
                                                  <th class="nk-tb-col  sorting" ><span>Image</span></th>
                                                  <th class="nk-tb-col  sorting" ><span>Actions</span></th>

                                               </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($categories as $category)
                                                <tr class="nk-tb-item odd">
                                                    <td class="nk-tb-col"><span class="tb-sub">{{$loop->iteration}}</span></td>
                                                    <td class="nk-tb-col"><span class="tb-product"><span class="title">{{$category->name_en}}</span></span></td>
                                                    <td class="nk-tb-col">
                                                        <img src="{{$category->image_url}}" alt="" width="100">
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <a href="" data-toggle="modal" data-target="#editCategory" data-cat_id = {{$category->id}} data-name_en = "{{$category->name_en}}" data-name_ar = "{{$category->name_ar}}" data-description_en = "{{$category->description_en}}" data-description_ar = "{{$category->description_ar}}" data-cat_img="{{$category->image_url}}" class="btn btn-success btn-sm edit-category-btn">Edit</a>
                                                        <a class="btn btn-danger btn-sm delete-category-btn" data-category_id = "{{$category->id}}" style="color: white">Delete</a>
                                                    </td>
                                                 </tr> 
                                                @endforeach
                                            </tbody>
                                         </table>
                            
                      
                        </div><!-- .col -->
                    </div><!-- .row -->

                    <!--Create Category Modal -->
                    <div class="modal fade zoom"  id="addCategory" tabindex="-1" aria-modal="true" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title">Add Category</h5>
                                 <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                              </div>
                              <div class="modal-body">
                                 <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data" class="form-validate is-alter" novalidate="novalidate">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="category-name-en">Category Name</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" name="name_en" placeholder="Enter Category Name" id="category-name-en" required> 
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label float-right" for="category-name-arr">Category Name (arabic)</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" name="name_ar" dir="rtl" placeholder="أدخل اسم الفئة" id="category-name-arr" required> 
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="category-desc">Description</label>
                                            <div class="form-control-wrap">
                                                <textarea name="description_en" id="category-desc" class="form-control" cols="30" rows="5" placeholder="Optional" style="resize: none"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label float-right" for="category-desc-ar">Description (arabic)</label>
                                            <div class="form-control-wrap">
                                                <textarea name="description_ar" dir="rtl" id="category-desc-ar" class="form-control" cols="30" rows="5" placeholder="اختياري" style="resize: none"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="default-06">Default File Upload</label>
                                            <div class="form-control-wrap">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" accept="image/*" name="category_image" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 text-right">
                                            <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                        </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                    </div><!-- /. End Create Category Modal  -->


                    <!--Edit Category Modal -->
                    <div class="modal fade zoom"  id="editCategory" tabindex="-1" aria-modal="true" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Category</h5>
                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('category.update')}}" method="POST" enctype="multipart/form-data" id="editCategoryForm" class="form-validate is-alter" novalidate="novalidate">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="category-name">Category Name</label>
                                            <div class="form-control-wrap">
                                                <input type="hidden" class="form-control category-id-input" name="cat_id" >
                                                <input type="text" class="form-control category-name-input" name="name_en" placeholder="Enter Category Name" id="category-name" required> 
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label float-right" for="category-name-ar">Category Name (arabic)</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control category-name-ar-input" name="name_ar" dir="rtl" placeholder="أدخل اسم الفئة" id="category-name-ar" required> 
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="category-desc">Description</label>
                                            <div class="form-control-wrap">
                                                <textarea name="description_en" class="form-control category-description-en-input" cols="30" rows="5" placeholder="Optional" style="resize: none"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label float-right" for="category-desc-ar">Description (arabic)</label>
                                            <div class="form-control-wrap">
                                                <textarea name="description_ar" dir="rtl" class="form-control category-description-ar-input" cols="30" rows="5" placeholder="اختياري" style="resize: none"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="default-06">File Upload</label>
                                            <div class="form-control-wrap">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="uploadImage" onchange="PreviewImage()"  accept="image/*" name="category_image" >
                                                    <label class="custom-file-label" for="uploadImage">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <img src="" class="cat_image" id="cat_image" width="100">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 text-right">
                                            <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- /. End Create Category Modal  -->


                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection


@push('scripts')
    <script>
        $( document ).ready(function() {
    $.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var table = $('#example2').DataTable({
        'columnDefs': [ {
        'targets': [2,3], // column index (start from 0)
        'orderable': false, // set orderable false for selected columns
     }]
    });
    

  $(".delete-category-btn").click(function(e) {
        e.preventDefault();
        var category_id = $(this).data('category_id');
        var url = '{{ route("category.destroy", ":id") }}';
        url = url.replace(':id', category_id);
        
        Swal.fire({
            title: 'Are you sure you want to delete?',
            text: 'All records related to this category will be deleted!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e85347',
            cancelButtonColor: '#854fff',
            confirmButtonText: 'Delete!'
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              window.location = url;
            }
          });
        });

        $(".edit-category-btn").click(function() {
            let category_id = $(this).data('cat_id');
            let category_name_en = $(this).data('name_en');
            let category_name_ar = $(this).data('name_ar');
            let category_description_en = $(this).data('description_en');
            let category_description_ar = $(this).data('description_ar');
            let category_catImg = $(this).data('cat_img');

            $(".category-id-input").val(category_id);
            $(".category-name-input").val(category_name_en);
            $(".category-name-ar-input").val(category_name_ar);
            $(".category-description-en-input").val(category_description_en);
            $(".category-description-ar-input").val(category_description_ar);
            $(".cat_image").attr('src', category_catImg);

        });
  

});

        function PreviewImage() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("cat_image").src = oFREvent.target.result;
            };
        };

    </script>
@endpush