<?php

namespace Database\Seeders;

use App\Models\Department;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            ['name'=>'Textile Engineering','department_short_form'=>'TE','description'=>'B.Sc. in Textile Engineering The large and expanding textile and apparel industry in Bangladesh has been placing an increasing demand of highly skilled manpower that is creating a lot of job opportunities. There are demands for textile graduates in other areas of economic activities also. With the aim to meet this demand and strengthen the technological base of the industry, National Institute of Textile Engineering and Research (NITER); the first Public-Private Partnership education and research institute in Bangladesh is offering B.Sc. in Textile Engineering Course. NITER is dedicated to provide affordable and accessible high quality education that can be best described as a "Centre of excellence".','contact_info'=>'01755060275','social_link'=>'{"facebook":"facebook.com","twiter":"twiter.com","linkdin":"linkdin.com"}','slug'=>'textile-engineering'],
            ['name'=>'Industrial & Production Engineering','department_short_form'=>'IPE','description'=>'Industrial and production Engineering (IPE) is a lucrative subject in both national and global arena. As Bangladesh has full filled the conditions of getting out of least developed country (LDC) and bouncing towards a sustainable, welfare and developed country with massive industrial development, it needs quality, intelligence and innovation in every sector more than ever. Keeping this fact in mind Faculty of Engineering and Technology of University of Dhaka introduced IPE subject in NITER from 2016-2017.','contact_info'=>'01755060275','social_link'=>'{"facebook":"facebook.com","twiter":"twiter.com","linkdin":"linkdin.com"}','slug'=>'industrial-&-production-engineering'],
            ['name'=>'Fashion Design & Apparel Engineering','department_short_form'=>'FDAE','description'=>'Fashion design is the art of applying design, aesthetics and natural beauty to clothing and its accessories. It is influenced by cultural and social attitudes, and has varied over time and place. Fashion designers work in a number of ways in designing clothing and accessories such as bracelets and necklaces. Because of the time required to bring a garment onto the market, designers must at times anticipate changes to consumer tastes.".','contact_info'=>'01755060275','social_link'=>'{"facebook":"facebook.com","twiter":"twiter.com","linkdin":"linkdin.com"}','slug'=>'fashion-design-&-apparel-engineering'],
            ['name'=>'Computer Science & Engineering','department_short_form'=>'CSE','description'=>'National Institute of Textile Engineering and Research commonly known as NITER is a constituent institute of the University of Dhaka. NITER is the first ever Public-Private Partnership (PPP) educational institute of our country running successfully under the prudent management of Bangladesh Textile Mills Association (BTMA). This institute is now offering Bachelor of Science in Computer Science Engineering (CSE). This program aims at providing both modern and practical education in CSE and preparing the students as groomed professionals to meet the ever growing demand of national and international ICT sector. At present students are using three highly modern equipped labs and modern technologies machineries for research purpose. NITER has two computer labs where students work with different types of software. Besides, communication and computer networks Lab has been set up for advanced level communication and networking tasks.','contact_info'=>'01755060275','social_link'=>'{"facebook":"facebook.com","twiter":"twiter.com","linkdin":"linkdin.com"}','slug'=>'computer-science-&-engineering'],
            ['name'=>'Electrical & Electronic Engineering','department_short_form'=>'EEE','description'=>'The Department of Electrical and Electronic Engineering (EEE) at National Institute of Textile Engineering and Research (NITER) is a constituent institute of Dhaka University offers four-year undergraduate degree program in Electrical and Electronic Engineering. The bachelor degree program is spread over 8 semesters with 2 semesters per year. The aim of the degree program is to make the students well equipped with the theoretical and practical knowledge of electrical and electronic Engineering. The program is designed to produce engineering graduates capable of in the following broad areas: Power systems, Communications, Control Systems and Power Electronics. In particular, they will be able to define and diagnose problems, provide and implement electrical engineering solutions in the industry, business and government sectors.','contact_info'=>'01755060275','social_link'=>'{"facebook":"facebook.com","twiter":"twiter.com","linkdin":"linkdin.com"}','slug'=>'electrical-&-electronic-engineering'],

        ];

        Department::insert($departments);
    }
}
