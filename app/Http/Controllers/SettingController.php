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
        $validation = $request->validate([
            'web_logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'mobile_logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'homebanner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'homefooterbanner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'programbanner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'newsbanner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'eventbanner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'departmentbanner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'researchbanner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'aboutbanner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'contactbanner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'facultymemberbanner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'noticebanner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'defaultbanner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        $setting = Setting::findOrFail($id);


        if($request->hasFile('web_logo'))
        {
            if($setting->getFirstMedia('web_logo'))
            {
                $setting->clearMediaCollection('web_logo');
            }
            $setting->addMediaFromRequest('web_logo')->toMediaCollection('web_logo');
            $setting->save();
        }

        if($request->hasFile('mobile_logo'))
        {
            if($setting->getFirstMedia('mobile_logo'))
            {
                $setting->clearMediaCollection('mobile_logo');
            }
            $setting->addMediaFromRequest('mobile_logo')->toMediaCollection('mobile_logo');
            $setting->save();
        }
        if($request->hasFile('homebanner'))
        {
            if($setting->getFirstMedia('homebanner'))
            {
                $setting->clearMediaCollection('homebanner');
            }
            $setting->addMediaFromRequest('homebanner')->toMediaCollection('homebanner');
            $setting->save();
        }
        if($request->hasFile('homefooterbanner'))
        {
            if($setting->getFirstMedia('homefooterbanner'))
            {
                $setting->clearMediaCollection('homefooterbanner');
            }
            $setting->addMediaFromRequest('homefooterbanner')->toMediaCollection('homefooterbanner');
            $setting->save();
        }
        if($request->hasFile('programbanner'))
        {
            if($setting->getFirstMedia('programbanner'))
            {
                $setting->clearMediaCollection('programbanner');
            }
            $setting->addMediaFromRequest('programbanner')->toMediaCollection('programbanner');
            $setting->save();
        }
        if($request->hasFile('newsbanner'))
        {
            if($setting->getFirstMedia('newsbanner'))
            {
                $setting->clearMediaCollection('newsbanner');
            }
            $setting->addMediaFromRequest('newsbanner')->toMediaCollection('newsbanner');
            $setting->save();
        }
        if($request->hasFile('eventbanner'))
        {
            if($setting->getFirstMedia('eventbanner'))
            {
                $setting->clearMediaCollection('eventbanner');
            }
            $setting->addMediaFromRequest('eventbanner')->toMediaCollection('eventbanner');
            $setting->save();
        }
        if($request->hasFile('departmentbanner'))
        {
            if($setting->getFirstMedia('departmentbanner'))
            {
                $setting->clearMediaCollection('departmentbanner');
            }
            $setting->addMediaFromRequest('departmentbanner')->toMediaCollection('departmentbanner');
            $setting->save();
        }
        if($request->hasFile('researchbanner'))
        {
            if($setting->getFirstMedia('researchbanner'))
            {
                $setting->clearMediaCollection('researchbanner');
            }
            $setting->addMediaFromRequest('researchbanner')->toMediaCollection('researchbanner');
            $setting->save();
        }
        if($request->hasFile('aboutbanner'))
        {
            if($setting->getFirstMedia('aboutbanner'))
            {
                $setting->clearMediaCollection('aboutbanner');
            }
            $setting->addMediaFromRequest('aboutbanner')->toMediaCollection('aboutbanner');
            $setting->save();
        }
        if($request->hasFile('contactbanner'))
        {
            if($setting->getFirstMedia('contactbanner'))
            {
                $setting->clearMediaCollection('contactbanner');
            }
            $setting->addMediaFromRequest('contactbanner')->toMediaCollection('contactbanner');
            $setting->save();
        }
        if($request->hasFile('facultymemberbanner'))
        {
            if($setting->getFirstMedia('facultymemberbanner'))
            {
                $setting->clearMediaCollection('facultymemberbanner');
            }
            $setting->addMediaFromRequest('facultymemberbanner')->toMediaCollection('facultymemberbanner');
            $setting->save();
        }
        if($request->hasFile('noticebanner'))
        {
            if($setting->getFirstMedia('noticebanner'))
            {
                $setting->clearMediaCollection('noticebanner');
            }
            $setting->addMediaFromRequest('noticebanner')->toMediaCollection('noticebanner');
            $setting->save();
        }
        if($request->hasFile('defaultbanner'))
        {
            if($setting->getFirstMedia('defaultbanner'))
            {
                $setting->clearMediaCollection('defaultbanner');
            }
            $setting->addMediaFromRequest('defaultbanner')->toMediaCollection('defaultbanner');
            $setting->save();
        }

        if($request->meta_description)
        {
            $setting->meta_description = $request->meta_description;
            $setting->save();
        }
        if($request->meta_keyword)
        {
            $setting->meta_keyword = $request->meta_keyword;
            $setting->save();
        }
        if($request->google_analytics)
        {
            $setting->google_analytics = $request->google_analytics;
            $setting->save();
        }
        if($request->organization_name)
        {
            $setting->organization_name = $request->organization_name;
            $setting->save();
        }

        if($request->facebook && $request->linkedin && $request->youtube)
        {

            $data = [
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
                'youtube' => $request->youtube,
            ];
            $portal = json_encode($data);

            $setting->portal = $portal;
            $setting->save();
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
                $section_1 = HomeSection::findOrFail($id);
                $section_1->clearMediaCollection('part1_image');
                $section_1->addMediaFromRequest('part1_image')->toMediaCollection('part1_image');
            }
            $data = [
                'part1_title' => $request->part1_title,
                'part1_description' => $request->part1_description,
                // 'part1_link_name' => $request->part1_link_name,
                // 'part1_link' => $request->part1_link,
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
                $section_1 = HomeSection::findOrFail($id);
                $section_1->clearMediaCollection('part2_image');
                $section_1->addMediaFromRequest('part2_image')->toMediaCollection('part2_image');
            }
            $data = [
                'part2_title' => $request->part2_title,
                'part2_description' => $request->part2_description,
                // 'part2_link_name' => $request->part2_link_name,
                // 'part2_link' => $request->part2_link,
            ];
            $part2 = json_encode($data);
            HomeSection::findOrFail($id)->update([
                'part2' => $part2
            ]);
        }
        if($request->part3_title)
        {
            if($request->hasFile('part3_image'))
            {
                $section_1 = HomeSection::findOrFail($id);
                $section_1->clearMediaCollection('part3_image');
                $section_1->addMediaFromRequest('part3_image')->toMediaCollection('part3_image');
            }
            $data = [
                'part3_title' => $request->part3_title,
                'part3_description' => $request->part3_description,
                // 'part3_link_name' => $request->part3_link_name,
                // 'part3_link' => $request->part3_link,
            ];
            $part3 = json_encode($data);
            HomeSection::findOrFail($id)->update([
                'part3' => $part3
            ]);
        }
        return back();
    }

}

