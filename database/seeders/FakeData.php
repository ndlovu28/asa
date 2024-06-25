<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker;

use App\Models\Club;
use App\Models\Coach;
use App\Models\Representative;
use App\Models\Athlete;

class FakeData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create();

        $provinces = [
            'Eastern Cape',
            'Free State',
            'Gauteng',
            'Kwazulu Natal',
            'Limpopo',
            'Mpumalanga',
            'Northern Cape',
            'North West',
            'Western Cape',
        ];

        Club::truncate();
        Coach::truncate();
        Representative::truncate();
        Athlete::truncate();

        for($i = 0; $i < 10; $i++){
            $province = $provinces[rand(0,8)];
            $cl = Club::create([
                'name' => $faker->company,
                'registration_number' => $faker->ean13,
                'tel' => $faker->e164PhoneNumber,
                'email' => $faker->companyEmail,
                'province' => $province,
                'address' => $faker->address,
                'logo' => null,
            ]);

            $ch = Coach::create([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'other_names' => $faker->firstName,
                'preferred_name' => $faker->firstName,
                'id_number' => $faker->isbn13,
                'work_contact_number' => $faker->e164PhoneNumber,
                'home_contact_number' => $faker->e164PhoneNumber,
                'mobile_contact_number' => $faker->e164PhoneNumber,
                'email' => $faker->email,
                'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'club_id' => $cl->id,
                'cv' => null,
            ]);

            for($j = 0; $j < 5; $j++){
                $rep = Representative::create([
                    'name' => $faker->firstName,
                    'surname' => $faker->lastName,
                    'other_names' => $faker->firstName,
                    'preferred_name' => $faker->firstName,
                    'id_number' => $faker->isbn13,
                    'work_contact_number' => $faker->e164PhoneNumber,
                    'home_contact_number' => $faker->e164PhoneNumber,
                    'mobile_contact_number' => $faker->e164PhoneNumber,
                    'email' => $faker->email,
                    'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
                ]);

                for($k = 0; $k < 10;$k++){
                    $genders = [
                        'male',
                        'female'
                    ];
                    $races = ['Black', 'White', 'Coloured', 'Indian', 'Asian'];
                    $ath = Athlete::create([
                        'id_number' => $faker->isbn13, 
                        'passport_number' => $faker->ean8, 
                        'passport_date_of_issue' => $faker->date($format = 'Y-m-d', $max = 'now'), 
                        'passport_expiry_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                        'first_name' => $faker->firstName, 
                        'other_names' => $faker->firstName, 
                        'surname' => $faker->lastName, 
                        'preferred_name' => $faker->firstName, 
                        'gender' => $genders[rand(0,1)], 
                        'race' => $races[rand(0,4)], 
                        'weight' => rand(10,200), 
                        'height' => rand(10,200), 
                        'dob' => $faker->date($format = 'Y-m-d', $max = 'now'), 
                        'city_of_birth' => $faker->city, 
                        'country_of_birth' => $faker->country, 
                        'nationality' => $faker->country,
                        'telephone' => $faker->e164PhoneNumber, 
                        'mobile_number' => $faker->e164PhoneNumber, 
                        'fax' => $faker->e164PhoneNumber, 
                        'email' => $faker->email, 
                        'physical_address' => $faker->address, 
                        'postal_address' => $faker->address, 
                        'training_address' => $faker->address,
                        'occupation' => $faker->jobTitle, 
                        'employer_school' => $faker->company, 
                        'employer_school_address' => $faker->address,
                        'mother_name' => $faker->name, 
                        'mother_contact_number' => $faker->e164PhoneNumber, 
                        'mother_email' => $faker->email,
                        'father_name' => $faker->name, 
                        'father_contact_number' => $faker->e164PhoneNumber, 
                        'father_email' => $faker->email,
                        'next_of_kin_name' => $faker->name, 
                        'next_of_kin_contact_number' => $faker->e164PhoneNumber,
                        'medical_aid_name' => $faker->company, 
                        'main_medical_aid_member_name' => $faker->name, 
                        'medical_aid_number' => $faker->isbn10,
                        'family_doctor' => $faker->name, 
                        'family_doctor_contact_number' => $faker->e164PhoneNumber,
                        'license_number' => rand(10,5000), 
                        'province' => $province,
                        'event_1' => rand(200,800),
                        'event_2' => rand(800,2000),
                    ]);
                    $ath->clubs()->attach($cl->id, ['start_date' => $faker->date($format = 'Y-m-d', $max = 'now')]);
                    $ath->coaches()->attach($ch->id, ['start_date' => $faker->date($format = 'Y-m-d', $max = 'now')]);
                    $ath->reps()->attach($rep->id, ['start_date' => $faker->date($format = 'Y-m-d', $max = 'now')]);
                }
            }
        }
    }
}
