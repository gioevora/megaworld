<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\SaleModel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
     $properties = SaleModel::All();

        return view('Homepage.properties.forsale', compact('properties'));
});

Route::get('/investors', function () {
    return view('Homepage.investors');
});
Route::get('/career', function () {
    return view('Homepage.career');
});
Route::get('/sustainability', function () {
    return view('Homepage.sustainability');
});
Route::get('/township', function () {
    return view('Homepage.township');
});
Route::get('/township/metro_manila', [HomeController::class, 'metro_manila']);
Route::get('/township/Luzon', [HomeController::class, 'luzon']);
Route::get('/township/Visayas', [HomeController::class, 'visayas']);
Route::get('/township/Mindanao', [HomeController::class, 'mindanao']);

Route::get('/residence', [HomeController::class, 'residence']);
Route::get('/residences/preselling', [HomeController::class, 'preselling']);
Route::get('/residences/rfo', [HomeController::class, 'occupancy']);


Route::get('/hotels-filter', [HomeController::class, 'hotel_filter']);
Route::get('/hotels/belmont-hotels', [HomeController::class, 'belmont_hotel']);
Route::get('/hotels/richmonde-hotels', [HomeController::class, 'richmonde_hotel']);
Route::get('/hotels/savoy-hotels', [HomeController::class, 'savoy_hotel']);
Route::get('/hotels/other-home-grown-brands', [HomeController::class, 'other_brands']);

Route::get('/offices', [HomeController::class, 'offices']);
Route::get('/hotels', [HomeController::class, 'hotel']);
Route::get('/lifestyle-malls', [HomeController::class, 'lifestyle_mall']);
Route::get('/customer', [HomeController::class, 'customer']);

// Corporate Governance
Route::get('/corporate-governance', [HomeController::class, 'corporate']);
Route::get('/corporate-governance/manual', [HomeController::class, 'manual']);
Route::get('/corporate-governance/integrated-acgr', [HomeController::class, 'integrated']);
Route::get('/corporate-governance/annual-corporate-governance-report', [HomeController::class, 'annual']);
Route::get('/corporate-governance/asean-cg-scorecard', [HomeController::class, 'asean']);
Route::get('/corporate-governance/rights-shareholders', [HomeController::class, 'rights']);
Route::get('/corporate-governance/equitable-treatment-shareholders', [HomeController::class, 'equitable']);
Route::get('/corporate-governance/role-stakeholders', [HomeController::class, 'role']);
Route::get('/corporate-governance/disclosure-transparency', [HomeController::class, 'disclosure']);
Route::get('/corporate-governance/board-directors', [HomeController::class, 'board']);
Route::get('/corporate-governance/board-committee-charter', [HomeController::class, 'charter']);
Route::get('/corporate-governance/board-committees', [HomeController::class, 'boardcommittes']);
Route::get('/corporate-governance/board-processes', [HomeController::class, 'boardprocess']);
Route::get('/corporate-governance/cg-training-and-seminars', [HomeController::class, 'training']);
Route::get('/corporate-governance/enterprise-risk-management', [HomeController::class, 'enterprise']);
Route::get('/corporate-governance/related-party-transactions-policy', [HomeController::class, 'policy']);
Route::get('/corporate-governance/insider-trading-policy', [HomeController::class, 'insider']);
Route::get('/corporate-governance/business-gifts-policy', [HomeController::class, 'gift']);
Route::get('/corporate-governance/external-audit-meetings-internal-audit', [HomeController::class, 'external']);
Route::get('/corporate-governance/summary-trading-company-shares', [HomeController::class, 'summary']);
Route::get('/corporate-governance/whistle-blowing-policy', [HomeController::class, 'whistleblowing']);
Route::get('/corporate-governance/view-document/{id}', [HomeController::class, 'view_documents'])->name('view_document');









Route::get('/company/corporate-profile', [HomeController::class, 'company']);
Route::get('/company/mission-vision-and-values', [HomeController::class, 'vmo']);
Route::get('/company/board-directors', [HomeController::class, 'director']);
Route::get('/company/management-team-and-executive-officers', [HomeController::class, 'management']);
Route::get('/company/organizational-chart', [HomeController::class, 'chart']);
Route::get('/company/conglomerate-map', [HomeController::class, 'conglorate']);
Route::get('/company/companys-shareholding-structure', [HomeController::class, 'shareholding']);
Route::get('/company/companys-article-incorporation-and-laws', [HomeController::class, 'article']);
Route::get('/company/articles-incorporation', [HomeController::class, 'incorporation']);
Route::get('/company/by-laws', [HomeController::class, 'bylaws']);

// Company Business
Route::get('/our-business', [HomeController::class, 'business']);

// Company Disclosure
Route::get('/company-disclosures/general-information-sheet', [HomeController::class, 'info']);
Route::get('/company-disclosures/information-statements', [HomeController::class, 'information']);
Route::get('/company-disclosures/statement-changes', [HomeController::class, 'statement_change']);
Route::get('/company-disclosures/prospectus', [HomeController::class, 'prospectus']);
Route::get('/company-disclosures/annual-reports', [HomeController::class, 'annual_report']);
Route::get('/company-disclosures/quarterly-reports', [HomeController::class, 'quarterly_report']);
Route::get('/company-disclosures/current-reports', [HomeController::class, 'current_report']);
Route::get('/company-disclosures/minutes-annual-stockholderss-meeting', [HomeController::class, 'minutes']);
Route::get('/company-disclosures/notice-annual-or-special-stockholders-meeting', [HomeController::class, 'notice']);
Route::get('/company-disclosures/pse-clarifications-news-articles', [HomeController::class, 'clarification']);
Route::get('/company-disclosures/public-ownership-reports', [HomeController::class, 'ownership']);


// Investor Relations
Route::get('/investor-relations-program', [HomeController::class, 'investor_relations']);
Route::get('/investors-assistance', [HomeController::class, 'assistance']);
Route::get('/share-information', [HomeController::class, 'share_info']);
Route::get('/presentations-and-others', [HomeController::class, 'presentation']);

Route::get('/awards', [HomeController::class, 'awards']);


Route::get('/For-Sale', [HomeController::class, 'for_sale']);
Route::get('/For-Lease', [HomeController::class, 'for_lease']);
Route::get('/view-properties/{id}', [HomeController::class, 'view_properties'])->name('view-properties');
Route::get('/view-lease/{id}', [HomeController::class, 'view_propertie_lease'])->name('view-lease');

// Send Email
Route::get('/contact', [HomeController::class, 'send_email']);
Route::post('/send-email', [HomeController::class, 'sendEmail'])->name('send.email');

// Schedule Visit
Route::post('/schedule-visit', [HomeController::class, 'sendVisit'])->name('send.visit');

// Search Properties
Route::get('/properties/search', [HomeController::class, 'search'])->name('properties.search');
Route::get('/properties/searchlease', [HomeController::class, 'searchlease'])->name('properties.searchlease');





// admin
Route::get('/Admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('/Admin/Township', [AdminController::class, 'view_township']);
Route::post('/Admin/Add/Township', [AdminController::class, 'add_township']);

// Admin for Residences
Route::get('/Admin/For-Sale', [AdminController::class, 'for_sale']);
Route::post('/Admin/Add/for_sale_properties', [AdminController::class, 'add_for_sale_properties']);

// Admin for Hotel
Route::get('/Admin/Hotel', [AdminController::class, 'view_hotel']);
Route::post('/Admin/Add/Hotel', [AdminController::class, 'add_hotel']);


// Corporate Governance Documents
Route::get('/Admin/Documents', [AdminController::class, 'documents']);
Route::post('/Admin/Add/Documents', [AdminController::class, 'add_documents']);

// Board of Directors
Route::get('/Admin/Board-of-Directors', [AdminController::class, 'board_directors']);
Route::post('/Admin/Add/Board', [AdminController::class, 'add_board']);

//Awards
Route::get('/Admin/Awards', [AdminController::class, 'awards']);
Route::post('/Admin/Add/Awards', [AdminController::class, 'add_awards']);

Route::put('/update/{id}', [AdminController::class, 'update'])->name('update.township');
Route::delete('/township/delete/{id}', [AdminController::class, 'destroy'])->name('township.delete');

Route::put('/update/residence/{id}', [AdminController::class, 'update_residence'])->name('update.residences');
Route::delete('/residence/delete/{id}', [AdminController::class, 'delete_residence'])->name('residence.delete');

Route::put('/update/hotel/{id}', [AdminController::class, 'update_hotels'])->name('update.hotels');
Route::delete('/hotel/delete/{id}', [AdminController::class, 'delete_hotels'])->name('hotels.delete');

Route::put('/update/documents/{id}', [AdminController::class, 'update_docs'])->name('update.docs');
Route::delete('/documents/delete/{id}', [AdminController::class, 'delete_docs'])->name('docs.delete');

Route::put('/update/board/{id}', [AdminController::class, 'update_board'])->name('update.board');
Route::delete('/board/delete/{id}', [AdminController::class, 'delete_board'])->name('board.delete');

Route::put('/update/awards/{id}', [AdminController::class, 'update_awards'])->name('update.awards');
Route::delete('/awards/delete/{id}', [AdminController::class, 'delete_awards'])->name('awards.delete');


// Lifestyle
Route::get('/Admin/Mall', [AdminController::class, 'view_mall']);
Route::post('/Admin/Add/Mall', [AdminController::class, 'add_mall']);

//Properties
Route::get('/Admin/Properties', [AdminController::class, 'view_properties']);
Route::post('/update-status', [AdminController::class, 'updateStatus'])->name('accept.visit');

// Add Properties
Route::get('/Admin/Add-Properties', [AdminController::class, 'addProperties']);
Route::post('/Admin/Add/amenities', [AdminController::class, 'storeAmenities'])->name('add.amenity');

// For Lease
Route::get('/Admin/For-Lease', [AdminController::class, 'for_lease']);
Route::get('/Admin/Add/Lease', [AdminController::class, 'add_lease']);
Route::post('/Admin/Add/for_lease_properties', [AdminController::class, 'add_for_leas_properties']);
Route::post('/publish/{id}', [AdminController::class, 'publish'])->name('publish');

Route::get('/view_botman', [BotManController::class, 'view_botman']);

// Route for handling bot messages
Route::post('/botman', [BotManController::class, 'handle']);

Route::get('/view_botman', function () {
    return view('chat');
});

Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);

Route::get('/Loan-Calculator', [HomeController::class, 'loan']);

Route::get('/Submit-Property', [HomeController::class, 'submitProperty']);

Route::get('/accept-visit/{id}', [HomeController::class, 'acceptVisit'])->name('accept.visit');








// Authentication
Route::get('/login', [AuthController::class, 'login']);
Route::get('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'authentication']);
Route::post('/register', [AuthController::class, 'register']);
