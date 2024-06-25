<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Clubs</h4>
            </div>
            <div class="col-md-7 align-self-center text-end">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Clubs</a></li>
                        <li class="breadcrumb-item active">Details</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-20">
                            @if($club->logo) 
                                <img src="{{ asset('storage/'.$club->logo) }}" class="img-circle" width="150">
                            @endif
                            <h4 class="card-title m-t-10">{{ $club->name }}</h4>
                            <h6 class="card-subtitle">{{ $club->registration_number }}</h6>
                        </center>
                    </div>
                    <div class="">
                        <hr />
                    </div>
                    <div class="card-body">
                        <small class="text-muted">Email address </small>
                        <h6>{{ $club->email }}</h6>
                        <small class="text-muted">Phone </small>
                        <h6>{{ $club->tel }}</h6>
                        <small class="text-muted">Province </small>
                        <h6>{{ $club->province }}</h6>
                        <small class="text-muted">Address </small>
                        <h6>{{ $club->address }}</h6>
                    </div>
                    <div class="">
                        <hr />
                    </div>
                    <div class="card-body">
                        <div class="d-grid">
                            <a href="{{ url('clubs/form/'.$club->id) }}" class="btn btn-primary">EDIT</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#management" role="tab" aria-selected="true">Management</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#members" role="tab" aria-selected="false">Members</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#athletes" role="tab" aria-selected="false">Athletes</a> </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="management" role="tabpanel">
                            <div class="card-body">
                                <table class="table">
                                    <tead>
                                        <th>Position</th>
                                        <th>Name</th>
                                        <th>ID Number</th>
                                        <th>Contact Number</th>
                                        <th>Email</th>
                                        <th></th>
                                    </tead>
                                    <tbody>
                                        @foreach($management AS $man)
                                            <tr>
                                                <td>{{ ucwords(str_replace('_', ' ', $man->pivot->type)) }}</td>
                                                <td>{{ $man->name.' '.$man->surname }}</td>
                                                <td>{{ $man->id_number }}</td>
                                                <td>{{ $man->contact_number }}</td>
                                                <td>{{ $man->email }}</td>
                                                <td>
                                                    <a href="#" wire:click.prevent="Deactivate({{ $man->id }})">Deactivate</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="members" role="tabpanel">
                            <div class="card-body">
                                
                            </div>
                        </div>
                        <div class="tab-pane" id="athletes" role="tabpanel">
                            <div class="card-body">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>