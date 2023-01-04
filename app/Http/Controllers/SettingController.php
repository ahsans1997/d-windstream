<?php

namespace App\Http\Controllers;

use App\Models\HomeSection;
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

    public function homesettings()
    {
        return view('admin.homesetting',[
            'setting' => Setting::latest()->first(),
            'homesection' => HomeSection::latest()->first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        if($request->organization_name)
        {
            Setting::findOrFail($id)->update([
                'organization_name' => $request->organization_name,
            ]);
        }

        if($request->hasFile('web_logo'))
        {

            if (Setting::findOrFail($id)->web_logo) {
                $location = 'public/assets/images/'.Setting::findOrFail($id)->web_logo;

                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'web_logo' => "",
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
            if (Setting::findOrFail($id)->mobile_logo) {
                $location = 'public/assets/images/'.Setting::findOrFail($id)->mobile_logo;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'mobile_logo' => "",
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
            if (Setting::findOrFail($id)->homebanner) {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->homebanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'homebanner' => "",
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
            if (Setting::findOrFail($id)->homefooterbanne) {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->homefooterbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'homefooterbanner' => "",
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
            if (Setting::findOrFail($id)->programbanner) {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->programbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'programbanner' => "",
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
            if (Setting::findOrFail($id)->newsbanner) {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->newsbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'newsbanner' => "",
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
            if (Setting::findOrFail($id)->eventbanner) {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->eventbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'eventbanner' => "",
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
            if (Setting::findOrFail($id)->departmentbanner) {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->departmentbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'departmentbanner' => "",
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
            if (Setting::findOrFail($id)->researchbanner) {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->researchbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'researchbanner' => "",
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
            if (Setting::findOrFail($id)->aboutbanner) {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->aboutbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'aboutbanner' => "",
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
            if (Setting::findOrFail($id)->contactbanner) {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->contactbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'contactbanner' => "",
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
            if (Setting::findOrFail($id)->facultymemberbanner) {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->facultymemberbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'facultymemberbanner' => "",
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
            if (Setting::findOrFail($id)->noticebanner) {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->noticebanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'noticebanner' => "",
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
            if (Setting::findOrFail($id)->defaultbanner) {
                $location = 'public/assets/images/banner/'.Setting::findOrFail($id)->defaultbanner;
                unlink(base_path($location));
                Setting::findOrFail($id)->update([
                    'defaultbanner' => "",
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

        if($request->student_portal || $request->teacher_portal)
        {
            $data = [
                'student_portal' => $request->student_portal,
                'teacher_portal' => $request->teacher_portal,
            ];
            $portal = json_encode($data);
            Setting::findOrFail($id)->update([
                'portal' => $portal
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
        if($request->about_description)
        {
            $about_section = [
                'about_title'=> $request->about_title,
                'about_description'=> $request->about_description,
                'about_section_1' => [
                    'about_section_1_title' => $request->about_section_1_title,
                    'about_section_1_count' => $request->about_section_1_count,
                ],
                'about_section_2' => [
                    'about_section_2_title' => $request->about_section_2_title,
                    'about_section_2_count' => $request->about_section_2_count,
                ],
                'about_section_3' => [
                    'about_section_3_title' => $request->about_section_3_title,
                    'about_section_3_count' => $request->about_section_3_count,
                ],
                'about_section_4' => [
                    'about_section_4_title' => $request->about_section_4_title,
                    'about_section_4_count' => $request->about_section_4_count,
                ],
            ] ;
            $about = json_encode($about_section);

            Setting::findOrFail($id)->update([
                'home_about' => $about
            ]);
        }
        return back();

    }

    public function section1(Request $request, $id)
    {
        if ($request->section_1_title){
            HomeSection::FindOrFail($id)->update([
                'section_1_title' => $request->section_1_title,
                'section_1_description' => $request->section_1_description
            ]);
        }

        if($request->part1_title)
        {
            if($request->hasFile('part1_image'))
            {
                if (HomeSection::findOrFail($id)->part1_image ) {
                    $location = 'public/assets/images/section_1/'.HomeSection::findOrFail($id)->part1_image;
                    unlink(base_path($location));
                }
                $image = $request->file('part1_image');
                $image_name = "1".".".$image->getClientOriginalExtension();
                $image_location = 'public/assets/images/section_1/'.$image_name;
                Image::make($image)->save(base_path($image_location));
                HomeSection::findOrFail($id)->update([
                    'part1_image' => $image_name,
                ]);
            }
            $data = [
                'part1_title' => $request->part1_title,
                'part1_description' => $request->part1_description,
                'part1_link_name' => $request->part1_link_name,
                'part1_link' => $request->part1_link,
            ];
            $part1 = json_encode($data);
            HomeSection::findOrFail($id)->update([
                'part1' => $part1
            ]);
        }
        if($request->part2_title)
        {
            if($request->hasFile('part2_image'))
            {
                if (HomeSection::findOrFail($id)->part2_image ) {
                    $location = 'public/assets/images/section_1/'.HomeSection::findOrFail($id)->part2_image;
                    unlink(base_path($location));
                }
                $image = $request->file('part2_image');
                $image_name = "2".".".$image->getClientOriginalExtension();
                $image_location = 'public/assets/images/section_1/'.$image_name;
                Image::make($image)->save(base_path($image_location));
                HomeSection::findOrFail($id)->update([
                    'part2_image' => $image_name,
                ]);
            }
            $data = [
                'part2_image' => $image_name,
                'part2_title' => $request->part2_title,
                'part2_description' => $request->part2_description,
                'part2_link_name' => $request->part2_link_name,
                'part2_link' => $request->part2_link,
            ];
            $part2 = json_encode($data);
            HomeSection::findOrFail($id)->update([
                'part2' => $part2
            ]);
        }
        if($request->part2_title)
        {
            if($request->hasFile('part3_image'))
            {
                if (HomeSection::findOrFail($id)->part3_image ) {
                    $location = 'public/assets/images/section_1/'.HomeSection::findOrFail($id)->part3_image;
                    unlink(base_path($location));
                }
                $image = $request->file('part3_image');
                $image_name = "3".".".$image->getClientOriginalExtension();
                $image_location = 'public/assets/images/section_1/'.$image_name;
                Image::make($image)->save(base_path($image_location));
                HomeSection::findOrFail($id)->update([
                    'part3_image' => $image_name,
                ]);
            }
            $data = [
                'part1_image' => $image_name,
                'part1_title' => $request->part1_title,
                'part1_description' => $request->part1_description,
                'part1_link_name' => $request->part1_link_name,
                'part1_link' => $request->part1_link,
            ];
            $part3 = json_encode($data);
            HomeSection::findOrFail($id)->update([
                'part3' => $part3
            ]);
        }
        return back();
    }

}

