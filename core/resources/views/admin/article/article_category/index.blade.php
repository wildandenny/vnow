@extends('admin.layout')

@php
$selLang = \App\Language::where('code', request()->input('language'))->first();
@endphp

@if(!empty($selLang) && $selLang->rtl == 1)
  @section('styles')
  <style>
    form:not(.modal-form) input,
    form:not(.modal-form) textarea,
    form:not(.modal-form) select,
    select[name='language'] {
      direction: rtl;
    }

    form:not(.modal-form) .note-editor.note-frame .note-editing-area .note-editable {
      direction: rtl;
      text-align: right;
    }
  </style>
  @endsection
@endif

@section('content')
<div class="page-header">
  <h4 class="page-title">Article Categories</h4>
  <ul class="breadcrumbs">
    <li class="nav-home">
      <a href="{{route('admin.dashboard')}}">
        <i class="flaticon-home"></i>
      </a>
    </li>
    <li class="separator">
      <i class="flaticon-right-arrow"></i>
    </li>
    <li class="nav-item">
      <a href="#">Articles</a>
    </li>
    <li class="separator">
      <i class="flaticon-right-arrow"></i>
    </li>
    <li class="nav-item">
      <a href="#">Categories</a>
    </li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-lg-4">
            <div class="card-title d-inline-block">Categories</div>
          </div>

          <div class="col-lg-3">
            @if (!empty($langs))
              <select
                name="language"
                class="form-control"
                onchange="window.location='{{url()->current() . '?language='}}'+this.value"
              >
                <option
                  value=""
                  selected
                  disabled
                >Select a Language</option>
                @foreach ($langs as $lang)
                <option
                  value="{{$lang->code}}"
                  {{$lang->code == request()->input('language') ? 'selected' : ''}}
                >{{$lang->name}}</option>
                @endforeach
              </select>
            @endif
          </div>

          <div class="col-lg-4 offset-lg-1 mt-2 mt-lg-0">
            <a
              href="#"
              class="btn btn-primary float-right btn-sm"
              data-toggle="modal"
              data-target="#createModal"
            ><i class="fas fa-plus"></i> Add Article Category</a>

            <button
              class="btn btn-danger float-right btn-sm mr-2 d-none bulk-delete"
              data-href="{{route('admin.article_category.bulk_delete')}}"
            ><i class="flaticon-interface-5"></i> Delete</button>
          </div>
        </div>
      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-lg-12">
            @if (count($article_categories) == 0)
              <h3 class="text-center">NO ARTICLE CATEGORY FOUND</h3>
            @else
            <div class="table-responsive">
              <table class="table table-striped mt-3">
                <thead>
                  <tr>
                    <th scope="col">
                      <input
                        type="checkbox"
                        class="bulk-check"
                        data-val="all"
                      >
                    </th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Serial Number</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($article_categories as $article_category)
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="bulk-check"
                          data-val="{{$article_category->id}}"
                        >
                      </td>
                      <td>{{convertUtf8($article_category->name)}}</td>
                      <td>
                        @if ($article_category->status == 1)
                        <h2 class="d-inline-block"><span class="badge badge-success">Active</span></h2>
                        @else
                        <h2 class="d-inline-block"><span class="badge badge-danger">Deactive</span></h2>
                        @endif
                      </td>
                      <td>{{$article_category->serial_number}}</td>
                      <td>
                        <a
                          class="btn btn-secondary btn-sm editbtn"
                          href="#editModal"
                          data-toggle="modal"
                          data-article_category_id="{{$article_category->id}}"
                          data-name="{{$article_category->name}}"
                          data-status="{{$article_category->status}}"
                          data-serial_number="{{$article_category->serial_number}}"
                        >
                          <span class="btn-label">
                            <i class="fas fa-edit"></i>
                          </span>
                          Edit
                        </a>

                        <form
                          class="deleteform d-inline-block"
                          action="{{route('admin.article_category.delete')}}"
                          method="post"
                        >
                          @csrf
                          <input
                            type="hidden"
                            name="article_category_id"
                            value="{{$article_category->id}}"
                          >
                          <button
                            type="submit"
                            class="btn btn-danger btn-sm deletebtn"
                          >
                            <span class="btn-label">
                              <i class="fas fa-trash"></i>
                            </span>
                            Delete
                          </button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            @endif
          </div>
        </div>
      </div>

      <div class="card-footer">
        <div class="row">
          <div class="d-inline-block mx-auto">
            {{$article_categories->appends(['language' => request()->input('language')])->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Create Article Category Modal -->
<div
  class="modal fade"
  id="createModal"
  tabindex="-1"
  role="dialog"
  aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true"
>
  <div
    class="modal-dialog modal-dialog-centered"
    role="document"
  >
    <div class="modal-content">
      <div class="modal-header">
        <h5
          class="modal-title"
          id="exampleModalLongTitle"
        >Add Article Category</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form
          id="ajaxForm"
          class="modal-form create"
          action="{{route('admin.article_category.store')}}"
          method="POST"
        >
          @csrf
          <div class="form-group">
            <label for="">Language **</label>
            <select
              name="language_id"
              class="form-control"
            >
              <option
                value=""
                selected
                disabled
              >Select a Language</option>
              @foreach ($langs as $lang)
              <option value="{{$lang->id}}">{{$lang->name}}</option>
              @endforeach
            </select>
            <p
              id="errlanguage_id"
              class="mb-0 text-danger em"
            ></p>
          </div>

          <div class="form-group">
            <label for="">Name **</label>
            <input
              type="text"
              class="form-control"
              name="name"
              value=""
              placeholder="Enter Name"
            >
            <p
              id="errname"
              class="mb-0 text-danger em"
            ></p>
          </div>
          
          <div class="form-group">
            <label for="">Status **</label>
            <select
              class="form-control ltr"
              name="status"
            >
              <option
                value=""
                selected
                disabled
              >Select a status</option>
              <option value="1">Active</option>
              <option value="0">Deactive</option>
            </select>
            <p
              id="errstatus"
              class="mb-0 text-danger em"
            ></p>
          </div>
          <div class="form-group">
            <label for="">Serial Number **</label>
            <input
              type="number"
              class="form-control ltr"
              name="serial_number"
              value=""
              placeholder="Enter Serial Number"
            >
            <p
              id="errserial_number"
              class="mb-0 text-danger em"
            ></p>
            <p class="text-warning"><small>The higher the serial number is, the later the article category will be shown.</small></p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button
          type="button"
          class="btn btn-secondary"
          data-dismiss="modal"
        >Close</button>

        <button
          id="submitBtn"
          type="button"
          class="btn btn-primary"
        >Submit</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Blog Category Modal -->
<div
  class="modal fade"
  id="editModal"
  tabindex="-1"
  role="dialog"
  aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true"
>
  <div
    class="modal-dialog modal-dialog-centered"
    role="document"
  >
    <div class="modal-content">
      <div class="modal-header">
        <h5
          class="modal-title"
          id="exampleModalLongTitle"
        >Edit Article Category</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form
          id="ajaxEditForm"
          class=""
          action="{{route('admin.article_category.update')}}"
          method="POST"
        >
          @csrf
          <input
            id="inarticle_category_id"
            type="hidden"
            name="article_category_id"
            value=""
          >
          <div class="form-group">
            <label for="">Name **</label>
            <input
              id="inname"
              type="name"
              class="form-control"
              name="name"
              value=""
              placeholder="Enter Name"
            >
            <p
              id="eerrname"
              class="mb-0 text-danger em"
            ></p>
          </div>

          <div class="form-group">
            <label for="">Status **</label>
            <select
              id="instatus"
              class="form-control"
              name="status"
            >
              <option
                value=""
                selected
                disabled
              >Select a status</option>
              <option value="1">Active</option>
              <option value="0">Deactive</option>
            </select>
            <p
              id="eerrstatus"
              class="mb-0 text-danger em"
            ></p>
          </div>

          <div class="form-group">
            <label for="">Serial Number **</label>
            <input
              id="inserial_number"
              type="number"
              class="form-control ltr"
              name="serial_number"
              value=""
              placeholder="Enter Serial Number"
            >
            <p
              id="eerrserial_number"
              class="mb-0 text-danger em"
            ></p>
            <p class="text-warning"><small>The higher the serial number is, the later the article category will be shown.</small></p>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button
          type="button"
          class="btn btn-secondary"
          data-dismiss="modal"
        >Close</button>
        <button
          id="updateBtn"
          type="button"
          class="btn btn-primary"
        >Save Changes</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
  $(document).ready(function() {
      // make input fields RTL
      $("select[name='language_id']").on('change', function() {
          $(".request-loader").addClass("show");
          let url = "{{url('/')}}/admin/rtlcheck/" + $(this).val();
          console.log(url);
          $.get(url, function(data) {
              $(".request-loader").removeClass("show");
              if (data == 1) {
                  $("form.create input").each(function() {
                      if (!$(this).hasClass('ltr')) {
                          $(this).addClass('rtl');
                      }
                  });
                  $("form.create select").each(function() {
                      if (!$(this).hasClass('ltr')) {
                          $(this).addClass('rtl');
                      }
                  });
                  $("form.create textarea").each(function() {
                      if (!$(this).hasClass('ltr')) {
                          $(this).addClass('rtl');
                      }
                  });
                  $("form.create .summernote").each(function() {
                      $(this).addClass('rtl text-right');
                  });

              } else {
                  $("form.create input, form.create select, form.create textarea").removeClass('rtl');
                  $("form.create .summernote").removeClass('rtl text-right');
              }
          })
      });
    });
</script>
@endsection
