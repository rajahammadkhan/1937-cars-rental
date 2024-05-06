    <?php

    use App\Http\Controllers\AboutUsController;
    use App\Http\Controllers\AllVehicleController;
    use App\Http\Controllers\BlogController;
    use App\Http\Controllers\ContactUsController;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\OurServiceController;
    use Illuminate\Support\Facades\Route;

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

    Route::get('/all-vehicles-detail-old', function () {
        return view('all-vehicles-detail-old');
    });

    Route::get('/',
        [HomeController::class, 'index']
    )->name('home');

    Route::get('/about-us',
        [AboutUsController::class, 'index']
    )->name('about_us');

    Route::get('/all-vehicles',
        [AllVehicleController::class, 'index']
    )->name('all_vehicles');


    Route::get('/all-vehicles/{slug}',
        [AllVehicleController::class, 'getVehicleAgainstBrand']
    )->name('get_vehicles_against_brand');

    Route::get('/vehicle/{slug}',
        [AllVehicleController::class, 'detail']
    )->name('vehicle_detail');

    Route::post('/all-vehicles/booking-form/submit',
        [AllVehicleController::class, 'store']
    )->name('booking_form.store');

    Route::post('/vehicles/search',
        [AllVehicleController::class, 'search']
    )->name('vehicles.search');

    Route::post('/vehicles/search/post',
        [AllVehicleController::class, 'post']
    )->name('vehicles.form.post');

    Route::get('/our-services',
        [OurServiceController::class, 'index']
    )->name('our_services');

    Route::get('/blogs',
        [BlogController::class, 'index']
    )->name('blogs');

    Route::get('/blogs/{slug}',
        [BlogController::class, 'detail']
    )->name('blog_detail');

    Route::get('/contact-us',
        [ContactUsController::class, 'index']
    )->name('contact_us');
