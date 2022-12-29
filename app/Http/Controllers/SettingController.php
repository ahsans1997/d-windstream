<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.globalsettings',[
            'setting' => Setting::latest()->first(),
        ]);
    }
    public function update(Request $request, $id)
    {
        if($request->hasFile('web_logo'))
        {
            if (Setting::findOrFail($id)->web_logo != "default.png") {
                $location = 'public/assets/images/'.Setting::findOrFail($id)->web_logo;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'web_logo' => "default.png",
                ]);
            }
            $image = $request->file('web_logo');
            $image_name = "logo".".".$image->getClientOriginalExtension();
            $image_location = 'public/assets/images/'.$image_name;
            Image::make($image)->save(base_path($image_location));
            Setting::findOrFail($id)->update([
                'web_logo' => $image_name,
            ]);
        }
        if($request->hasFile('mobile_logo'))
        {
            if (Setting::findOrFail($id)->mobile_logo != "default.png") {
                $location = 'public/assets/images/'.Setting::findOrFail($id)->mobile_logo;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'mobile_logo' => "default.png",
                ]);
            }
            $image = $request->file('mobile_logo');
            $image_name = "mobilelogo".".".$image->getClientOriginalExtension();
            $image_location = 'public/assets/images/'.$image_name;
            Image::make($image)->save(base_path($image_location));
            Setting::findOrFail($id)->update([
                'mobile_logo' => $image_name,
            ]);
        }
        if($request->hasFile('homebanner'))
        {
            if (Setting::findOrFail($id)->homebanner != "default.png") {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->homebanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'homebanner' => "default.png",
                ]);
            }
            $image = $request->file('homebanner');
            $image_name = "homebanner".".".$image->getClientOriginalExtension();
            $image_location = 'public/assets/images/banner/'.$image_name;
            Image::make($image)->save(base_path($image_location));
            Setting::findOrFail($id)->update([
                'homebanner' => $image_name,
            ]);
        }
        if($request->hasFile('homefooterbanner'))
        {
            if (Setting::findOrFail($id)->homefooterbanner != "default.png") {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->homefooterbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'homefooterbanner' => "default.png",
                ]);
            }
            $image = $request->file('homefooterbanner');
            $image_name = "homefooterbanner".".".$image->getClientOriginalExtension();
            $image_location = 'public/assets/images/banner/'.$image_name;
            Image::make($image)->save(base_path($image_location));
            Setting::findOrFail($id)->update([
                'homefooterbanner' => $image_name,
            ]);
        }
        if($request->hasFile('programbanner'))
        {
            if (Setting::findOrFail($id)->programbanner != "default.png") {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->programbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'programbanner' => "default.png",
                ]);
            }
            $image = $request->file('programbanner');
            $image_name = "programbanner".".".$image->getClientOriginalExtension();
            $image_location = 'public/assets/images/banner/'.$image_name;
            Image::make($image)->save(base_path($image_location));
            Setting::findOrFail($id)->update([
                'programbanner' => $image_name,
            ]);
        }
        if($request->hasFile('newsbanner'))
        {
            if (Setting::findOrFail($id)->newsbanner != "default.png") {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->newsbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'newsbanner' => "default.png",
                ]);
            }
            $image = $request->file('newsbanner');
            $image_name = "newsbanner".".".$image->getClientOriginalExtension();
            $image_location = 'public/assets/images/banner/'.$image_name;
            Image::make($image)->save(base_path($image_location));
            Setting::findOrFail($id)->update([
                'newsbanner' => $image_name,
            ]);
        }
        if($request->hasFile('eventbanner'))
        {
            if (Setting::findOrFail($id)->eventbanner != "default.png") {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->eventbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'eventbanner' => "default.png",
                ]);
            }
            $image = $request->file('eventbanner');
            $image_name = "eventbanner".".".$image->getClientOriginalExtension();
            $image_location = 'public/assets/images/banner/'.$image_name;
            Image::make($image)->save(base_path($image_location));
            Setting::findOrFail($id)->update([
                'eventbanner' => $image_name,
            ]);
        }
        if($request->hasFile('departmentbanner'))
        {
            if (Setting::findOrFail($id)->departmentbanner != "default.png") {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->departmentbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'departmentbanner' => "default.png",
                ]);
            }
            $image = $request->file('departmentbanner');
            $image_name = "departmentbanner".".".$image->getClientOriginalExtension();
            $image_location = 'public/assets/images/banner/'.$image_name;
            Image::make($image)->save(base_path($image_location));
            Setting::findOrFail($id)->update([
                'departmentbanner' => $image_name,
            ]);
        }
        if($request->hasFile('researchbanner'))
        {
            if (Setting::findOrFail($id)->researchbanner != "default.png") {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->researchbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'researchbanner' => "default.png",
                ]);
            }
            $image = $request->file('researchbanner');
            $image_name = "researchbanner".".".$image->getClientOriginalExtension();
            $image_location = 'public/assets/images/banner/'.$image_name;
            Image::make($image)->save(base_path($image_location));
            Setting::findOrFail($id)->update([
                'researchbanner' => $image_name,
            ]);
        }
        if($request->hasFile('aboutbanner'))
        {
            if (Setting::findOrFail($id)->aboutbanner != "default.png") {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->aboutbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'aboutbanner' => "default.png",
                ]);
            }
            $image = $request->file('aboutbanner');
            $image_name = "aboutbanner".".".$image->getClientOriginalExtension();
            $image_location = 'public/assets/images/banner/'.$image_name;
            Image::make($image)->save(base_path($image_location));
            Setting::findOrFail($id)->update([
                'aboutbanner' => $image_name,
            ]);
        }
        if($request->hasFile('contactbanner'))
        {
            if (Setting::findOrFail($id)->contactbanner != "default.png") {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->contactbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'contactbanner' => "default.png",
                ]);
            }
            $image = $request->file('contactbanner');
            $image_name = "contactbanner".".".$image->getClientOriginalExtension();
            $image_location = 'public/assets/images/banner/'.$image_name;
            Image::make($image)->save(base_path($image_location));
            Setting::findOrFail($id)->update([
                'contactbanner' => $image_name,
            ]);
        }
        if($request->hasFile('facultymemberbanner'))
        {
            if (Setting::findOrFail($id)->facultymemberbanner != "default.png") {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->facultymemberbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'facultymemberbanner' => "default.png",
                ]);
            }
            $image = $request->file('facultymemberbanner');
            $image_name = "facultymemberbanner".".".$image->getClientOriginalExtension();
            $image_location = 'public/assets/images/banner/'.$image_name;
            Image::make($image)->save(base_path($image_location));
            Setting::findOrFail($id)->update([
                'facultymemberbanner' => $image_name,
            ]);
        }
        if($request->hasFile('noticebanner'))
        {
            if (Setting::findOrFail($id)->noticebanner != "default.png") {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->noticebanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'noticebanner' => "default.png",
                ]);
            }
            $image = $request->file('noticebanner');
            $image_name = "noticebanner".".".$image->getClientOriginalExtension();
            $image_location = 'public/assets/images/banner/'.$image_name;
            Image::make($image)->save(base_path($image_location));
            Setting::findOrFail($id)->update([
                'noticebanner' => $image_name,
            ]);
        }
        if($request->hasFile('defaultbanner'))
        {
            if (Setting::findOrFail($id)->defaultbanner != "default.png") {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->defaultbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'defaultbanner' => "default.png",
                ]);
            }
            $image = $request->file('defaultbanner');
            $image_name = "defaultbanner".".".$image->getClientOriginalExtension();
            $image_location = 'public/assets/images/banner/'.$image_name;
            Image::make($image)->save(base_path($image_location));
            Setting::findOrFail($id)->update([
                'defaultbanner' => $image_name,
            ]);
        }

        if($request->meta_description)
        {
            Setting::findOrFail($id)->update([
                'meta_description' => $request->meta_description
            ]);
        }
        if($request->meta_keyword)
        {
            Setting::findOrFail($id)->update([
                'meta_keyword' => $request->meta_keyword
            ]);
        }
        if($request->google_analytics)
        {
            Setting::findOrFail($id)->update([
                'google_analytics' => $request->google_analytics
            ]);
        }


        if($request->research_description)
        {
            $research_section = [
                'title'=> $request->title,
                'research_description'=> $request->research_description,
                'section_1' => [
                    'section_1_count' => $request->section_1_count,
                    'section_1_title' => $request->section_1_title,
                    'section_1_description' => $request->section_1_description,
                ],
                'section_2' => [
                    'section_2_count' => $request->section_2_count,
                    'section_2_title' => $request->section_2_title,
                    'section_2_description' => $request->section_2_description,
                ],
                'section_3' => [
                    'section_3_count' => $request->section_3_count,
                    'section_3_title' => $request->section_3_title,
                    'section_3_description' => $request->section_3_description,
                ],
            ] ;
            $research = json_encode($research_section);

            Setting::findOrFail($id)->update([
                'home_research' => $research
            ]);

        }





        return back();

    }
}
