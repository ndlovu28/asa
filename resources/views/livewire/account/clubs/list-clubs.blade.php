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
                        <li class="breadcrumb-item active">List</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 ms-auto">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search key" aria-label="Recipient's username" aria-describedby="search" wire:model.live="search_key">
                                    <span class="input-group-text" id="search"><i class="fas fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Registration Number</th>
                                    <th>Contact Number</th>
                                    <th>Province</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clubs AS $club)
                                    <tr>
                                        <td>{{ $club->name }}</td>
                                        <td>{{ $club->registration_number }}</td>
                                        <td>{{ $club->tel }}</td>
                                        <td>{{ $club->province }}</td>
                                        <td class="text-end">
                                            <a href="{{ url('clubs/form/'.$club->id) }}"><i class="far fa-edit"></i>&nbsp;Edit</a>
                                            &nbsp;|&nbsp;
                                            <a href="{{ url('clubs/view/'.$club->id) }}"><i class="far fa-folder-open"></i>&nbsp;View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="">
                            {{ $clubs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>