<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CMS\DashBoardController;
use App\Http\Controllers\CMS\UserController;
use App\Http\Controllers\CMS\RoleController;
use App\Http\Controllers\CMS\LoginController;
use App\Http\Controllers\CMS\SignUpController;
use App\Http\Controllers\CMS\MFOurServiceController;
use App\Http\Controllers\CMS\MFVisaServiceController;
use App\Http\Controllers\CMS\MFLLCCompanyFormationController;
use App\Http\Controllers\CMS\MFBusinessSetupController;
use App\Http\Controllers\CMS\OurServiceController;
use App\Http\Controllers\CMS\VisaServiceController;
use App\Http\Controllers\CMS\LLCCompanyFormationController;
use App\Http\Controllers\CMS\BusinessSetupController;
use App\Http\Controllers\CMS\OtherPagesController;
use App\Http\Controllers\CMS\HomeSliderController;
use App\Http\Controllers\CMS\HomeSectionOneController;
use App\Http\Controllers\CMS\HomeSectionThreeController;
use App\Http\Controllers\CMS\HomeSectionFourController;
use App\Http\Controllers\CMS\HomeSectionFiveController;
use App\Http\Controllers\CMS\HomeSectionSixController;
use App\Http\Controllers\CMS\HomeSectionSevenController;
use App\Http\Controllers\CMS\AboutUsSectionTwoController;
use App\Http\Controllers\CMS\AllVehicleController;
use App\Http\Controllers\CMS\OurServicesSectionOneController;
use App\Http\Controllers\CMS\OfficeSpaceSectionOneController;
use App\Http\Controllers\CMS\OfficeSpaceSectionTwoController;
use App\Http\Controllers\CMS\OfficeSpaceSectionThreeController;
use App\Http\Controllers\CMS\BlogController;
use App\Http\Controllers\CMS\BrandController;
use App\Http\Controllers\CMS\SEOController;
use App\Http\Controllers\CMS\SettingController;
use App\Http\Controllers\CMS\VehicleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => ['auth']], function () {

    //dashboard
    Route::group(['middleware' => ['can:DashBoard']], function () {
        Route::get('/dashboard', [DashBoardController::class, 'index'])->name('dashboard');
    });

    //user managment 
    Route::group(['middleware' => ['can:Users']], function () {
        Route::get('/users', [UserController::class, 'index'])->name('user');
        Route::get('/users/datatable', [UserController::class, 'datatable'])->name('user.datatable');
    });
    Route::group(['middleware' => ['can:users-add']], function () {
        Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/users/store', [UserController::class, 'store'])->name('user.store');
    });

    Route::group(['middleware' => ['can:users-edit']], function () {
        Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::put('users/{user}/update', [UserController::class, 'update'])->name('user.update');
    });
    Route::group(['middleware' => ['can:users-delete']], function () {
        Route::delete('users/destroy', [UserController::class, 'destroy'])->name('user.destroy');
    });

    Route::group(['middleware' => ['can:users-status']], function () {
        Route::patch('users/status', [UserController::class, 'status'])->name('user.status');
    });

    //role managment 
    Route::group(['middleware' => ['can:Roles']], function () {
        Route::get('/roles', [RoleController::class, 'index'])->name('role');
        Route::get('/roles/datatable', [RoleController::class, 'datatable'])->name('role.datatable');
    });

    // role create route
    Route::group(['middleware' => ['can:roles-add']], function () {
        Route::get('/roles/create', [RoleController::class, 'create'])->name('role.create');
        Route::post('/roles/add', [RoleController::class, 'store'])->name('role.store');
    });

    // role edit route
    Route::group(['middleware' => ['can:roles-edit']], function () {
        Route::get('roles/{role}/edit', [RoleController::class, 'edit'])->name('role.edit');
        Route::put('roles/{role}/update', [RoleController::class, 'update'])->name('role.update');
    });

    // role delete route
    Route::group(['middleware' => ['can:roles-delete']], function () {
        Route::delete('roles/destroy', [RoleController::class, 'destroy'])->name('role.destroy');
    });

    // Master Files

    // Our Services
    Route::group(['middleware' => ['can:MF-Our Services']], function () {
        Route::get('/mf-our-services', [MFOurServiceController::class, 'index'])->name('mf_our_service');
        Route::get('/mf-our-services/datatable', [MFOurServiceController::class, 'datatable'])->name('mf_our_service.datatable');
    });

    Route::group(['middleware' => ['can:mf_our_services-add']], function () {
        Route::get('/mf-our-services/create', [MFOurServiceController::class, 'create'])->name('mf_our_service.create');
        Route::post('/mf-our-services/store', [MFOurServiceController::class, 'store'])->name('mf_our_service.store');
    });

    Route::group(['middleware' => ['can:mf_our_services-status']], function () {
        Route::patch('/mf-our-services/status', [MFOurServiceController::class, 'status'])->name('mf_our_service.status');
    });
    
    Route::group(['middleware' => ['can:mf_our_services-add header content']], function () {
        Route::get('/mf-our-services/{mf_our_service}/header_content', [MFOurServiceController::class, 'headerContent'])->name('mf_our_service.header_content');
        Route::put('/mf-our-services/{mf_our_service}/header_content/update', [MFOurServiceController::class, 'headerContentUpdate'])->name('mf_our_service.header_content_update');
    });

    Route::group(['middleware' => ['can:mf_our_services-edit']], function () {
        Route::get('/mf-our-services/{mf_our_service}/edit', [MFOurServiceController::class, 'edit'])->name('mf_our_service.edit');
        Route::put('/mf-our-services/{mf_our_service}/update', [MFOurServiceController::class, 'update'])->name('mf_our_service.update');
    });

    Route::group(['middleware' => ['can:mf_our_services-delete']], function () {
        Route::delete('/mf-our-services/destroy', [MFOurServiceController::class, 'destroy'])->name('mf_our_service.destroy');
    });

    // Visa Services
    Route::group(['middleware' => ['can:MF-Visa Services']], function () {
        Route::get('/mf-visa-services', [MFVisaServiceController::class, 'index'])->name('mf_visa_service');
        Route::get('/mf-visa-services/datatable', [MFVisaServiceController::class, 'datatable'])->name('mf_visa_service.datatable');
    });

    Route::group(['middleware' => ['can:mf_visa_services-add']], function () {
        Route::get('/mf-visa-services/create', [MFVisaServiceController::class, 'create'])->name('mf_visa_service.create');
        Route::post('/mf-visa-services/store', [MFVisaServiceController::class, 'store'])->name('mf_visa_service.store');
    });

    Route::group(['middleware' => ['can:mf_visa_services-status']], function () {
        Route::patch('/mf-visa-services/status', [MFVisaServiceController::class, 'status'])->name('mf_visa_service.status');
    });

    Route::group(['middleware' => ['can:mf_visa_services-add header content']], function () {
        Route::get('/mf-visa-services/{mf_visa_service}/header_content', [MFVisaServiceController::class, 'headerContent'])->name('mf_visa_service.header_content');
        Route::put('/mf-visa-services/{mf_visa_service}/header_content/update', [MFVisaServiceController::class, 'headerContentUpdate'])->name('mf_visa_service.header_content_update');
    });

    Route::group(['middleware' => ['can:mf_visa_services-edit']], function () {
        Route::get('/mf-visa-services/{mf_visa_service}/edit', [MFVisaServiceController::class, 'edit'])->name('mf_visa_service.edit');
        Route::put('/mf-visa-services/{mf_visa_service}/update', [MFVisaServiceController::class, 'update'])->name('mf_visa_service.update');
    });

    Route::group(['middleware' => ['can:mf_visa_services-delete']], function () {
        Route::delete('/mf-visa-services/destroy', [MFVisaServiceController::class, 'destroy'])->name('mf_visa_service.destroy');
    });

    // LLC Company Formation
    Route::group(['middleware' => ['can:MF-LLC Company Formation']], function () {
        Route::get('/mf-llc-company-formation', [MFLLCCompanyFormationController::class, 'index'])->name('mf_llc_company_formation');
        Route::get('/mf-llc-company-formation/datatable', [MFLLCCompanyFormationController::class, 'datatable'])->name('mf_llc_company_formation.datatable');
    });

    Route::group(['middleware' => ['can:mf_llc_company_formation-add']], function () {
        Route::get('/mf-llc-company-formation/create', [MFLLCCompanyFormationController::class, 'create'])->name('mf_llc_company_formation.create');
        Route::post('/mf-llc-company-formation/store', [MFLLCCompanyFormationController::class, 'store'])->name('mf_llc_company_formation.store');
    });

    Route::group(['middleware' => ['can:mf_llc_company_formation-status']], function () {
        Route::patch('/mf-llc-company-formation/status', [MFLLCCompanyFormationController::class, 'status'])->name('mf_llc_company_formation.status');
    });

    Route::group(['middleware' => ['can:mf_llc_company_formation-add header content']], function () {
        Route::get('/mf-llc-company-formation/{mf_llc_company_formation}/header_content', [MFLLCCompanyFormationController::class, 'headerContent'])->name('mf_llc_company_formation.header_content');
        Route::put('/mf-llc-company-formation/{mf_llc_company_formation}/header_content/update', [MFLLCCompanyFormationController::class, 'headerContentUpdate'])->name('mf_llc_company_formation.header_content_update');
    });

    Route::group(['middleware' => ['can:mf_llc_company_formation-edit']], function () {
        Route::get('/mf-llc-company-formation/{mf_llc_company_formation}/edit', [MFLLCCompanyFormationController::class, 'edit'])->name('mf_llc_company_formation.edit');
        Route::put('/mf-llc-company-formation/{mf_llc_company_formation}/update', [MFLLCCompanyFormationController::class, 'update'])->name('mf_llc_company_formation.update');
    });

    Route::group(['middleware' => ['can:mf_llc_company_formation-delete']], function () {
        Route::delete('/mf-llc-company-formation/destroy', [MFLLCCompanyFormationController::class, 'destroy'])->name('mf_llc_company_formation.destroy');
    });

    // Business Setup
    Route::group(['middleware' => ['can:MF-Business Setup']], function () {
        Route::get('/mf-business-setup', [MFBusinessSetupController::class, 'index'])->name('mf_business_setup');
        Route::get('/mf-business-setup/datatable', [MFBusinessSetupController::class, 'datatable'])->name('mf_business_setup.datatable');
    });

    Route::group(['middleware' => ['can:mf_business_setup-add']], function () {
        Route::get('/mf-business-setup/create', [MFBusinessSetupController::class, 'create'])->name('mf_business_setup.create');
        Route::post('/mf-business-setup/store', [MFBusinessSetupController::class, 'store'])->name('mf_business_setup.store');
    });

    Route::group(['middleware' => ['can:mf_business_setup-status']], function () {
        Route::patch('/mf-business-setup/status', [MFBusinessSetupController::class, 'status'])->name('mf_business_setup.status');
    });

    Route::group(['middleware' => ['can:mf_business_setup-add header content']], function () {
        Route::get('/mf-business-setup/{mf_business_setup}/header_content', [MFBusinessSetupController::class, 'headerContent'])->name('mf_business_setup.header_content');
        Route::put('/mf-business-setup/{mf_business_setup}/header_content/update', [MFBusinessSetupController::class, 'headerContentUpdate'])->name('mf_business_setup.header_content_update');
    });

    Route::group(['middleware' => ['can:mf_business_setup-edit']], function () {
        Route::get('/mf-business-setup/{mf_business_setup}/edit', [MFBusinessSetupController::class, 'edit'])->name('mf_business_setup.edit');
        Route::put('/mf-business-setup/{mf_business_setup}/update', [MFBusinessSetupController::class, 'update'])->name('mf_business_setup.update');
    });

    Route::group(['middleware' => ['can:mf_business_setup-delete']], function () {
        Route::delete('/mf-business-setup/destroy', [MFBusinessSetupController::class, 'destroy'])->name('mf_business_setup.destroy');
    });

    // Site Management

    // Our Services
    Route::group(['middleware' => ['can:SM-Our Services']], function () {
        Route::get('/our-services', [OurServiceController::class, 'index'])->name('our_service');
        Route::get('/our-services/datatable', [OurServiceController::class, 'datatable'])->name('our_service.datatable');
    });

    Route::group(['middleware' => ['can:sm_our_services-edit']], function () {
        Route::get('our-services/{our_service}/edit', [OurServiceController::class, 'edit'])->name('our_service.edit');
        Route::put('our-services/{our_service}/update/{our_service_detail_id}', [OurServiceController::class, 'update'])->name('our_service.update');
    });

    // Visa Services
    Route::group(['middleware' => ['can:SM-Visa Services']], function () {
        Route::get('/visa-services', [VisaServiceController::class, 'index'])->name('visa_service');
        Route::get('/visa-services/datatable', [VisaServiceController::class, 'datatable'])->name('visa_service.datatable');
    });

    Route::group(['middleware' => ['can:sm_visa_services-edit']], function () {
        Route::get('visa-services/{visa_service}/edit', [VisaServiceController::class, 'edit'])->name('visa_service.edit');
        Route::put('visa-services/{visa_service}/update/{visa_service_detail_id}', [VisaServiceController::class, 'update'])->name('visa_service.update');
    });

    // LLC Company Formation
    Route::group(['middleware' => ['can:SM-LLC Company Formation']], function () {
        Route::get('/llc-company-formation', [LLCCompanyFormationController::class, 'index'])->name('llc_company_formation');
        Route::get('/llc-company-formation/datatable', [LLCCompanyFormationController::class, 'datatable'])->name('llc_company_formation.datatable');
    });

    Route::group(['middleware' => ['can:sm_llc_company_formation-edit']], function () {
        Route::get('llc-company-formation/{llc_company_formation}/edit', [LLCCompanyFormationController::class, 'edit'])->name('llc_company_formation.edit');
        Route::put('llc-company-formation/{llc_company_formation}/update/{llc_company_formation_detail_id}', [LLCCompanyFormationController::class, 'update'])->name('llc_company_formation.update');
    });

    // Business Setup
    Route::group(['middleware' => ['can:SM-Business Setup']], function () {
        Route::get('/business-setup', [BusinessSetupController::class, 'index'])->name('business_setup');
        Route::get('/business-setup/datatable', [BusinessSetupController::class, 'datatable'])->name('business_setup.datatable');
    });

    Route::group(['middleware' => ['can:sm_business_setup-edit']], function () {
        Route::get('business-setup/{business_setup}/edit', [BusinessSetupController::class, 'edit'])->name('business_setup.edit');
        Route::put('business-setup/{business_setup}/update/{business_setup_detail_id}', [BusinessSetupController::class, 'update'])->name('business_setup.update');
    });

    // Other Pages
    Route::group(['middleware' => ['can:Other Pages']], function () {
        Route::get('/pages', [OtherPagesController::class, 'index'])->name('other_pages');
        Route::get('/other-pages/datatable', [OtherPagesController::class, 'datatable'])->name('other_pages.datatable');
    });

    // All Vehicles
    // Brands
    Route::get('/brands', [BrandController::class, 'index'])->name('brands');
    Route::get('/brands/datatable', [BrandController::class, 'datatable'])->name('brand.datatable');
    Route::get('/brands/create', [BrandController::class, 'create'])->name('brand.create');
    Route::post('/brands/store', [BrandController::class, 'store'])->name('brand.store');
    Route::patch('/brands/status', [BrandController::class, 'status'])->name('brand.status');
    Route::get('/brands/{brand}/edit', [BrandController::class, 'edit'])->name('brand.edit');
    Route::put('/brands/{brand}/update', [BrandController::class, 'update'])->name('brand.update');
    Route::delete('/brands/destroy', [BrandController::class, 'destroy'])->name('brand.destroy');

    // All Vehicles
    Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles');
    Route::get('/vehicles/datatable', [VehicleController::class, 'datatable'])->name('vehicle.datatable');
    Route::get('/vehicles/create', [VehicleController::class, 'create'])->name('vehicle.create');
    Route::post('/vehicles/store', [VehicleController::class, 'store'])->name('vehicle.store');
    Route::patch('/vehicles/status', [VehicleController::class, 'status'])->name('vehicle.status');
    Route::get('/vehicles/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicle.edit');
    Route::put('/vehicles/{vehicle}/update', [VehicleController::class, 'update'])->name('vehicle.update');
    Route::delete('/vehicles/destroy', [VehicleController::class, 'destroy'])->name('vehicle.destroy');

    // Home Page
    Route::get('other-pages/home', [OtherPagesController::class, 'homePage'])->name('other_pages.home');

    // Home - Slider
    Route::get('/other-pages/home/slider/datatable', [HomeSliderController::class, 'datatable'])->name('home_slider.datatable');
    Route::get('/other-pages/home/slider/create', [HomeSliderController::class, 'create'])->name('home_slider.create');
    Route::post('/other-pages/home/slider/store', [HomeSliderController::class, 'store'])->name('home_slider.store');
    Route::patch('/other-pages/home/slider/status', [HomeSliderController::class, 'status'])->name('home_slider.status');
    Route::get('/other-pages/home/slider/{home_slider}/edit', [HomeSliderController::class, 'edit'])->name('home_slider.edit');
    Route::put('/other-pages/home/slider/{home_slider}/update', [HomeSliderController::class, 'update'])->name('home_slider.update');
    Route::delete('/other-pages/home/slider/destroy', [HomeSliderController::class, 'destroy'])->name('home_slider.destroy');

    // Home - Video Section
    Route::put('other-pages/home/video-section/update', [OtherPagesController::class, 'videoSectionUpdate'])->name('home_video_section.update');

    // Home - Section Two Update
    Route::put('other-pages/home/section-one/update', [OtherPagesController::class, 'homeSectionOneUpdate'])->name('home_section_one.update');

    // Home - Section Three
    Route::get('/other-pages/home/section-three/datatable', [HomeSectionThreeController::class, 'datatable'])->name('home_section_three.datatable');
    Route::get('/other-pages/home/section-three/create', [HomeSectionThreeController::class, 'create'])->name('home_section_three.create');
    Route::post('/other-pages/home/section-three/store', [HomeSectionThreeController::class, 'store'])->name('home_section_three.store');
    Route::patch('/other-pages/home/section-three/status', [HomeSectionThreeController::class, 'status'])->name('home_section_three.status');
    Route::get('/other-pages/home/section-three/{home_section_three}/edit', [HomeSectionThreeController::class, 'edit'])->name('home_section_three.edit');
    Route::put('/other-pages/home/section-three/{home_section_three}/update', [HomeSectionThreeController::class, 'update'])->name('home_section_three.update');
    Route::delete('/other-pages/home/section-three/destroy', [HomeSectionThreeController::class, 'destroy'])->name('home_section_three.destroy');

    // Home - Section Four
    Route::get('/other-pages/home/section-four/datatable', [HomeSectionFourController::class, 'datatable'])->name('home_section_four.datatable');
    Route::get('/other-pages/home/section-four/create', [HomeSectionFourController::class, 'create'])->name('home_section_four.create');
    Route::post('/other-pages/home/section-four/store', [HomeSectionFourController::class, 'store'])->name('home_section_four.store');
    Route::patch('/other-pages/home/section-four/status', [HomeSectionFourController::class, 'status'])->name('home_section_four.status');
    Route::get('/other-pages/home/section-four/{home_section_four}/edit', [HomeSectionFourController::class, 'edit'])->name('home_section_four.edit');
    Route::put('/other-pages/home/section-four/{home_section_four}/update', [HomeSectionFourController::class, 'update'])->name('home_section_four.update');
    Route::delete('/other-pages/home/section-four/destroy', [HomeSectionFourController::class, 'destroy'])->name('home_section_four.destroy');

    // Home - Section Five
    Route::get('/other-pages/home/section-five/datatable', [HomeSectionFiveController::class, 'datatable'])->name('home_section_five.datatable');
    Route::get('/other-pages/home/section-five/create', [HomeSectionFiveController::class, 'create'])->name('home_section_five.create');
    Route::post('/other-pages/home/section-five/store', [HomeSectionFiveController::class, 'store'])->name('home_section_five.store');
    Route::patch('/other-pages/home/section-five/status', [HomeSectionFiveController::class, 'status'])->name('home_section_five.status');
    Route::get('/other-pages/home/section-five/{home_section_five}/edit', [HomeSectionFiveController::class, 'edit'])->name('home_section_five.edit');
    Route::put('/other-pages/home/section-five/{home_section_five}/update', [HomeSectionFiveController::class, 'update'])->name('home_section_five.update');
    Route::delete('/other-pages/home/section-five/destroy', [HomeSectionFiveController::class, 'destroy'])->name('home_section_five.destroy');

    // Home - Section Six
    Route::get('/other-pages/home/section-six/datatable', [HomeSectionSixController::class, 'datatable'])->name('home_section_six.datatable');
    Route::get('/other-pages/home/section-six/create', [HomeSectionSixController::class, 'create'])->name('home_section_six.create');
    Route::post('/other-pages/home/section-six/store', [HomeSectionSixController::class, 'store'])->name('home_section_six.store');
    Route::patch('/other-pages/home/section-six/status', [HomeSectionSixController::class, 'status'])->name('home_section_six.status');
    Route::get('/other-pages/home/section-six/{home_section_six}/edit', [HomeSectionSixController::class, 'edit'])->name('home_section_six.edit');
    Route::put('/other-pages/home/section-six/{home_section_six}/update', [HomeSectionSixController::class, 'update'])->name('home_section_six.update');
    Route::delete('/other-pages/home/section-six/destroy', [HomeSectionSixController::class, 'destroy'])->name('home_section_six.destroy');

    // Home - Section Seven
    Route::get('/other-pages/home/section-seven/datatable', [HomeSectionSevenController::class, 'datatable'])->name('home_section_seven.datatable');
    Route::get('/other-pages/home/section-seven/create', [HomeSectionSevenController::class, 'create'])->name('home_section_seven.create');
    Route::post('/other-pages/home/section-seven/store', [HomeSectionSevenController::class, 'store'])->name('home_section_seven.store');
    Route::patch('/other-pages/home/section-seven/status', [HomeSectionSevenController::class, 'status'])->name('home_section_seven.status');
    Route::get('/other-pages/home/section-seven/{home_section_seven}/edit', [HomeSectionSevenController::class, 'edit'])->name('home_section_seven.edit');
    Route::put('/other-pages/home/section-seven/{home_section_seven}/update', [HomeSectionSevenController::class, 'update'])->name('home_section_seven.update');
    Route::delete('/other-pages/home/section-seven/destroy', [HomeSectionSevenController::class, 'destroy'])->name('home_section_seven.destroy');

    // Home - Section Eight Update
    Route::put('other-pages/home/section-eight/update', [OtherPagesController::class, 'homeSectionEightUpdate'])->name('home_section_eight.update');

    // About Us Page
    Route::get('other-pages/about-us', [OtherPagesController::class, 'aboutUsPage'])->name('other_pages.about_us');

        // About Us - Section One Update
    Route::put('other-pages/about-us/section-one/update', [OtherPagesController::class, 'aboutUsSectionOneUpdate'])->name('about_us_section_one.update');

    // Our Services Page
    Route::get('other-pages/our-services', [OtherPagesController::class, 'ourServicesPage'])->name('other_pages.our_services');

    // Our Services - Section One
    Route::get('/other-pages/our-services/section-one/datatable', [OurServicesSectionOneController::class, 'datatable'])->name('our_services_section_one.datatable');
    Route::get('/other-pages/our-services/section-one/create', [OurServicesSectionOneController::class, 'create'])->name('our_services_section_one.create');
    Route::post('/other-pages/our-services/section-one/store', [OurServicesSectionOneController::class, 'store'])->name('our_services_section_one.store');
    Route::patch('/other-pages/our-services/section-one/status', [OurServicesSectionOneController::class, 'status'])->name('our_services_section_one.status');
    Route::get('/other-pages/our-services/section-one/{our_services_section_one}/edit', [OurServicesSectionOneController::class, 'edit'])->name('our_services_section_one.edit');
    Route::put('/other-pages/our-services/section-one/{our_services_section_one}/update', [OurServicesSectionOneController::class, 'update'])->name('our_services_section_one.update');
    Route::delete('/other-pages/our-services/section-one/destroy', [OurServicesSectionOneController::class, 'destroy'])->name('our_services_section_one.destroy');

    // Office Space Page
    Route::get('other-pages/office-space', [OtherPagesController::class, 'officeSpacePage'])->name('other_pages.office_space');

    // Office Space - Section One
    Route::get('/other-pages/office-space/section-one/datatable', [OfficeSpaceSectionOneController::class, 'datatable'])->name('office_space_section_one.datatable');
    Route::get('/other-pages/office-space/section-one/create', [OfficeSpaceSectionOneController::class, 'create'])->name('office_space_section_one.create');
    Route::post('/other-pages/office-space/section-one/store', [OfficeSpaceSectionOneController::class, 'store'])->name('office_space_section_one.store');
    Route::patch('/other-pages/office-space/section-one/status', [OfficeSpaceSectionOneController::class, 'status'])->name('office_space_section_one.status');
    Route::get('/other-pages/office-space/section-one/{office_space_section_one}/edit', [OfficeSpaceSectionOneController::class, 'edit'])->name('office_space_section_one.edit');
    Route::put('/other-pages/office-space/section-one/{office_space_section_one}/update', [OfficeSpaceSectionOneController::class, 'update'])->name('office_space_section_one.update');
    Route::delete('/other-pages/office-space/section-one/destroy', [OfficeSpaceSectionOneController::class, 'destroy'])->name('office_space_section_one.destroy');

    // Office Space - Section Two
    Route::get('/other-pages/office-space/section-two/datatable', [OfficeSpaceSectionTwoController::class, 'datatable'])->name('office_space_section_two.datatable');
    Route::get('/other-pages/office-space/section-two/create', [OfficeSpaceSectionTwoController::class, 'create'])->name('office_space_section_two.create');
    Route::post('/other-pages/office-space/section-two/store', [OfficeSpaceSectionTwoController::class, 'store'])->name('office_space_section_two.store');
    Route::patch('/other-pages/office-space/section-two/status', [OfficeSpaceSectionTwoController::class, 'status'])->name('office_space_section_two.status');
    Route::get('/other-pages/office-space/section-two/{office_space_section_two}/edit', [OfficeSpaceSectionTwoController::class, 'edit'])->name('office_space_section_two.edit');
    Route::put('/other-pages/office-space/section-two/{office_space_section_two}/update', [OfficeSpaceSectionTwoController::class, 'update'])->name('office_space_section_two.update');
    Route::delete('/other-pages/office-space/section-two/destroy', [OfficeSpaceSectionTwoController::class, 'destroy'])->name('office_space_section_two.destroy');

    // Office Space - Section Three
    Route::get('/other-pages/office-space/section-three/datatable', [OfficeSpaceSectionThreeController::class, 'datatable'])->name('office_space_section_three.datatable');
    Route::get('/other-pages/office-space/section-three/create', [OfficeSpaceSectionThreeController::class, 'create'])->name('office_space_section_three.create');
    Route::post('/other-pages/office-space/section-three/store', [OfficeSpaceSectionThreeController::class, 'store'])->name('office_space_section_three.store');
    Route::patch('/other-pages/office-space/section-three/status', [OfficeSpaceSectionThreeController::class, 'status'])->name('office_space_section_three.status');
    Route::get('/other-pages/office-space/section-three/{office_space_section_three}/edit', [OfficeSpaceSectionThreeController::class, 'edit'])->name('office_space_section_three.edit');
    Route::put('/other-pages/office-space/section-three/{office_space_section_three}/update', [OfficeSpaceSectionThreeController::class, 'update'])->name('office_space_section_three.update');
    Route::delete('/other-pages/office-space/section-three/destroy', [OfficeSpaceSectionThreeController::class, 'destroy'])->name('office_space_section_three.destroy');

    // Trade License Page
    Route::get('other-pages/trade-license', [OtherPagesController::class, 'tradeLicensePage'])->name('other_pages.trade_license');

    // Trade License - Section One Update
    Route::put('other-pages/trade-license/section-one/update', [OtherPagesController::class, 'tradeLicenseSectionOneUpdate'])->name('trade_license_section_one.update');

    // Trade License - Section Two Update
    Route::put('other-pages/trade-license/section-two/update', [OtherPagesController::class, 'tradeLicenseSectionTwoUpdate'])->name('trade_license_section_two.update');

    // Trade License - Section Three Update
    Route::put('other-pages/trade-license/section-three/update', [OtherPagesController::class, 'tradeLicenseSectionThreeUpdate'])->name('trade_license_section_three.update');

    // Career Page
    Route::get('other-pages/career-page', [OtherPagesController::class, 'careerPage'])->name('other_pages.career');

    // Career Page - Update
    Route::put('other-pages/career-page/update', [OtherPagesController::class, 'careerPageUpdate'])->name('career_page.update');

    // Blogs
    Route::group(['middleware' => ['can:Blogs-Blogs']], function () {
        Route::get('/blogs', [BlogController::class, 'index'])->name('blog');
        Route::get('/blogs/datatable', [BlogController::class, 'datatable'])->name('blog.datatable');
    });

    Route::group(['middleware' => ['can:blogs-add']], function () {
        Route::get('/blogs/create', [BlogController::class, 'create'])->name('blog.create');
        Route::post('/blogs/store', [BlogController::class, 'store'])->name('blog.store');
    });
    
    Route::group(['middleware' => ['can:blogs-status']], function () {
        Route::patch('/blogs/status', [BlogController::class, 'status'])->name('blog.status');
    });

    Route::group(['middleware' => ['can:blogs-edit']], function () {
        Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blog.edit');
        Route::put('/blogs/{blog}/update', [BlogController::class, 'update'])->name('blog.update');
    });

    Route::group(['middleware' => ['can:blogs-delete']], function () {
        Route::delete('/blogs/destroy', [BlogController::class, 'destroy'])->name('blog.destroy');
    });



    // SEO
    Route::group(['middleware' => ['can:SEO']], function () {
        Route::get('/seo', [SEOController::class, 'index'])->name('seo');
        Route::get('/seo/datatable', [SEOController::class, 'datatable'])->name('seo.datatable');
    });

    Route::get('seo/{slug}/edit', [SEOController::class, 'edit'])->name('seo.edit');
    Route::put('seo/{slug}/update', [SEOController::class, 'update'])->name('seo.update');

    // Settings
    Route::group(['middleware' => ['can:Settings']], function () {
        Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    });

    Route::put('/settings/update', [SettingController::class, 'update'])->name('settings.update');

});

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login/store', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/signup', [SignUpController::class, 'index'])->name('signup');
Route::post('/signup/store', [SignUpController::class, 'signup'])->name('signup.store');
