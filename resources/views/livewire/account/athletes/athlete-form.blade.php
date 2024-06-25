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
                        <li class="breadcrumb-item active">{{ $view }}</li>
                    </ol>
                    <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i> Create New</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @if($errors->any())
                        <div class="col-md-12 my-3">
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                        </div>
                        @endif
                        <form wire:submit="saveAthlete">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Passport Size Photo</label>
                                        <input type="file" class="form-control" name="profile_image" wire:model.defer="profile_image">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">ID Number</label>
                                        <input type="text" class="form-control" name="id_number" wire:model.live="id_number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Passport Number</label>
                                        <input type="text" class="form-control" name="passport_number" wire:model.live="passport_number">
                                    </div>
                                </div>
                            </div>
                            @if($passport_number)
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Passport Date Of Issue</label>
                                        <input type="date" class="form-control" name="passport_date_of_issue" wire:model.defer="passport_date_of_issue">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Passport Expiry Date</label>
                                        <input type="date" class="form-control" name="passport_expiry_date" wire:model.defer="passport_expiry_date">
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="first_name" wire:model.defer="first_name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Other Names</label>
                                        <input type="text" class="form-control" name="other_names" wire:model.defer="other_names">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Surname</label>
                                        <input type="text" class="form-control" name="surname" wire:model.defer="surname">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Preferred Name</label>
                                        <input type="text" class="form-control" name="preferred_name" wire:model.defer="preferred_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Gender</label>
                                        <select class="form-control" name="gender" wire:model.defer="gender">
                                            <option value="">Select Option</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Race</label>
                                        <input type="text" class="form-control" name="race" wire:model.defer="race">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Weight</label>
                                        <input type="text" class="form-control" name="weight" wire:model.defer="weight">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Height</label>
                                        <input type="text" class="form-control" name="height" wire:model.defer="height">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Date Of Birth</label>
                                        <input type="date" class="form-control" name="dob" wire:model.defer="dob">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">City Of Birth</label>
                                        <input type="text" class="form-control" name="city_of_birth" wire:model.defer="city_of_birth">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Country Of Birth</label>
                                        <input type="text" class="form-control" name="country_of_birth" wire:model.defer="country_of_birth">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Nationality</label>
                                        <input type="text" class="form-control" name="nationality" wire:model.defer="nationality">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">1st. Special Event</label>
                                        <input type="text" class="form-control" name="first_special_event" wire:model.defer="first_special_event">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">2nd. Special Event</label>
                                        <input type="text" class="form-control" name="second_special_event" wire:model.defer="second_special_event">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Name Of Club</label>
                                        <input type="text" class="form-control" name="club" wire:model.defer="club">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">License Number</label>
                                        <input type="text" class="form-control" name="license_number" wire:model.defer="license_number">
                                    </div>
                                </div>
                                <div class="col-md-3">
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
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Club Joining Date</label>
                                        <input type="date" class="form-control" name="date_club_joined" wire:model.defer="date_club_joined">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Telephone</label>
                                        <input type="text" class="form-control" name="telephone" wire:model.defer="telephone">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Mobile Number</label>
                                        <input type="text" class="form-control" name="mobile_number" wire:model.defer="mobile_number">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Fax</label>
                                        <input type="text" class="form-control" name="fax" wire:model.defer="fax">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email" wire:model.defer="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Occupation</label>
                                        <input type="text" class="form-control" name="occupation" wire:model.defer="occupation">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Employer / School</label>
                                        <input type="text" class="form-control" name="employer_school" wire:model.defer="employer_school">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Employer / School Address</label>
                                        <textarea class="form-control" name="employer_school_address" wire:model.defer="employer_school_address"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Mother's Name</label>
                                        <input type="text" class="form-control" name="mother_name" wire:model.defer="mother_name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Mother's Contact Number</label>
                                        <input type="text" class="form-control" name="mother_contact_number" wire:model.defer="mother_contact_number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Mother's Email</label>
                                        <input type="text" class="form-control" name="mother_email" wire:model.defer="mother_email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Father's Name</label>
                                        <input type="text" class="form-control" name="father_name" wire:model.defer="father_name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Father's Contact Number</label>
                                        <input type="text" class="form-control" name="father_contact_number" wire:model.defer="father_contact_number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Father's Email</label>
                                        <input type="text" class="form-control" name="father_email" wire:model.defer="father_email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Next Of Kin Name</label>
                                        <input type="text" class="form-control" name="next_of_kin_name" wire:model.defer="next_of_kin_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Next Of Kin Contact Number</label>
                                        <input type="text" class="form-control" name="next_of_kin_contact_number" wire:model.defer="next_of_kin_contact_number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Physical Address</label>
                                        <textarea class="form-control" name="physical_address" wire:model.defer="physical_address"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Postal Address</label>
                                        <textarea class="form-control" name="postal_address" wire:model.defer="postal_address"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Training Address</label>
                                        <textarea class="form-control" name="training_address" wire:model.defer="training_address"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Coach's ID Number</label>
                                        <input type="text" class="form-control" name="coach_id_number" wire:model.defer="coach_id_number">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Coach's First Name</label>
                                        <input type="text" class="form-control" name="coach_name" wire:model.defer="coach_name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Coach's Surname</label>
                                        <input type="text" class="form-control" name="coach_surname" wire:model.defer="coach_surname">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Date Coach Started</label>
                                        <input type="date" class="form-control" name="date_coach_started" wire:model.defer="date_coach_started">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Coach's Work Contact Number</label>
                                        <input type="text" class="form-control" name="coach_work_contact_number" wire:model.defer="coach_work_contact_number">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Coach's Home Contact Number</label>
                                        <input type="text" class="form-control" name="coach_home_contact_number" wire:model.defer="coach_home_contact_number">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Coach's Mobile Contact Number</label>
                                        <input type="text" class="form-control" name="coach_mobile_contact_number" wire:model.defer="coach_mobile_contact_number">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Coach's Email</label>
                                        <input type="text" class="form-control" name="coach_email" wire:model.defer="coach_email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Representative ID Number</label>
                                        <input type="text" class="form-control" name="representative_id_number" wire:model.defer="representative_id_number">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Representative Name</label>
                                        <input type="text" class="form-control" name="representative_name" wire:model.defer="representative_name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Representative Surname</label>
                                        <input type="text" class="form-control" name="representative_surname" wire:model.defer="representative_surname">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Representative Start Date</label>
                                        <input type="date" class="form-control" name="representative_start_date" wire:model.defer="representative_start_date">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Representative Work Contact Number</label>
                                        <input type="text" class="form-control" name="representative_work_contact_number" wire:model.defer="representative_work_contact_number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Representative Mobile Contact Number</label>
                                        <input type="text" class="form-control" name="representative_mobile_contact_number" wire:model.defer="representative_mobile_contact_number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Representative Email</label>
                                        <input type="text" class="form-control" name="representative_email" wire:model.defer="representative_email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Medical Aid Name</label>
                                        <input type="text" class="form-control" name="medical_aid_name" wire:model.defer="medical_aid_name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Main Medical Aid Member's Name</label>
                                        <input type="text" class="form-control" name="main_medical_aid_member_name" wire:model.defer="main_medical_aid_member_name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Medical Aid Number</label>
                                        <input type="text" class="form-control" name="medical_aid_number" wire:model.defer="medical_aid_number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Family Doctor</label>
                                        <input type="text" class="form-control" name="family_doctor" wire:model.defer="family_doctor">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Family Doctor Contact Number</label>
                                        <input type="text" class="form-control" name="family_doctor_contact_number" wire:model.defer="family_doctor_contact_number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 d-grid">
                                    <a href="#" class="btn btn-primary" wire:click.prevent="saveAthlete">Save</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        Livewire.on('scroll-to-top', (event) => {
            window.scrollTo(0, 0);
        })
        Livewire.on('show-success-message', (event) => {
            Swal.fire(
                "Success!", 
                "Athlete has been saved.", 
                "success"
            );
        });
    </script>
    @endpush
</div>