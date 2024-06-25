<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles"></div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30"> 
                            @if($ath->profile_image)
                            <img src="{{ asset('storage/'.$ath->profile_image) }}" class="img-circle" width="150">
                            @endif
                            <h4 class="card-title m-t-10">{{ $ath->first_name.' '.$ath->other_names.' '.$ath->surname }}</h4>
                            <h6 class="card-subtitle">{{ $ath->email }}</h6>
                        </center>
                    </div>
                    <div>
                        <hr> 
                    </div>
                    <div class="card-body">
                        <div class="personal_info_block">
                            <small class="text-muted">Name</small>
                            <h6>{{ ucwords($ath->first_name.' '.$ath->other_names.' '.$ath->surname) }}</h6>
                        </div>
                        <div class="personal_info_block">
                            <small class="text-muted">Preferred Name</small>
                            <h6>{{ ucwords($ath->preferred_name) }}</h6>
                        </div>
                        <div class="personal_info_block">
                            <small class="text-muted">ID Number</small>
                            <h6>{{ $ath->id_number }}</h6>
                        </div>
                        <div class="personal_info_block">
                            <small class="text-muted">Nationality</small>
                            <h6>{{ ucwords($ath->nationality) }}</h6>
                        </div>
                        <div class="personal_info_block">
                            <small class="text-muted">DOB</small>
                            <h6>{{ date('d F Y', strtotime($ath->dob)) }}</h6>
                        </div>
                        <div class="personal_info_block">
                            <small class="text-muted">City Of Birth</small>
                            <h6>{{ ucwords($ath->city_of_birth) }}</h6>
                        </div>
                        <div class="personal_info_block">
                            <small class="text-muted">Country Of Birth</small>
                            <h6>{{ ucwords($ath->country_of_birth) }}</h6>
                        </div>
                        <div class="personal_info_block">
                            <small class="text-muted">Gender</small>
                            <h6>{{ ucwords($ath->gender) }}</h6>
                        </div>
                        <div class="personal_info_block">
                            <small class="text-muted">Race</small>
                            <h6>{{ ucwords($ath->race) }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>