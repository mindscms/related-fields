<?php

use App\City;
use App\Country;
use App\District;
use Illuminate\Database\Seeder;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country01 = Country::create(['name' => 'Saudi Arabia']);
            $city011 = City::create(['name' => 'Riyadh', 'country_id' => $country01->id]);
                $district0111 = District::create(['name' => 'Al Olyya', 'country_id' => $country01->id, 'city_id' => $city011->id]);
                $district0112 = District::create(['name' => 'Al Shemaysi', 'country_id' => $country01->id, 'city_id' => $city011->id]);
                $district0113 = District::create(['name' => 'Al Malaz', 'country_id' => $country01->id, 'city_id' => $city011->id]);

            $city012 = City::create(['name' => 'Jeddah', 'country_id' => $country01->id]);
                $district0121 = District::create(['name' => 'Al Morjan', 'country_id' => $country01->id, 'city_id' => $city012->id]);
                $district0122 = District::create(['name' => 'Al Khaldeyyah', 'country_id' => $country01->id, 'city_id' => $city012->id]);
                $district0123 = District::create(['name' => 'Al Salamah', 'country_id' => $country01->id, 'city_id' => $city012->id]);

            $city013 = City::create(['name' => 'Dammam', 'country_id' => $country01->id]);
                $district0131 = District::create(['name' => 'Al Fesaleyyah', 'country_id' => $country01->id, 'city_id' => $city013->id]);
                $district0132 = District::create(['name' => 'Al Fakhreyyah', 'country_id' => $country01->id, 'city_id' => $city013->id]);
                $district0133 = District::create(['name' => 'Al Shatea', 'country_id' => $country01->id, 'city_id' => $city013->id]);


        $country02 = Country::create(['name' => 'Egypt']);
            $city021 = City::create(['name' => 'Cairo', 'country_id' => $country02->id]);
                $district0211 = District::create(['name' => 'Al Zamalik', 'country_id' => $country02->id, 'city_id' => $city021->id]);
                $district0212 = District::create(['name' => 'Al Shemaysi', 'country_id' => $country02->id, 'city_id' => $city021->id]);
                $district0213 = District::create(['name' => 'Al Malaz', 'country_id' => $country02->id, 'city_id' => $city021->id]);

            $city022 = City::create(['name' => 'Alexandria', 'country_id' => $country02->id]);
                $district0221 = District::create(['name' => 'Al Alexandria Center', 'country_id' => $country02->id, 'city_id' => $city022->id]);
                $district0222 = District::create(['name' => 'Al Alexandria East', 'country_id' => $country02->id, 'city_id' => $city022->id]);
                $district0223 = District::create(['name' => 'Al Alexandria West', 'country_id' => $country02->id, 'city_id' => $city022->id]);

            $city023 = City::create(['name' => 'Giza', 'country_id' => $country02->id]);
                $district0231 = District::create(['name' => 'Al Doggi', 'country_id' => $country02->id, 'city_id' => $city023->id]);
                $district0232 = District::create(['name' => 'Al Agoozah', 'country_id' => $country02->id, 'city_id' => $city023->id]);
                $district0233 = District::create(['name' => 'Al haram', 'country_id' => $country02->id, 'city_id' => $city023->id]);


        $country03 = Country::create(['name' => 'Palestine']);
            $city031 = City::create(['name' => 'Al Quds', 'country_id' => $country03->id]);
                $district0311 = District::create(['name' => 'Al Islami', 'country_id' => $country02->id, 'city_id' => $city031->id]);
                $district0312 = District::create(['name' => 'Al Nasara', 'country_id' => $country02->id, 'city_id' => $city031->id]);
                $district0313 = District::create(['name' => 'Al Arman', 'country_id' => $country02->id, 'city_id' => $city031->id]);

            $city032 = City::create(['name' => 'Gaza', 'country_id' => $country03->id]);
                $district0321 = District::create(['name' => 'Al Remal', 'country_id' => $country02->id, 'city_id' => $city032->id]);
                $district0322 = District::create(['name' => 'Tal Alhawa', 'country_id' => $country02->id, 'city_id' => $city032->id]);
                $district0323 = District::create(['name' => 'Al Nasr', 'country_id' => $country02->id, 'city_id' => $city032->id]);

            $city033 = City::create(['name' => 'Nablus', 'country_id' => $country03->id]);
                $district0331 = District::create(['name' => 'Al Habalah', 'country_id' => $country02->id, 'city_id' => $city033->id]);
                $district0332 = District::create(['name' => 'Tal Aqabah', 'country_id' => $country02->id, 'city_id' => $city033->id]);
                $district0333 = District::create(['name' => 'Al Gharb', 'country_id' => $country02->id, 'city_id' => $city033->id]);


    }
}
