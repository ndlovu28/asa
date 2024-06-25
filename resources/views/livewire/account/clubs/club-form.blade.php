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
                        <li class="breadcrumb-item active">{{ $view }}</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Club Logo</label>
                                    <input type="file" class="form-control" name="logo" wire:model.defer="logo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" wire:model.defer="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Registration Number</label>
                                    <input type="text" class="form-control" name="registration_number" wire:model.defer="registration_number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Telephone Number</label>
                                    <input type="text" class="form-control" name="tel" wire:model.defer="tel">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" wire:model.defer="email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Province</label>
                                    <select class="form-control" name="province" wire:model.defer="province">
                                        <option value="">Select Option</option>
                                        @foreach($provinces AS $pr)
                                            <option value="{{ $pr }}">{{ $pr }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control" name="address" wire:model.defer="address"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr />
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Chairperson ID Number</label>
                                    <input type="text" class="form-control" name="chairperson_id_number" wire:model.blur="chairperson_id_number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Chairperson First Name</label>
                                    <input type="text" class="form-control" name="chairperson_first_name" wire:model.defer="chairperson_first_name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Chairperson Surname</label>
                                    <input type="text" class="form-control" name="chairperson_surname" wire:model.defer="chairperson_surname">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Chairperson Contact Number</label>
                                    <input type="text" class="form-control" name="chairperson_contact_number" wire:model.defer="chairperson_contact_number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Chairperson Email</label>
                                    <input type="text" class="form-control" name="chairperson_email" wire:model.defer="chairperson_email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Chairperson Date Appointed</label>
                                    <input type="date" class="form-control" name="chairperson_date_appointed" wire:model.defer="chairperson_date_appointed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr />
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Vice Chairperson ID Number</label>
                                    <input type="text" class="form-control" name="vice_chairperson_id_number" wire:model.blur="vice_chairperson_id_number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Vice Chairperson First Name</label>
                                    <input type="text" class="form-control" name="vice_chairperson_first_name" wire:model.defer="vice_chairperson_first_name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Vice Chairperson Surname</label>
                                    <input type="text" class="form-control" name="vice_chairperson_surname" wire:model.defer="vice_chairperson_surname">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Vice Chairperson Contact Number</label>
                                    <input type="text" class="form-control" name="vice_chairperson_contact_number" wire:model.defer="vice_chairperson_contact_number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Vice Chairperson Email</label>
                                    <input type="text" class="form-control" name="vice_chairperson_email" wire:model.defer="vice_chairperson_email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Vice Chairperson Date Appointed</label>
                                    <input type="date" class="form-control" name="vice_chairperson_date_appointed" wire:model.defer="vice_chairperson_date_appointed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr />
                    </div>
                    <div class="card-body">
                        @foreach($secretaries AS $key=>$sec)
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Secretary ID Number</label>
                                    <input type="text" class="form-control" name="secretary_id_number" wire:model.blur="secretaries.{{$key}}.id_number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Secretary First Name</label>
                                    <input type="text" class="form-control" name="secretary_first_name" wire:model.defer="secretaries.{{$key}}.name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Secretary Surname</label>
                                    <input type="text" class="form-control" name="secretary_surname" wire:model.defer="secretaries.{{$key}}.surname">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Secretary Contact Number</label>
                                    <input type="text" class="form-control" name="secretary_contact_number" wire:model.defer="secretaries.{{$key}}.contact_number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Secretary Email</label>
                                    <input type="text" class="form-control" name="secretary_email" wire:model.defer="secretaries.{{$key}}.email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Secretary Date Appointed</label>
                                    <input type="date" class="form-control" name="secretary_date_appointed" wire:model.defer="secretaries.{{$key}}.start_date">
                                </div>
                            </div>
                        </div>
                        <hr />
                        @endforeach
                        @if(count($secretaries) < 2)
                            <a href="#" class="btn btn-secondary" wire:click.prevent="addSecretary">Add Secretary</a>
                        @endif
                    </div>
                    <div>
                        <hr />
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Treasurer ID Number</label>
                                    <input type="text" class="form-control" name="treasurer_id_number" wire:model.blur="treasurer_id_number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Treasurer First Name</label>
                                    <input type="text" class="form-control" name="treasurer_first_name" wire:model.defer="treasurer_first_name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Treasurer Surname</label>
                                    <input type="text" class="form-control" name="treasurer_surname" wire:model.defer="treasurer_surname">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Treasurer Contact Number</label>
                                    <input type="text" class="form-control" name="treasurer_contact_number" wire:model.defer="treasurer_contact_number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Treasurer Email</label>
                                    <input type="text" class="form-control" name="treasurer_email" wire:model.defer="treasurer_email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Treasurer Date Appointed</label>
                                    <input type="date" class="form-control" name="treasurer_date_appointed" wire:model.defer="treasurer_date_appointed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr />
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Technical Manager ID Number</label>
                                    <input type="text" class="form-control" name="technical_manager_id_number" wire:model.defer="technical_manager_id_number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Technical Manager First Name</label>
                                    <input type="text" class="form-control" name="technical_manager_first_name" wire:model.defer="technical_manager_first_name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Technical Manager Surname</label>
                                    <input type="text" class="form-control" name="technical_manager_surname" wire:model.defer="technical_manager_surname">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Technical Manager Contact Number</label>
                                    <input type="text" class="form-control" name="technical_manager_contact_number" wire:model.defer="technical_manager_contact_number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Technical Manager Email</label>
                                    <input type="text" class="form-control" name="technical_manager_email" wire:model.defer="technical_manager_email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr />
                    </div>
                    <div class="card-body">
                        @foreach($additional_members AS $key=>$member)
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Additional Member ID Number</label>
                                    <input type="text" class="form-control" name="additional_member_id_number" wire:model.blur="additional_members.{{ $key }}.id_number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Additional Member First Name</label>
                                    <input type="text" class="form-control" name="additional_member_first_name" wire:model.defer="additional_members.{{ $key }}.name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Additional Member Surname</label>
                                    <input type="text" class="form-control" name="additional_member_surname" wire:model.defer="additional_members.{{ $key }}.surname">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Additional Member Contact Number</label>
                                    <input type="text" class="form-control" name="additional_member_contact_number" wire:model.defer="additional_members.{{ $key }}.contact_number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Additional Member Email</label>
                                    <input type="text" class="form-control" name="additional_member_email" wire:model.defer="additional_members.{{ $key }}.email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Additional Member Date Appointed</label>
                                    <input type="date" class="form-control" name="additional_member_date_appointed" wire:model.defer="additional_members.{{ $key }}.start_date">
                                </div>
                            </div>
                        </div>
                        <hr />
                        @endforeach
                        @if(count($additional_members) < 3)
                            <a href="#" class="btn btn-secondary" wire:click.prevent="addAdditionalMember">Add Additional Member</a>
                        @endif
                    </div>
                    <div>
                        <hr />
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 d-grid">
                                <a href="#" class="btn btn-primary" wire:click.prevent="saveClub">SAVE</a>       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>