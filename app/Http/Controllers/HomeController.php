<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\InquiryMail;
use App\Mail\VisitAccepted;
use App\Models\AmenitiesModel;
use App\Models\AwardsModel;
use App\Models\CorporateModel;
use App\Models\DirectorModel;
use App\Models\ForLeaseModel;
use App\Models\ForSaleModel;
use App\Models\HotelModel;
use App\Models\ResidencesModel;
use App\Models\SaleModel;
use App\Models\TownshipModel;
use App\Models\VisitModel;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Symfony\Contracts\Service\Attribute\Required;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('Homepage.properties.forsale');
    }
    public function investors()
    {
        return view('Homepage.investors');
    }
    public function career()
    {
        return view('Homepage.career');
    }
    public function sustainability()
    {
        return view('Homepage.sustainability');
    }
    public function township()
    {
        return view('Homepage.township');
    }
    public function metro_manila()
    {
        $township = TownshipModel::where('division', 'Metro Manila')->get();
        return view('Homepage.township.metro-manila', compact('township'));
    }

    public function luzon()
    {
        $township = TownshipModel::where('division', 'Luzon')->get();
        return view('Homepage.township.luzon', compact('township'));
    }
    public function visayas()
    {
        $township = TownshipModel::where('division', 'Visayas')->get();
        return view('Homepage.township.visayas', compact('township'));
    }
    public function mindanao()
    {
        $township = TownshipModel::where('division', 'Mindanao')->get();
        return view('Homepage.township.mindanao', compact('township'));
    }

    public function residence()
    {
        return view('Homepage.residence');
    }

    public function preselling()
    {
        $township  = ResidencesModel::where('status', 'Pre-Selling')->get();
        return view('Homepage.residences.preselling', compact('township'));
    }

    public function occupancy()
    {
        $township  = ResidencesModel::where('status', 'rfo')->get();
        return view('Homepage.residences.occupancy', compact('township'));
    }

    public function hotel_filter()
    {
        $hotel  = HotelModel::all();
        return view('Homepage.hotel.hotel_filter', compact('hotel'));
    }

    public function belmont_hotel()
    {
        $hotel  = HotelModel::where('hotel_brand', 'Belmont Hotels')->get();
        return view('Homepage.hotel.belmont', compact('hotel'));
    }
    public function richmonde_hotel()
    {
        $hotel  = HotelModel::where('hotel_brand', 'Richmonde Hotels')->get();
        return view('Homepage.hotel.richmonde', compact('hotel'));
    }
    public function savoy_hotel()
    {
        $hotel  = HotelModel::where('hotel_brand', 'Savoy Hotels')->get();
        return view('Homepage.hotel.savoy', compact('hotel'));
    }
    public function other_brands()
    {
        $hotel  = HotelModel::where('hotel_brand', 'Other Homegrown Brands')->get();
        return view('Homepage.hotel.other_brands', compact('hotel'));
    }

    public function offices()
    {
        return view('Homepage.offices');
    }

    public function hotel()
    {
        return view('Homepage.hotel');
    }

    public function lifestyle_mall()
    {
        return view('Homepage.lifestyle_malls');
    }
    public function customer()
    {
        return view('Homepage.customer');
    }
    public function corporate()
    {
        return view('Homepage.corporate.corporate');
    }
    public function manual()
    {
        $corpo  = CorporateModel::where('section', 'Manual on Corporate Governance')->get();
        return view('Homepage.corporate.manual', compact('corpo'));
    }
    public function integrated()
    {
        $integ  = CorporateModel::where('section', 'Integrated ACGR')->get();
        return view('Homepage.corporate.integrated', compact('integ'));
    }
    public function annual()
    {
        $report  = CorporateModel::where('section', 'Annual Corporate Governance Report')->get();
        return view('Homepage.corporate.annual', compact('report'));
    }
    public function asean()
    {
        return view('Homepage.corporate.asean');
    }
    public function rights()
    {
        return view('Homepage.corporate.rights');
    }
    public function equitable()
    {
        return view('Homepage.corporate.equitable');
    }
    public function role()
    {
        return view('Homepage.corporate.role');
    }
    public function disclosure()
    {
        return view('Homepage.corporate.disclosure');
    }
    public function board()
    {
        $board  = DirectorModel::all();
        return view('Homepage.corporate.board', compact('board'));
    }

    public function charter()
    {
        $report  = CorporateModel::where('section', 'Board Committe Charter')->get();
        return view('Homepage.corporate.charter', compact('report'));
    }
    public function boardcommittes()
    {
        return view('Homepage.corporate.boardcommittes');
    }
    public function boardprocess()
    {
        return view('Homepage.corporate.board_process');
    }
    public function training()
    {
        return view('Homepage.corporate.training');
    }
    public function enterprise()
    {
        return view('Homepage.corporate.enterprise');
    }
    public function policy()
    {
        return view('Homepage.corporate.policy');
    }
    public function insider()
    {
        return view('Homepage.corporate.insider');
    }
    public function gift()
    {
        return view('Homepage.corporate.gift');
    }
    public function external()
    {
        return view('Homepage.corporate.external');
    }
    public function summary()
    {
        return view('Homepage.corporate.summary');
    }
    public function whistleblowing()
    {
        return view('Homepage.corporate.whistleblowing');
    }
    public function company()
    {
        return view('Homepage.company.company');
    }
    public function vmo()
    {
        return view('Homepage.company.vmo');
    }
    public function director()
    {
        $board  = DirectorModel::all();
        return view('Homepage.company.director', compact('board'));
    }
    public function management()
    {
        return view('Homepage.company.management');
    }
    public function chart()
    {
        return view('Homepage.company.chart');
    }
    public function conglorate()
    {
        return view('Homepage.company.conglorate');
    }
    public function shareholding()
    {
        return view('Homepage.company.shareholding');
    }
    public function article()
    {
        return view('Homepage.company.article');
    }
    public function incorporation()
    {
        $report  = CorporateModel::where('section', 'Article')->get();
        return view('Homepage.company.incorporation', compact('report'));
    }
    public function bylaws()
    {
        $report  = CorporateModel::where('section', 'By-Laws')->get();
        return view('Homepage.company.bylaws', compact('report'));
    }
    public function business()
    {
        return view('Homepage.corporate.business');
    }
    public function info()
    {
        $report  = CorporateModel::where('section', 'GIS')->get();
        return view('Homepage.disclosure.info_sheet', compact('report'));
    }
    public function information()
    {
        $report  = CorporateModel::where('section', 'Information Statements')->get();
        return view('Homepage.disclosure.information', compact('report'));
    }
    public function statement_change()
    {
        $report  = CorporateModel::where('section', 'Statement of Changes')->get();
        return view('Homepage.disclosure.statement_changes.statement_change', compact('report'));
    }
    public function prospectus()
    {
        $report  = CorporateModel::where('section', 'Prospectus')->get();
        return view('Homepage.disclosure.prospectus', compact('report'));
    }

    public function annual_report()
    {
        $report  = CorporateModel::where('section', 'Annual Report')->get();
        return view('Homepage.disclosure.annual_report', compact('report'));
    }
    public function quarterly_report()
    {
        $report  = CorporateModel::where('section', 'Quarterly Report')->get();
        return view('Homepage.disclosure.quarterly_report', compact('report'));
    }
    public function current_report()
    {
        $report  = CorporateModel::where('section', 'Current Report')->get();
        return view('Homepage.disclosure.current_report', compact('report'));
    }
    public function minutes()
    {
        $report  = CorporateModel::where('section', 'Minutes of the Meeting')->get();
        return view('Homepage.disclosure.minutes', compact('report'));
    }

    public function notice()
    {
        $report  = CorporateModel::where('section', 'Notice')->get();
        return view('Homepage.disclosure.notice', compact('report'));
    }
    public function clarification()
    {
        $report  = CorporateModel::where('section', 'PSE Clarification on News Articles')->get();
        return view('Homepage.disclosure.clarification', compact('report'));
    }
    public function ownership()
    {
        $report  = CorporateModel::where('section', 'Public Ownership Reports')->get();
        return view('Homepage.disclosure.ownership', compact('report'));
    }


    // Investor Relations
    public function investor_relations()
    {

        return view('Homepage.investors.investor_relations');
    }
    public function assistance()
    {
        return view('Homepage.investors.assistance');
    }
    public function share_info()
    {
        $report  = CorporateModel::where('section', 'Share Information')->get();
        return view('Homepage.investors.share', compact('report'));
    }
    public function presentation()
    {
        $report  = CorporateModel::where('section', 'Presentation')->get();
        return view('Homepage.investors.presentation', compact('report'));
    }


    public function awards()
    {
        $awrds = new AwardsModel();
        $awards = [
            'best' => $awrds->where('type', 'Best Awards')->get(),
            'international' => $awrds->where('type', 'International Awards')->get(),
            'philippines' => $awrds->where('type', 'Philippines Awards')->get(),
        ];

        return view('Homepage.awards.awards', compact('awards'));
    }

    public function view_documents($id)
    {
        $corpo = CorporateModel::find($id);
        return view('Homepage.corporate.view_documents', compact('corpo'));
    }

    public function for_sale()
    {
        $properties = SaleModel::All();

        return view('Homepage.properties.forsale', compact('properties'));
    }
    public function for_lease()
    {
       $property = ForLeaseModel::where('status', 'Published')->get();
    
        // Prepare properties data with the first image
        $properties = $property->map(function ($proper) {
            $firstImage = '';
            if (!empty($proper->image)) {
                $imageFilenames = explode(',', $proper->image);
                $firstImage = $imageFilenames[0]; // Get the first image filename
            }
            $proper->first_image = $firstImage;
            return $proper;
        });
    
        return view('Homepage.properties.forlease', compact('properties'));
    }

    public function view_properties($id)
    {
        $proper = SaleModel::join('forsale_details', 'sale.id', '=', 'forsale_details.sale_id')->where('sale.id', $id)->get()[0];
        $amenity_ids = explode(',', $proper['amenity_id']);
       
        
        $amenities = [];
        foreach ($amenity_ids as $amenity_id) {
            $propers = AmenitiesModel::where('id', $amenity_id)->get()[0];
            array_push($amenities, $propers);
        }
        
       
        
        return view('Homepage.view_properties', compact('proper', 'amenities'));
    }
    // public function view_propertie_lease($id)
    // {
    //     $proper = ForLeaseModel::where('id', $id)->get()[0];  
    //     $image_ids = explode(',', $proper['image']);
         
    //      $img = [];
    //     foreach ($image_ids as $img_id) {
    //         $propers = ForLeaseModel::where('id', $img_id)->get()[0];
    //         array_push($img, $propers);
    //     }
    //     return view('Homepage.view_lease', compact('proper'));
    // }
    
    public function view_propertie_lease($id)
        {
            // Get the property record by ID
            $proper = ForLeaseModel::findOrFail($id);
        
            // Split the image filenames and pass them to the view
            $image_filenames = explode(',', $proper->image);
        
            return view('Homepage.view_lease', compact('proper', 'image_filenames'));
        }

    // public function view_properties($id)
    // {
    //     // Fetch sale data
    //     $proper = SaleModel::join('forsale_details', 'sale.id', '=', 'forsale_details.sale_id')
    //         ->where('sale.id', $id)
    //         ->get()[0];

    //     if (!$proper) {
    //         // Handle case where property is not found
    //         abort(404);
    //     }

    //     // Split amenity IDs
    //     $amenity_ids = explode(',', $proper->amenity_id);

    //     $amenities = [];

    //     // Fetch amenity details for each ID
    //     foreach ($amenity_ids as $amenity_id) {
    //         $amenity = AmenitiesModel::find($amenity_id);

    //         if ($amenity) {
    //             array_push($amenities, $amenity);
    //         }
    //     }

    //     // Return the view with property and amenities data
    //     return view('Homepage.view_properties', compact('proper', 'amenities'));
    // }



    // Send Email
    public function sendEmail(Request $request)
    {
        $data = [
            'properties' => $request->input('properties'),
            'location' => $request->input('location'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ];

        Mail::to('giolo.evora@gmail.com')->send(new ContactMail($data));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }


    public function send_email()
    {
        return view('Homepage.contact');
    }

    public function sendVisit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'number' => 'required',
            'email' => 'required|email',
            'date' => 'required',
            'time' => 'required',
            'message' => 'required',
        ]);

        $visit = new VisitModel();
        $visit->name = $validatedData['name'];
        $visit->number = $validatedData['number'];
        $visit->email = $validatedData['email'];
        $visit->date = $validatedData['date'];
        $visit->time = $validatedData['time'];
        $visit->message = $validatedData['message'];
        $visit->properties = $request->input('properties');



        $visit->save();

        Mail::to('giolo.evora@gmail.com')->send(new InquiryMail($visit));
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

   public function acceptVisit($id)
{
    $visit = VisitModel::find($id);

    if (!$visit) {
        return redirect()->back()->with('error', 'Visit request not found.');
    }

    // Mark the visit as accepted
    $visit->status = 'Accepted';
    $visit->save();
       Mail::to($visit->email)->send(new VisitAccepted());

    return redirect()->back()->with('success', 'Visit request accepted.');
}



    public function loan(){
        return view('Homepage.loan');
    }

    public function submitProperty(){
        return view('Homepage.properties.submitProperty');
    }
    
    
    public function search(Request $request)
    {
        $query = $request->input('query');
        $properties = SaleModel::where('properties_name', 'LIKE', "%{$query}%")
            ->orWhere('location', 'LIKE', "%{$query}%")
            ->get();

         return view('Homepage.properties.forsale', compact('properties'));
    }
    
    public function searchlease(Request $request)
    {
        $query = $request->input('query');
        $properties = ForLeaseModel::where('lease_name', 'LIKE', "%{$query}%")
            ->orWhere('location', 'LIKE', "%{$query}%")
            ->get();

         return view('Homepage.properties.forlease', compact('properties'));
    }


}
