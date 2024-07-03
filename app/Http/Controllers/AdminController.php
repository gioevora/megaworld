<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Mail\PublishLease;
use App\Mail\VisitAccepted;
use App\Models\AmenitiesModel;
use App\Models\AwardsModel;
use App\Models\CorporateModel;
use App\Models\DirectorModel;
use App\Models\ForLeaseModel;
use App\Models\ForSaleModel;
use App\Models\HotelModel;
use App\Models\MallModel;
use App\Models\ResidencesModel;
use App\Models\SaleModel;
use App\Models\TownshipModel;
use App\Models\VisitModel;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function view_township()
    {
        $township  = TownshipModel::all();

        return view('admin.view_township', compact('township'));
    }

    public function add_township(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'division' => 'required|string',
            'location' => 'required|string',
            'type' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Save the Township to the database
        $township = new TownshipModel();
        $township->name = $validatedData['name'];
        $township->location = $validatedData['location'];
        $township->type = $validatedData['type'];
        $township->division = $validatedData['division'];

        // Handle image upload
        $imagePath = $request->file('image')->storeAs('public/township_images', $request->file('image')->getClientOriginalName());
        $township->image = $request->file('image')->getClientOriginalName();


        $township->save();

        return redirect()->back()->with('success', 'Township saved successfully');
    }

    // For Sale Properties
    public function for_sale()
    {
        $township  = SaleModel::all();
        $amenity = AmenitiesModel::all();
        return view('admin.forsale', compact('township', 'amenity'));
    }

    public function storeAmenities(Request $request)
    {
        $saleId = $request->input('sale_id');
        
        $selectedAmenities = $request->input('amenity', []);
        $amenitiesString = implode(',', $selectedAmenities);

        // Create a new Property instance
        $property = new ForSaleModel();
        $property->sale_id = $saleId; 
        $property->amenity_id = $amenitiesString; 
        $property->save();

        return redirect()->back()->with('success', 'Township saved successfully');  
    }

    

    // Add For Sale Properties
    public function add_for_sale_properties(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'properties_name' => 'required|string',
            'location' => 'required|string',
            'description' => 'required|string',
            'type' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'TOY' => 'required|string',
            'units' => 'required|string',
            'meter' => 'required|string',
        ]);

        // Save the Township to the database
        $sale = new SaleModel();
        $maxIdLength = mt_rand(11111,55555); // Define the maximum length for the ID

        $customId = 'sale' . $maxIdLength;
        $sale->id = $customId;      
        $sale->properties_name = $validatedData['properties_name']; // Corrected field name
        $sale->location = $validatedData['location'];
        $sale->description = $validatedData['description']; // Assuming description is the correct field name
        $sale->type = $validatedData['type'];
        $sale->TOY = $validatedData['TOY'];
        $sale->units = $validatedData['units'];
        $sale->meter = $validatedData['meter'];


        // Handle image upload
        $imagePath = $request->file('image')->storeAs('public/properties_img', $request->file('image')->getClientOriginalName());
        $sale->image = $request->file('image')->getClientOriginalName();

        if ($sale->save()) {
            return redirect()->back()->with('success', 'Township saved successfully');
        } else {
            return redirect()->back()->with('error', 'There is something wrong. Please try again!');
        }
    }

    public function for_lease(){
        $lease = ForLeaseModel::all();
        $amenity = AmenitiesModel::all();
        return view('admin.forlease', compact('lease', 'amenity'));
    }

    public function add_lease(){
        return view('admin.addLease');
    }
    public function add_for_leas_properties(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'lease_name' => 'required|string',
            'division' => 'required|string',
            'location' => 'required|string',
            'type' => 'required|string',
            'unit_type' => 'required|string',
            'unit_price' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|string',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ]);

        // Save the Township to the database
      $lease = new ForLeaseModel();
      $maxIdLength = mt_rand(11111,55555); // Define the maximum length for the ID

      $customId = 'lease' . $maxIdLength;
      $lease->id = $customId;      
      $lease->lease_name = $validatedData['lease_name']; 
      $lease->division = $validatedData['division']; 
      $lease->location = $validatedData['location']; 
      $lease->type = $validatedData['type'];
      $lease->unit_type = $validatedData['unit_type']; 
      $lease->unit_price = $validatedData['unit_price']; 
      $lease->description = $validatedData['description'];
      $lease->status = $validatedData['status'];


        // Handle image upload
        // $imagePath = $request->file('image', [])->storeAs('public/properties_img', $request->file('image')->getClientOriginalName());
        // $lease->image = $request->file('image')->getClientOriginalName();
        // $amenitiesString = implode(',', $selectedAmenities);
        
        $imagesNames = [];
        
        if($request->hasFile('image')){
            foreach($request->file('image') as $img){
                $imageName = $img->getClientOriginalName();
                // $img->storeAs('public/properties_img', $imageName);
                 $img->move(public_path('storage/properties_img'), $imageName); 
                $imageNames[] = $imageName;
            }
        }
        else{
            return redirect()->back->with('error', 'Image Upload failed');
        }
        
        $lease->image = implode(',', $imageNames);

        if ($lease->save()) {
            return redirect()->back()->with('success', 'Township saved successfully');
        } else {
            return redirect()->back()->with('error', 'There is something wrong. Please try again!');
        }
    }

    public function publish(Request $request, $id)
    {

        // Update the status in the database
        ForLeaseModel::where('id', $id)->update(['status' => 'Published']);
        Mail::to('giolo.evora@gmail.com')->send(new PublishLease());


        // Redirect back or wherever you want after updating
        return redirect()->back()->with('success', 'Status updated successfully');
    }



    public function view_hotel()
    {

        $hotel  = HotelModel::all();

        return view('admin.hotel', compact('hotel'));
    }

    public function add_hotel(Request $request)
    {

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'location' => 'required|string',
            'brand' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Save the Township to the database
        $hotel = new HotelModel();
        $hotel->name = $validatedData['name'];
        $hotel->location = $validatedData['location'];
        $hotel->hotel_brand = $validatedData['brand'];

        // Handle image upload
        $imagePath = $request->file('image')->storeAs('public/township_images', $request->file('image')->getClientOriginalName());
        $hotel->image = $request->file('image')->getClientOriginalName();


        $hotel->save();

        return redirect()->back()->with('success', 'Township saved successfully');
    }

    public function documents()
    {
        $corporate  = CorporateModel::all();

        return view('admin.documents', compact('corporate'));
    }
    public function add_documents(Request $request)
    {

        // Validate the incoming request data
        $validatedData = $request->validate([
            'files_name' => 'required|mimes:pdf|max:2048', // Change 'image' to 'files' and update MIME types
            'name' => 'required|string',
            'section' => 'required|string',
        ]);

        // Save the documents to the database
        $corpo = new CorporateModel();

        // Handle document upload
        $documentPath = $request->file('files_name')->storeAs('public/documents', $request->file('files_name')->getClientOriginalName());
        $corpo->files_name = $request->file('files_name')->getClientOriginalName();

        $corpo->name = $validatedData['name'];
        $corpo->section = $validatedData['section'];

        $corpo->save();

        return redirect()->back()->with('success', 'Document saved successfully');
    }
    public function board_directors()
    {
        $board  = DirectorModel::all();

        return view('admin.board', compact('board'));
    }


    public function add_board(Request $request)
    {

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Save the Township to the database
        $bom = new DirectorModel();
        $bom->name = $validatedData['name'];
        $bom->position = $validatedData['position'];
        $bom->description = $validatedData['description'];

        // Handle image upload
        $imagePath = $request->file('image')->storeAs('public/township_images', $request->file('image')->getClientOriginalName());
        $bom->image = $request->file('image')->getClientOriginalName();


        $bom->save();

        return redirect()->back()->with('success', 'Township saved successfully');
    }
    public function awards()
    {
        $award  = AwardsModel::all();

        return view('admin.awards', compact('award'));
    }

    public function add_awards(Request $request)
    {

        // Validate the incoming request data
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string',
            'type' => 'required|string',

        ]);

        // Save the Township to the database
        $award = new AwardsModel();


        // Handle image upload
        $imagePath = $request->file('image')->storeAs('public/township_images', $request->file('image')->getClientOriginalName());
        $award->image = $request->file('image')->getClientOriginalName();

        $award->description = $validatedData['description'];
        $award->type = $validatedData['type'];


        $award->save();

        return redirect()->back()->with('success', 'Township saved successfully');
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'updateName' => 'required|string',
            'updateLocation' => 'required|string',
            'updateDivision' => 'required|string',
            // Add any additional validation rules for your fields
        ]);

        // Find the township by ID
        $township = TownshipModel::findOrFail($id);

        // Update the township with the validated data
        $township->update([
            'name' => $validatedData['updateName'],
            'location' => $validatedData['updateLocation'],
            'division' => $validatedData['updateDivision'],
            // Add any additional fields you want to update
        ]);

        // Redirect back or wherever you want after the update
        return redirect()->back()->with('success', 'Township updated successfully');
    }

    public function destroy($id)
    {
        $township = TownshipModel::findOrFail($id);
        // $township->delete();
        return redirect()->back()->with('success', 'Township deleted successfully');
    }

    public function update_residence(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'updateName' => 'required|string',
            'updateLocation' => 'required|string',
            'updateStatus' => 'required|string',
            'updateDescription' => 'required',
            // Add any additional validation rules for your fields
        ]);

        // Find the township by ID
        $residence = ResidencesModel::findOrFail($id);

        // Update the township with the validated data
        $residence->update([
            'name' => $validatedData['updateName'],
            'location' => $validatedData['updateLocation'],
            'status' => $validatedData['updateStatus'],
            'description' => $validatedData['updateDescription'],
            // Add any additional fields you want to update
        ]);

        // Redirect back or wherever you want after the update
        return redirect()->back()->with('success', 'Residences updated successfully');
    }
    public function delete_residence($id)
    {
        $township = SaleModel::findOrFail($id);

        $township->delete();

        return redirect()->back()->with('success', 'Residences deleted successfully');
    }
    public function update_hotels(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'updateName' => 'required|string',
            'updateLocation' => 'required|string',
            'updateBrand' => 'required|string',
            // Add any additional validation rules for your fields
        ]);

        // Find the township by ID
        $hotel = HotelModel::findOrFail($id);

        // Update the township with the validated data
        $hotel->update([
            'name' => $validatedData['updateName'],
            'location' => $validatedData['updateLocation'],
            'hotel_brand' => $validatedData['updateBrand'],
            // Add any additional fields you want to update
        ]);

        // Redirect back or wherever you want after the update
        return redirect()->back()->with('success', 'Hotels updated successfully');
    }
    public function delete_hotels($id)
    {
        $township = HotelModel::findOrFail($id);

        $township->delete();

        return redirect()->back()->with('success', 'Hotels deleted successfully');
    }
    public function update_docs(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'updateName' => 'required|string',
            'updateSection' => 'required|string',

        ]);

        // Find the township by ID
        $hotel = CorporateModel::findOrFail($id);

        // Update the township with the validated data
        $hotel->update([
            'name' => $validatedData['updateName'],
            'section' => $validatedData['updateSection'],

            // Add any additional fields you want to update
        ]);

        // Redirect back or wherever you want after the update
        return redirect()->back()->with('success', 'Documents updated successfully');
    }
    public function delete_docs($id)
    {
        $township = CorporateModel::findOrFail($id);

        $township->delete();

        return redirect()->back()->with('success', 'Documents deleted successfully');
    }

    public function update_board(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'updateName' => 'required|string',
            'updatePosition' => 'required|string',
            'updateDescription' => 'required|string',

        ]);

        // Find the township by ID
        $brd = DirectorModel::findOrFail($id);

        // Update the township with the validated data
        $brd->update([
            'name' => $validatedData['updateName'],
            'position' => $validatedData['updatePosition'],
            'description' => $validatedData['updateDescription'],

            // Add any additional fields you want to update
        ]);

        // Redirect back or wherever you want after the update
        return redirect()->back()->with('success', 'Board of Director updated successfully');
    }
    public function delete_board($id)
    {
        $township = DirectorModel::findOrFail($id);

        $township->delete();

        return redirect()->back()->with('success', 'Board of Director deleted successfully');
    }
    public function update_awards(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([

            'updateDescription' => 'required|string',
            'updateType' => 'required|string',

        ]);

        // Find the township by ID
        $brd = AwardsModel::findOrFail($id);

        // Update the township with the validated data
        $brd->update([


            'description' => $validatedData['updateDescription'],
            'type' => $validatedData['updateType'],

            // Add any additional fields you want to update
        ]);

        // Redirect back or wherever you want after the update
        return redirect()->back()->with('success', 'Awards updated successfully');
    }
    public function delete_awards($id)
    {
        $township = AwardsModel::findOrFail($id);

        $township->delete();

        return redirect()->back()->with('success', 'Awards deleted successfully');
    }

    public function view_mall()
    {
        $mall  = MallModel::all();
        return view('admin.mall', compact('mall'));
    }
    public function add_mall(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'type' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Save the Township to the database
        $mall = new MallModel();
        $mall->name = $validatedData['name'];
        $mall->description = $validatedData['description'];
        $mall->type = $validatedData['type'];

        // Handle image upload
        $imagePath = $request->file('image')->storeAs('public/township_images', $request->file('image')->getClientOriginalName());
        $mall->image = $request->file('image')->getClientOriginalName();


        $mall->save();

        return redirect()->back()->with('success', 'Township saved successfully');
    }

    public function view_properties()
    {
        $visit  = VisitModel::all();

        return view('admin.properties', compact('visit'));
    }
    public function updateStatus(Request $request)
    {
        // Retrieve item ID from the form submission
        $itemId = $request->input('item_id');

        // Update status in the database
        $item = VisitModel::find($itemId);
        if ($item) {
            $item->status = 'Accepted';
            $item->save();

            // Send email
            Mail::to($item->email)->send(new VisitAccepted());

            return redirect()->back()->with('success', 'Schedule Visit Successfully Accepted');
        } else {
            return redirect()->back()->with('error', 'There\'s something wrong');
        }
    }

    // Add Properties
    public function addProperties(){
        return view('admin.addProperties');
    }
}
