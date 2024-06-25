<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Athletes</h4>
            </div>
            <div class="col-md-7 align-self-center text-end">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Athletes</a></li>
                        <li class="breadcrumb-item active">List</li>
                    </ol>
                    <a href="{{ url('athletes/form') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i> Create New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4 ms-auto">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search key" aria-label="Recipient's username" aria-describedby="search" wire:model.live="search_key">
                                            <span class="input-group-text" id="search"><i class="fas fa-search"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Preferred Name</th>
                                            <th>Club</th>
                                            <th>Contact Number</th>
                                            <th>Province</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($athletes AS $ath)
                                            <tr>
                                                <td>{{ $ath->first_name.' '.$ath->surname }}</td>
                                                <td>{{ $ath->preferred_name }}</td>
                                                <td>
                                                    @foreach($ath->currentClubs() AS $cl)
                                                        {{ $cl->name }}<br />
                                                    @endforeach
                                                </td>
                                                <td>{{ $ath->mobile_number }}</td>
                                                <td>{{ $ath->province }}</td>
                                                <td class="text-end">
                                                    <a href="{{ url('athletes/form/'.$ath->id) }}"><i class="far fa-edit"></i>&nbsp;Edit</a>
                                                    &nbsp;|&nbsp;
                                                    <a href="{{ url('athletes/view/'.$ath->id) }}"><i class="far fa-folder-open"></i>&nbsp;View</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="mt-3">
                                    {{ $athletes->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>