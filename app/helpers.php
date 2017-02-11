<?php 

use App\CatRecord;
use App\DogRecord;

function swapSpecies($pet) {
    // Do some converting if applicable
    if ($pet->species == 'Cat') {
        $pet->species = 'Dog';
        DogRecord::create(['pet_id' => $pet->id]);
    }

    $pet->species = 'Cat';
    CatRecord::create(['pet_id' => $pet->id]);

    $pet->save();
}

function UsStates() {
    return [
        'AL'=>'Alabama',
        'AK'=>'Alaska',
        'AS'=>'American Samoa',
        'AZ'=>'Arizona',
        'AR'=>'Arkansas',
        'CA'=>'California',
        'CO'=>'Colorado',
        'CT'=>'Connecticut',
        'DE'=>'Delaware',
        'DC'=>'District Of Columbia',
        'FM'=>'Federated States Of Micronesia',
        'FL'=>'Florida',
        'GA'=>'Georgia',
        'GU'=>'Guam Gu',
        'HI'=>'Hawaii',
        'ID'=>'Idaho',
        'IL'=>'Illinois',
        'IN'=>'Indiana',
        'IA'=>'Iowa',
        'KS'=>'Kansas',
        'KY'=>'Kentucky',
        'LA'=>'Louisiana',
        'ME'=>'Maine',
        'MH'=>'Marshall Islands',
        'MD'=>'Maryland',
        'MA'=>'Massachusetts',
        'MI'=>'Michigan',
        'MN'=>'Minnesota',
        'MS'=>'Mississippi',
        'MO'=>'Missouri',
        'MT'=>'Montana',
        'NE'=>'Nebraska',
        'NV'=>'Nevada',
        'NH'=>'New Hampshire',
        'NJ'=>'New Jersey',
        'NM'=>'New Mexico',
        'NY'=>'New York',
        'NC'=>'North Carolina',
        'ND'=>'North Dakota',
        'MP'=>'Northern Mariana Islands',
        'OH'=>'Ohio',
        'OK'=>'Oklahoma',
        'OR'=>'Oregon',
        'PW'=>'Palau',
        'PA'=>'Pennsylvania',
        'PR'=>'Puerto Rico',
        'RI'=>'Rhode Island',
        'SC'=>'South Carolina',
        'SD'=>'South Dakota',
        'TN'=>'Tennessee',
        'TX'=>'Texas',
        'UT'=>'Utah',
        'VT'=>'Vermont',
        'VI'=>'Virgin Islands',
        'VA'=>'Virginia',
        'WA'=>'Washington',
        'WV'=>'West Virginia',
        'WI'=>'Wisconsin',
        'WY'=>'Wyoming',
        'AE'=>'Armed Forces Africa \ Canada \ Europe \ Middle East',
        'AA'=>'Armed Forces America (except Canada)',
        'AP'=>'Armed Forces Pacific'
    ];
}