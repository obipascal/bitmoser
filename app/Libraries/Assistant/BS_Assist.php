<?php
namespace App\Libraries\Assistant;
//Imports 
use CodeIgniter\I18n\Time;
class BS_Assist
{

    /**
     * A list of all the service offered by BS and rendered by sevitors.
     *
     * @var SERVICE_lIST BS Service listing
     */
    private const SERVICE_LIST = [
        'Agricultural Services' => [
            'Irrigation Service',
            'Irrigation Design',
            'Turf Services',
            'Nursery Design',
            'Tree Service',
            'Aquarium Maintenance',
            'Watering Service',
            'Pest Control Service',
            'Storage Service',
            'Farm Labour Service',
            'Florist',
            'Green Consultant',
            'Machinery Operation',
            'Equipment and Machinery Rental',
            'Agricultural Research Service',
            'Poultry Management Service',
            'Fishry Management Service',
            'Cattle Management Service',
            'Agricultural Processing Service',
            'Drainage System Construction Service',
            'Planting and Harvesting Service',
            'Horticulture',
            'Soil Preparation Service',
            'Crop Service',
            'Farm Labour Conractor',
            'Landscape Counselling and Planning',
            'Lawn and Garden Service',
            'Ornamental Shrub Service',
            'Veterinary Service for Livestock',
            'Veterinary Service for Animal Specialties',
            'Crop Planting, Cultivating and Protecting',
            'Farm Produce Delivery',
            'Customer Service Agent',
            'Machinery Repairs and Maintenance Service'
        ],

        'Animal Care' => [
            'Pet Sitting',
            'Dog Walking',
            'Mobile Veterinary Service',
            'Mobile Pet Grooming'
        ],

        'Arts & Crafts' => [
            'Basket weaving',
            'Book-binding',
            'Cabinet Making',
            'Collage',
            'Decorative Art',
            'Enamelling',
            'Fine Art',
            'Floral Design',
            'Glass Beadmaking',
            'Jewellery-making',
            'Lace Making',
            'Leatherwork Metalwork',
            'Model-making',
            'Painting',
            'Paper Craft',
            'Weaving',
            'Art Restoration Service',
            'Art Buying Consultant',
            'Handmade Crafter'
        ],

        'Automobile Maintenance and Repair Services' => [
            'Mobile Car Mechanic',
            'Auto towing',
            'Detailing Service',
            'Paintless dent repair',
            'Car Spraying',
            'Upholstery repair',
            'Mobile Car-wash and Detailing',
            'Vehicle Inspection',
            'Windshield Inspection ',
            'Car Resale',
            'Used Car Leasing'
        ],

        'B2B Legal Services' => [
            'Legal Process Service',
            'Paralegal',
            'Private Investigating',
            'Contract Drafting and Review'
        ],

        'Beauty and Lifestyle' => [
            'Cosmetic Service',
            'Female Fashion Design and Tailoring',
            'Female In-Home Hairstyling',
            'Female Modelling',
            'Fashion Consulting',
            'Makeup Consulting',
            'Male Fashion Design and Tailoring',
            'Male In-Home Hairstyling',
            'Male Modelling',
            'Manicure',
            'Pedicure',
            'Personal Wardrobe Styling'
        ],

        'Building and Construction Services' => [
            'Building Contract Service',
            'Building Maintenance Service',
            'Industrial Building Contract Service',
            'Industrial Plant Maintenance Service',
            'Demolition and Wrecking Contractor',
            'Construction Cleanup Service'
        ],

        'Business Services' => [
            'Branding',
            'Business Consulting',
            'Business Plan Consulting',
            'Career Advice',
            'Data Entry',
            'Financial Consulting',
            'Flyer Distribution',
            'Lead Generation',
            'Legal Consulting',
            'Mail orders',
            'Marketing',
            'Market Research',
            'Sales Reprensentatives',
            'Product Research',
            'Virtual Assistant',
            'Executive Headhunting',
            'Language Translation',
            'Project Managing',
            'Bookkeeping',
            'Accounting',
            'Payroll Processing',
            'Financial Auditing',
            'Office Support Service',
            'Data Analytics',
            'Messenger Service',
            'Online Course Consultance',
            'Freelance Research',
            'Online Business Coaching',
            'Customer Service',
            'Live Chat Customer Support Service',
            'Business Travel Management',
            'Specialized Staffing',
            'Office Relocation',
            'Office Plant Maintenance',
            'Human Resource Service',
            'outplacement Service',
            'Personal Assistant'
        ],

        'Carpentry Services' => [
            'Commercial Contractors',
            'Residencial Contractors'
        ],

        'Catering Service' => [
            'Wedding',
            'Corporate ',
            'Social Events',
            'Welfare',
            'Leisure',
            'Full Service',
            'Club',
            'Party',
            'Personal Chef'
        ],

        'Children Services' => [
            'Child Care Centres',
            'Nanny Placement',
            'Tutoring',
            'Children Party Planning',
            'Children Fitness',
            'Children Transportation Service',
            'Baby Proofing',
            'Computer Training For Kids',
            'Lactation Consultant',
            'Overnight Doula Service',
            'Private Music Teacher',
            'Children Entertainment Service'
        ],

        'Cleaning Services' => [
            'Bin Disposal Service',
            'Janitorial Service',
            'General home cleaning',
            'Offices and Buildings',
            'Private Jet Service',
            'Swimming Pool Cleaning ',
            'Tile and Specialty Cleaning',
            'Windows Cleaning',
            'Gutter Cleaning'
        ],

        'Clothing and Textile' => [
            'Formal Wear Rentals',
            'Cloth Diaper Service',
            'Dyeing Service',
            'Alteration/Seamstress'
        ],

        'Coaching and Management' => [
            'Personal/Life',
            'Presentation/Communication Skills',
            'Health ',
            'Relationship',
            'Marriage',
            'Business',
            'Nutrition and Diet',
            'Cycling',
            'Work',
            'Leadership',
            'Career',
            'Executive',
            'Ststemic',
            'Team',
            'Football',
            'Basketball',
            'Handball',
            'Hockey',
            'Volleyball',
            'Swimming',
            'Sprinting',
            'Baseball',
            'Rugby'
        ],

        'Decoration Services' => [
            'Birthday',
            'Event',
            'Home Interior',
            'Office Interior',
            ' Party',
            'Room',
            'Wedding'
        ],

        'Delivery Service' => [
            'Home Delivery Service',
            'Office Delivery Service'
        ],

        'Digital Marketing' => [
            'Content Marketing',
            'Crowdfunding',
            'Domain Research',
            'E-Commerce Marketing',
            'Email Marketing',
            'Influencer Marketing',
            'Local Listings',
            'Marketing Strategy',
            'Podcast Marketing',
            'Public Relations',
            'SEM',
            'SEO',
            'Social Media Marketing',
            'Surveys',
            'Video Marketing',
            'Web Analytics'
        ],

        'Education' => [
            'Adult Education',
            'Cetified tutors',
            'Graduate/undergraduate tutoring',
            'Private tutoring',
            'Student tutoring',
            'Application Consultaning',
            'Esssay Editor',
            'Home School Teacher',
            'Online English Tutoring',
            'Test Prep Coaching',
            'Used Boat Sales',
            'Arbitration Service',
            'Personal Computer Training',
            'Audiobook Producer/Distributor'
        ],

        'Elder Care Service' => [
            'In-Home Physical Therapy',
            'Private Nursing Service'
        ],

        'Event Services' => [
            'Catering',
            'Comedy',
            'Conference and venue sourcing',
            'Décor',
            'Event Dj',
            'Event MC',
            'Entertainer',
            'Event Designer',
            'Event Manager',
            'Event Coordinator',
            'Hire an event management team',
            'Hire an event planning team',
            'Hire instrument',
            'Hotel and Suites',
            'Santa Claus',
            'Send your invitations',
            'Show Producer',
            'Fundraising Event Coordinating',
            'Trade Show Production',
            'Wedding Planning',
            'Conference Marketing Management',
            'Event Photography',
            'Event Videography',
            'Lighting Designing',
            'Live Video Producer',
            'Bartending Service',
            'Custom Baking',
            'Photo Booth Rental',
            'Reunion Coordinator',
            'Valet Parking Service',
            'Event Furniture and Equipment Rental',
            'Bridal Consultant'
        ],

        'Financial Services' => [
            'Accounting',
            'Advisory',
            'Banking',
            'Book Keeping',
            'Electronic Money Transfer',
            'Insurance',
            'Financial Planning',
            'Liquidation Service'
        ],

        'Fitness and Gym' => [
            'Fitness Centers',
            'Fitness Consultant',
            'Gym Instructor',
            'Gym Maintenance',
            'Personal Coaching',
            'Fitness Equipment Rental'
        ],

        'Food and Nutrition' => [
            'Dietician',
            'Nutritionist',
            'Personal Chef Service',
            'Mobile Fastfood',
            'Catering'
        ],

        'Gardening' => [
            'Garden Decoration ',
            'Garden Maintenance',
            'Garden Solutions',
            'Landscape Design',
            'Lawn Mowing ',
            'Water and soil sample analysis'
        ],

        'Graphics and Designs' => [
            'Architecture & Interior Design',
            'Brand Style Guides',
            'Business Cards & Stationery',
            'Brochure Design',
            'Poster Design',
            'Flyer Design',
            'Book & Album Covers',
            'Podcast Cover Art',
            'Packaging Design',
            'Storyboards',
            'Web & Mobile Design',
            'Social Media Design',
            'Postcard Design',
            'Catalog Design',
            'Menu Design',
            'Invitation Design',
            'Portraits & Caricatures',
            'Cartoons & Comics',
            'Tattoo Design',
            'Banner Ads',
            'Photoshop Editing',
            'Landscape Design',
            'Logo Design',
            'Building Information Modeling',
            'Character Modeling',
            '3D Models & Product Design',
            'T-Shirts & Merchandise',
            'Presentation Design',
            'Infographic Design',
            'Car Wraps',
            'Vector Tracing',
            'Twitch Store',
            'Other'
        ],

        'Health Services' => [
            'Mental health care',
            'Dental care',
            'Laboratory and diagnostic care',
            'Substance abuse treatment',
            'Preventative care',
            'Physical and occupational therapy',
            'Nutritional support',
            'Pharmaceutical care',
            'Personal Care',
            'Homemaker/Basic asistance care',
            'Conpanionship',
            'Volunteer Care',
            'Nutrition Support',
            'Labrating and X-ray imaging',
            'Nutrition Support',
            'Home Delivery',
            'Transportation',
            'Doctor Care',
            'Nursing Care',
            'Medical Social Service',
            'Physical and Occupational',
            'Speech Therapy',
            'Find a Docor',
            'Treatment Centers'
        ],

        'Home Maintenance and Repair Services' => [
            'Handyman Service',
            'Pool Servicing and Miantenance',
            'Lawn Care',
            'Locksmith Service',
            'Home Entertainment Installation',
            'Home Inspection ',
            'Interior Painting ',
            'Wallpaper Installation ',
            'Power Washing',
            'Air Conditioning Installation and Maintenance',
            'Plumbing Service',
            'Appliance Service',
            'Porcelain Repair',
            'Home Maintenance Equipment and Rental',
            'Solar Installation and Maintenance',
            'Packing and Unpacking',
            'Appartment Prepping',
            'Debt Collection',
            'House Sitting',
            'Carpentry and Furniture Making',
            'Aquarium Maitenance'
        ],

        'IT Services' => [
            'Software Development',
            'Web Development',
            'Cloud Computing',
            'Data Mining',
            'Cyber Security',
            'Mobile Apps',
            'Desktop Applications',
            'User Testing',
            'Data Analysis and Reports',
            'Game Development',
            'Databases',
            'Blockchain',
            'IT consulting',
            'Personal Computer Training',
            'Computer Repair',
            'Smart Phone Repair',
            'UI/UX Design'
        ],

        'Legal Services' => [
            'Business',
            'Family',
            'Public Defender',
            'Personal',
            'Criminal',
            'Personal Injury Attorneys',
            'Legal Aid Clinics'
        ],

        'Lifestyle' => [
            'Diet',
            'Relationship Advice',
            'Spiritual & Healing',
            'Marriage Councelling',
            'Sex Education'
        ],

        'Music' => [
            'Violinist',
            'Pianist',
            'Drumset Player',
            'Saxophonists',
            'Keyboardists',
            'Guitarist',
            'Local/Traditional Drummer',
            'Band crews',
            'Voice Over',
            'Mixing & Mastering',
            'Producers',
            'Composers',
            'Singers & Vocalists',
            'Session Musicians',
            'Songwriters',
            'Podcast Editing',
            'Audiobook Production',
            'Dialogue Editing',
            'Music Transcription',
            'Vocal Tuning',
            'Jingles & Drops',
            'Sound Effects',
            'Music Instrument Leasing'
        ],

        'Real Estate' => [
            'Broker',
            'House Agent'
        ],

        'Run an Errand' => [
            'Delivering meals and snacks',
            'Sendind and and receiving Packages',
            'Office supplies and shopping',
            'Venue preparation',
            'Grocery shopping',
            'Laundry',
            'Packing and unpacking',
            'Pick and delivery of vehicle for car wash',
            'Dry-cleaning pickup and drop-off'
        ],

        'Sales and Marketing' => [
            'Podcast Producer',
            'Public Relations Consulting',
            'Brand Photography',
            'Affiliate Sales and Marketing Consulting',
            'Content Marketing Strategics',
            'Facebook Ads Strategics',
            'Instagram Marketing Srategics',
            'Content Writing',
            'Social Media Managing',
            'SEO Strategics',
            'Video Brochure',
            'Seminar Promotion',
            'Sales Lead Generating',
            'Sales Tranning',
            'Welcoming Service',
            'Map Publishing and Distribution',
            'Domain Name Trading',
            'Sales Representative'
        ],

        'Security Services' => [
            'Private security Guard',
            'Public Security',
            'Special event security/venue control',
            'Security consultancy'
        ],

        'Sports' => [
            'Football',
            'Basketball',
            'Handball',
            'Hockey',
            'Volleyball',
            'Swimming',
            'Sprinting',
            'Baseball',
            'Rugby'
        ],

        'Transportation' => [
            'Taxi',
            'Bike rentals',
            'Limosine service',
            'Bicycle rentals',
            'Tricycle rentals',
            'Livestock transportation',
            'Marine shipping',
            'Boat service',
            'Pet Taxi Service',
            'Used Car Leasing',
            'Hauling Service',
            'Drone Service'
        ],

        'Travel and Tourism' => [
            'Rental Property Management',
            'Local Tour Guidance',
            'Travel Agency',
            'Corporate Retreat Coordinating',
            'Cruise Booling Agency',
            'Travel Conceirge Service',
            'Ski/Snowboarding Instructor',
            'Beach Equipment Rentals',
            'Boat Maitenance and Cleaning',
            'Boat Operation Instructor',
            'Jet Ski Rentals'
        ],

        'Wellness' => [
            'On-site fitness centers',
            'Smoking Cessation Programs',
            'Spa Treatment',
            'Employee Assistance',
            'Yoga Lessons',
            'Stress Therapy',
            'Meditation Intructor',
            'In-Home Masseuse',
            'Accupunctuting',
            'Massage Therapy'
        ],

        'Others' => [
            'Personal Shopper',
            'Videotaping Service',
            'Printing Service',
            'Moving Service',
            'Bicycle Repair',
            'Scrapbooking',
            'Furniture Making',
            'Carpentry and Furniture Making',
            'Damage Restoration Service',
            'Mobile Billboard Service',
            'Jewelry, Clock and Watch Repairs ',
            'Electronics Repairs',
            'Firewood Service',
            'Printing Service',
            '3D Printing',
            'ink and Toner Cartridge Refilling'
        ]
    ];

    /**
     * Typography instance
     *
     * @var instance
     */
    protected $TYPO;

    

    protected $BSAPPS = [
        'main' => 'http://localhost/bitmoser/main/public/',
        'clients' => 'http://localhost/bitmoser/clients/public/',
        'users' => 'http://localhost/bitmoser/users/public/'
    ];

    /**
     * Instanciate the instance of the libraries, models entities and helpers
     */
    public function __construct()
    {
        $this->TYPO = \Config\Services::typography();
    }

    /**
     * Return the status of a fuction execution
     *
     * @param boolean $s
     *            Success State
     * @param boolean $e
     *            Error State
     * @param mixed $r
     *            Response
     * @return object
     */
    private function status(bool $s, bool $e, $r)
    {
        return (new class($s, $e, $r) {

            private $SUCCESS = false;

            private $ERROR = false;

            private $RESPONSE = null;

            public function __construct($s, $e, $r)
            {
                $this->SUCCESS = $s;
                $this->ERROR = $e;
                $this->RESPONSE = $r;
            }

            /**
             * Get the state of the func execution.
             * true: means there was an error. false: means success.
             *
             * @return bool
             */
            public function error()
            {
                return $this->ERROR;
            }

            /**
             * Get the state of the func execution.
             * True: means succes; False: means Error.
             *
             * @return bool
             */
            public function success()
            {
                return $this->SUCCESS;
            }

            /**
             * Get the function execution response message/data after a successful execuation or Error.
             *
             * @return mixed
             */
            public function response()
            {
                return $this->RESPONSE;
            }
        });
    }

    /**
     * Check if variable is true
     *
     * @param boolean $var
     * @return bool
     */
    public function bs_assist_CheckIsTrue(bool $var)
    {
        if (! empty($var)) {
            if ($var === true) {
                return $this->status(true, false, true);
            } else {
                return $this->status(false, true, false);
            }
        } else {
            return $this->status(false, true, 'Argument supplied  @' . __METHOD__ . ' cannot be empty/null.');
        }
    }

    /**
     * Check if variable is false
     *
     * @param boolean $var
     * @return bool
     */
    public function bs_assist_CheckIsFalse(bool $var)
    {
        if (! empty($var)) {
            if ($var === false) {
                return $this->status(true, false, true);
            } else {
                return $this->status(false, true, false);
            }
        } else {
            return $this->status(false, true, 'Argument supplied  @' . __METHOD__ . ' cannot be empty/null.');
        }
    }

    public function bs_assist_GetRendererList()
    {
        // vars
        $options = null;

        // loop and push the category and types to vars
        foreach (self::SERVICE_LIST as $cate => $type) {
            // loop and retrieve the cate and type
            foreach ($type as $ty) {
                $options .= '<option value="' . $cate . ': ' . $ty . '"></option>';
            }
        }

        return $options;
    }

    public function bs_assist_GetServiceList()
    {
        $tab = 0;

        $list_group = null;

        foreach (self::SERVICE_LIST as $category => $items) {
            $tab += 1;
            $listing = null;
            foreach ($items as $item) {
                $listing .= '<a class="btn btn-light text-left" role="button" href="' . base_url() . '/services/request/servitors?scate=' . $category . '&stype=' . $item . '">' . $item . '</a>';
            }

            $list_group .= '
                <div class="card">
                        <div class="card-header" role="tab" style="background-color: transparent;">
                            <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false"
                                    aria-controls="accordion-1 .item-' . $tab . '" href="div#accordion-1 .item-' . $tab . '"
                                    style="font-size: 15px;font-weight: 700;color: rgb(70,74,108);">' . $category . '</a>
                            </h5>
                        </div>
                        <div class="collapse item-' . $tab . '" role="tabpanel" data-parent="#accordion-1">
                            <div class="card-body">
                                <div role="group"
                                    class="btn-group-vertical btn-group-lg border-light shadow-lg d-flex bs-side-items">
                                    
                                    ' . $listing . '
                                </div>
    
                            </div>
                        </div>
                </div>';
        }
        // return the list
        if (! is_null($list_group)) {
            return $list_group;
        } else {
            return null;
        }
    }

    public function bs_getRendarLoginForm()
    {
        return view('auth/auth_login', [
            'title' => '.::Login Randar Account'
        ]);
    }

    /**
     * Parse a date time string to be used by Time::pares()
     *
     * @return string
     */
    public function bs_parseDateTime()
    {
        $now = Time::parse('Africa/Lagos');
        $date = $now->toLocalizedString('MMM d, yyyy');
        $time = date('H:i:sa');

        $dateTime = Time::parse($date .' '. $time, 'Africa/Lagos');

        return $dateTime;
    }

    /**
     * Get a well date time elapse formatted
     *
     * @param string $dateTime
     * @return string
     */
    public function bs_getTimeElapse(string $dateTime)
    {
        if(!empty($dateTime))
        {
            $date = Time::parse($dateTime);

            //retrieve the: Year, Month, Day, Hour, Minute, Second
            $yr = $date->getYear();
            $mon = $date->getMonth();
            $dy = $date->getDay();
            $hr = $date->getHour();
            $min = $date->getMinute();
            $sec = $date->getSecond();

            return ($yr ."Years, " . $mon . "Months, " . $dy . "Days, ". $hr . "Hours, ". $min ."Minutes, " . $sec . "Seconds");
        }
        else
        {
            return null;
        }
    }


}
