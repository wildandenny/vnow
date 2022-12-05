@extends('admin.layout')
@section('content')
@php
$admin = Auth::guard('admin')->user();
if (!empty($admin->role)) {
    $permissions = $admin->role->permissions;
    $permissions = json_decode($permissions, true);
}
@endphp
<div class="mt-2 mb-4">
    <h2 class="text-white pb-2">Welcome back, {{Auth::guard('admin')->user()->first_name}} {{Auth::guard('admin')->user()->last_name}}!</h2>
</div>
<div class="row">
    
    @if (empty($admin->role) || (!empty($permissions) && in_array('Content Management', $permissions)))
    <div class="col-sm-6 col-md-3">
        <a href="{{route('admin.blog.index', ['language' => $default->code])}}" class="d-block">
            <div class="card card-stats card-primary card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-3">
                            <div class="icon-big text-center">
                                <i class="fab fa-blogger-b"></i>
                            </div>
                        </div>
                        <div class="col-9 col-stats pl-1">
                            <div class="numbers">
                                <p class="card-category">Blogs</p>
                                <h4 class="card-title">{{$default->blogs()->count()}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
   
    @endif


    


    @if (empty($admin->role) || (!empty($permissions) && in_array('Events Management', $permissions)))
    @if ($bex->is_event == 1)
    <div class="col-sm-6 col-md-3">
        <a href="{{route('admin.event.index', ['language' => $default->code])}}" class="d-block">
            <div class="card card-stats card-info card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-3">
                            <div class="icon-big text-center">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                        </div>
                        <div class="col-9 col-stats">
                            <div class="numbers">
                                <p class="card-category">Events</p>
                                <h4 class="card-title">{{$default->events()->count()}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endif
    @endif

    

    @if (empty($admin->role) || (!empty($permissions) && in_array('Knowledgebase', $permissions)))
    <div class="col-sm-6 col-md-3">
        <a href="{{route('admin.article.index', ['language' => $default->code])}}" class="d-block">
            <div class="card card-stats card-secondary card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-3">
                            <div class="icon-big text-center">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                        </div>
                        <div class="col-9 col-stats pl-1">
                            <div class="numbers">
                                <p class="card-category">Knowledgebase Articles</p>
                                <h4 class="card-title">{{$default->articles()->count()}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endif


    @if (empty($admin->role) || (!empty($permissions) && in_array('Users Management', $permissions)))
    <div class="col-sm-6 col-md-3">
        <a href="{{route('admin.subscriber.index')}}" class="d-block">
            <div class="card card-stats card-info card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-3">
                            <div class="icon-big text-center">
                                <i class="fas fa-bell"></i>
                            </div>
                        </div>
                        <div class="col-9 col-stats pl-1">
                            <div class="numbers">
                                <p class="card-category">Subscribers</p>
                                <h4 class="card-title">{{\App\Subscriber::count()}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endif

   

   

    
</div>

<!-- Send Mail Modal -->
<div class="modal fade" id="mailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Send Mail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="ajaxEditForm" class="" action="{{route('admin.quotes.mail')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Client Mail **</label>
                        <input id="inemail" type="text" class="form-control" name="email" value="" placeholder="Enter email">
                        <p id="eerremail" class="mb-0 text-danger em"></p>
                    </div>
                    <div class="form-group">
                        <label for="">Subject **</label>
                        <input id="insubject" type="text" class="form-control" name="subject" value="" placeholder="Enter subject">
                        <p id="eerrsubject" class="mb-0 text-danger em"></p>
                    </div>
                    <div class="form-group">
                        <label for="">Message **</label>
                        <textarea id="inmessage" class="form-control nic-edit" name="message" rows="5" cols="80" placeholder="Enter message"></textarea>
                        <p id="eerrmessage" class="mb-0 text-danger em"></p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="updateBtn" type="button" class="btn btn-primary">Send Mail</button>
            </div>
        </div>
    </div>
</div>
@endsection
