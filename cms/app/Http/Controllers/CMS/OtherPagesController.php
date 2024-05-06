<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\BusinessSetup;
use App\Models\BusinessSetupDetail;
use App\Models\CMS;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Hash;
use DataTables;
use Auth;
use Illuminate\Support\Facades\Storage;

class OtherPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('cms.pages.index');
    }

    public function homePage()
    {
        $data = [
            'video_section' =>  CMS::where('page','home')->where('type',1)->first(),
            'home_section_one' =>  CMS::where('page','home')->where('type',2)->first(),
            'home_section_eight' =>  CMS::where('page','home')->where('type',8)->first(),
            // 'home_section_five'  =>  CMS::where('page','home')->where('type',1)->first(),
        ];

        return view('cms.pages.home.index',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function videoSectionUpdate(Request $request)
    {
        // return $request;
        // $request->validate([
        //     'bg_image' => 'dimensions:min_width=586,min_height=550',
        // ]);

        $home_video_section = CMS::where('page','home')->where('type',1)->first();

        if($request->has('home_video')){
            Storage::disk('cms')->delete('', $home_video_section->image_one);

            $videoName = Storage::disk('cms')->putFile('', $request->home_video);
            $home_video_section->image_one  =   $videoName;
        }
       
        $home_video_section->save();

        return redirect()->route('other_pages.home');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function homeSectionOneUpdate(Request $request)
    {
        // return $request;
        $request->validate([
            // 'bg_image' => 'dimensions:min_width=586,min_height=550',
        ]);

        $home_section_two = CMS::where('page','home')->where('type',2)->first();

        if($request->has('bg_image')){
            Storage::disk('cms')->delete('', $home_section_two->image_one);

            $imageName1 = Storage::disk('cms')->putFile('', $request->bg_image);
            $home_section_two->image_one  =   $imageName1;
        }
        if($request->has('section_one_img')){
            Storage::disk('cms')->delete('', $home_section_two->image_two);

            $imageName2 = Storage::disk('cms')->putFile('', $request->section_one_img);
            $home_section_two->image_two  =   $imageName2;
        }

        $home_section_two->description_one  =   $request->description;
        $home_section_two->heading_one      =   $request->name;
        $home_section_two->heading_two      =   $request->designation;
        $home_section_two->save();

        return redirect()->route('other_pages.home');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function homeSectionFourUpdate(Request $request)
    {

        $request->validate([
            'image' => 'dimensions:min_width=750,min_height=960',
        ]);

        $home_section_four = CMS::where('page','home')->where('type',4)->first();

        if($request->has('image')){
            Storage::disk('cms')->delete('', $home_section_four->image_one);

            $imageName = Storage::disk('cms')->putFile('', $request->image);
            $home_section_four->image_one  =   $imageName;
        }

        $home_section_four->description_one  =   $request->description;
        $home_section_four->save();

        return redirect()->route('other_pages.home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function homeSectionFiveUpdate(Request $request)
    {
        
        $home_section_five = CMS::where('page','home')->where('type',5)->first();

        $home_section_five->description_one  =   $request->description;
        $home_section_five->save();

        return redirect()->route('other_pages.home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function homeSectionEightUpdate(Request $request)
    {
        $request->validate([
            // 'image' => 'dimensions:min_width=911,min_height=1280',
        ]);

        $home_section_four = CMS::where('page','home')->where('type',8)->first();

        if($request->has('image')){
            Storage::disk('cms')->delete('', $home_section_four->image_one);

            $imageName = Storage::disk('cms')->putFile('', $request->image);
            $home_section_four->image_one  =   $imageName;
        }

        $home_section_four->description_one  =   $request->description;
        $home_section_four->save();

        return redirect()->route('other_pages.home');
    }

    public function aboutUsPage()
    {
        $data = [
            'about_us_section_one'    =>  CMS::where('page','about_us')->where('type',1)->first(),
        ];

        return view('cms.pages.about_us.index',$data);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function aboutUsSectionOneUpdate(Request $request)
    {
        // return $request;

        $about_us_section_one = CMS::where('page','about_us')->where('type',1)->first();

        if($request->has('image_one')){
            Storage::disk('cms')->delete('', $about_us_section_one->image_one);

            $imageName = Storage::disk('cms')->putFile('', $request->image_one);
            $about_us_section_one->image_one  =   $imageName;
        }
        if($request->has('image_two')){
            Storage::disk('cms')->delete('', $about_us_section_one->image_two);

            $imageName = Storage::disk('cms')->putFile('', $request->image_two);
            $about_us_section_one->image_two  =   $imageName;
        }
        if($request->has('image_three')){
            Storage::disk('cms')->delete('', $about_us_section_one->heading_one);

            $imageName = Storage::disk('cms')->putFile('', $request->image_three);
            $about_us_section_one->heading_one  =   $imageName;
        }

        $about_us_section_one->description_one  =   $request->description;
        $about_us_section_one->save();

        return redirect()->route('other_pages.about_us');
    }

    public function ourServicesPage()
    {
        $data = [
            'our_team_section_one'      =>  CMS::where('page','our_team')->where('type',1)->first(),
            'our_team_section_three'    =>  CMS::where('page','our_team')->where('type',3)->first(),
            'our_team_section_five'     =>  CMS::where('page','our_team')->where('type',5)->first(),
        ];

        return view('cms.pages.our_services.index',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ourTeamSectionOneUpdate(Request $request)
    {
        $our_team_section_one = CMS::where('page','our_team')->where('type',1)->first();

        $our_team_section_one->description_one  =   $request->description;
        $our_team_section_one->save();

        return redirect()->route('other_pages.our_services');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ourTeamSectionThreeUpdate(Request $request)
    {
        $our_team_section_three = CMS::where('page','our_team')->where('type',3)->first();

        $our_team_section_three->description_one  =   $request->description;
        $our_team_section_three->save();

        return redirect()->route('other_pages.our_services');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ourTeamSectionFiveUpdate(Request $request)
    {
        $our_team_section_five = CMS::where('page','our_team')->where('type',5)->first();

        if($request->has('bg_image')){
            Storage::disk('cms')->delete('', $our_team_section_five->image_one);

            $imageName = Storage::disk('cms')->putFile('', $request->bg_image);
            $our_team_section_five->image_one  =   $imageName;
        }

        $our_team_section_five->description_one  =   $request->description;
        $our_team_section_five->save();

        return redirect()->route('other_pages.our_team');
    }

    public function officeSpacePage()
    {

        $data = [
            'our_team_section_one'      =>  CMS::where('page','our_team')->where('type',1)->first(),
            'our_team_section_three'    =>  CMS::where('page','our_team')->where('type',3)->first(),
            'our_team_section_five'     =>  CMS::where('page','our_team')->where('type',5)->first(),
        ];

        return view('cms.pages.office_space.index',$data);
    }

    public function tradeLicensePage()
    {

        $data = [
            'trade_license_section_one'      =>  CMS::where('page','trade_license')->where('type',1)->first(),
            'trade_license_section_two'      =>  CMS::where('page','trade_license')->where('type',2)->first(),
            'trade_license_section_three'    =>  CMS::where('page','trade_license')->where('type',3)->first(),
        ];

        return view('cms.pages.trade_license.index',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tradeLicenseSectionOneUpdate(Request $request)
    {
        $trade_license_section_one = CMS::where('page','trade_license')->where('type',1)->first();

        if($request->has('image')){
            Storage::disk('cms')->delete('', $trade_license_section_one->image_one);

            $imageName = Storage::disk('cms')->putFile('', $request->image);
            $trade_license_section_one->image_one  =   $imageName;
        }

        $trade_license_section_one->description_one  =   $request->description;
        $trade_license_section_one->save();

        return redirect()->route('other_pages.trade_license');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tradeLicenseSectionTwoUpdate(Request $request)
    {
        $trade_license_section_one = CMS::where('page','trade_license')->where('type',2)->first();

        $trade_license_section_one->description_one  =   $request->description;
        $trade_license_section_one->save();

        return redirect()->route('other_pages.trade_license');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tradeLicenseSectionThreeUpdate(Request $request)
    {
        $trade_license_section_one = CMS::where('page','trade_license')->where('type',3)->first();

        $trade_license_section_one->description_one  =   $request->description;
        $trade_license_section_one->save();

        return redirect()->route('other_pages.trade_license');
    }

    public function careerPage()
    {

        $data = [
            'career'    =>  CMS::where('page','career')->where('type',1)->first(),
        ];

        return view('cms.pages.career.index',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function careerPageUpdate(Request $request)
    {
        $career = CMS::where('page','career')->where('type',1)->first();

        $career->description_one  =   $request->description;
        $career->save();

        return redirect()->route('other_pages.career');
    }
    
}
