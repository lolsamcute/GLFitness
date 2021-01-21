<?php

namespace App\Http\Controllers;

use App\BecomeAMember;
use App\Appointment;
use App\Contact;
use App\Marketer;
use Illuminate\Http\Request;
use App\Mail\AppointmentNotification;
use App\Mail\BecomeAMemberNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Package;

class WelcomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function glfitness()
    {
        $pageTitle = "Greatlife Fitness & Lifestyle Center";
        $pageDescription = "Greatlife Fitness Gym & Fitness";
        $pageKeywords = "Greatlife, Fitness, Gym, Fitness";
        $pageAuthor = "Animoplasty";
        $packages = Package::all();

        return view('welcome', [
                'packages' => $packages,
                'pageTitle' => $pageTitle,
                'pageDescription' => $pageDescription,
                'pageKeywords' => $pageKeywords,
                'pageAuthor' => $pageAuthor,

              ]);
    }


    public function about()
    {
        $pageTitle = "About | Greatlife Fitness & Lifestyle Center";
        $pageDescription = "Greatlife Fitness Gym & Fitness";
        $pageKeywords = "Greatlife, Fitness, Gym, Fitness";
        $pageAuthor = "Animoplasty";
        return view('about', [
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'pageKeywords' => $pageKeywords,
            'pageAuthor' => $pageAuthor,

          ]);
    }


    public function trainers()
    {
        $pageTitle = "Trainers | Greatlife Fitness & Lifestyle Center";
        $pageDescription = "Greatlife Fitness Gym & Fitness";
        $pageKeywords = "Greatlife, Fitness, Gym, Fitness";
        $pageAuthor = "Animoplasty";
        return view('trainers.trainers', [
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'pageKeywords' => $pageKeywords,
            'pageAuthor' => $pageAuthor,

          ]);
    }



        public function food_nutrition()
    {
        $pageTitle = "Gym | Greatlife Fitness & Lifestyle Center";
        $pageDescription = "Greatlife Fitness Gym & Fitness";
        $pageKeywords = "Greatlife, Fitness, Gym, Fitness";
        $pageAuthor = "Animoplasty";
        return view('food_nutrition', [
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'pageKeywords' => $pageKeywords,
            'pageAuthor' => $pageAuthor,

          ]);
    }

            public function games_vr()
    {
        $pageTitle = "Gym | Greatlife Fitness & Lifestyle Center";
        $pageDescription = "Greatlife Fitness Gym & Fitness";
        $pageKeywords = "Greatlife, Fitness, Gym, Fitness";
        $pageAuthor = "Animoplasty";
        return view('games_vr', [
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'pageKeywords' => $pageKeywords,
            'pageAuthor' => $pageAuthor,

          ]);
    }

    public function lounge_swimming()
    {
        $pageTitle = "Lounge & Swimming | Greatlife Fitness & Lifestyle Center";
        $pageDescription = "Greatlife Fitness Gym & Fitness";
        $pageKeywords = "Greatlife, Fitness, Gym, Fitness";
        $pageAuthor = "Animoplasty";
        return view('lounge_swimming', [
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'pageKeywords' => $pageKeywords,
            'pageAuthor' => $pageAuthor,

          ]);
    }

    public function beauty_studio()
    {
        $pageTitle = "Beauty Studio | Greatlife Fitness & Lifestyle Center";
        $pageDescription = "Greatlife Fitness Gym & Fitness";
        $pageKeywords = "Greatlife, Fitness, Gym, Fitness";
        $pageAuthor = "Animoplasty";
        return view('beauty_studio', [
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'pageKeywords' => $pageKeywords,
            'pageAuthor' => $pageAuthor,

          ]);
    }


      public function gym()
    {
        $pageTitle = "Gym | Greatlife Fitness & Lifestyle Center";
        $pageDescription = "Greatlife Fitness Gym & Fitness";
        $pageKeywords = "Greatlife, Fitness, Gym, Fitness";
        $pageAuthor = "Animoplasty";
        return view('gym', [
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'pageKeywords' => $pageKeywords,
            'pageAuthor' => $pageAuthor,

          ]);
    }


    public function trainersView()
    {
        $pageTitle = "Trainers | Greatlife Fitness & Lifestyle Center";
        $pageDescription = "Greatlife Fitness Gym & Fitness";
        $pageKeywords = "Greatlife, Fitness, Gym, Fitness";
        $pageAuthor = "Animoplasty";

        return view('trainers.trainersView', [
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'pageKeywords' => $pageKeywords,
            'pageAuthor' => $pageAuthor,

          ]);
    }

    public function classes()
    {
        $pageTitle = "Trainers | Greatlife Fitness & Lifestyle Center";
        $pageDescription = "Greatlife Fitness Gym & Fitness";
        $pageKeywords = "Greatlife, Fitness, Gym, Fitness";
        $pageAuthor = "Greatlife";
        return view('classes.classes', [
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'pageKeywords' => $pageKeywords,
            'pageAuthor' => $pageAuthor,

          ]);
    }


    public function contact()
    {
        $pageTitle = "Contact Us | Greatlife Fitness & Lifestyle Center";
        $pageDescription = "Greatlife Fitness Gym & Fitness";
        $pageKeywords = "Greatlife, Fitness, Gym, Fitness";
        $pageAuthor = "Animoplasty";
        return view('contact', [
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'pageKeywords' => $pageKeywords,
            'pageAuthor' => $pageAuthor,

          ]);
    }




    public function contactPost(Request  $request)
    {

        Contact::create([

                    'name' => $request->name,
                    'email' => $request->email,
                    'subject' => $request->subject,
                    'message' => $request->message,

                ]);

        flashy()->success('Thanks for contacting us.');
        return back();
    }


    public function become_a_member()
    {
        $pageTitle = "Become a Member | Greatlife Fitness & Lifestyle Center";
        $pageDescription = "Greatlife Fitness Gym & Fitness";
        $pageKeywords = "Greatlife, Fitness, Gym, Fitness";
        $pageAuthor = "Animoplasty";
        $packages = Package::all();

        return view('become_a_member', [
            'packages' => $packages,
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'pageKeywords' => $pageKeywords,
            'pageAuthor' => $pageAuthor,

          ]);
    }


    public function become_a_member_form()
    {
        $pageTitle = "Gold Member | Greatlife Fitness & Lifestyle Center";
        $pageDescription = "Greatlife Fitness Gym & Fitness";
        $pageKeywords = "Greatlife, Fitness, Gym, Fitness";
        $pageAuthor = "Animoplasty";
        $packages = Package::all();
        $marketers = Marketer::all();

        return view('becomeAMemberForm', [
            'packages' => $packages,
            'marketers' => $marketers,
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'pageKeywords' => $pageKeywords,
            'pageAuthor' => $pageAuthor,

          ]);
    }



    public function become_a_memberPost(Request  $request)
    {

        $geneAdmBAMID = 'GLBAM'.'-'. str_random(7);

        BecomeAMember::create([
                    'member_id' => $geneAdmBAMID,
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'membership_package' => $request->membership_package,
                    'address' => $request->address,
                    'amount' => $request->amount,
                    'packages' => $request->packages,
                    'ipaddress' => \Request::ip(),
                     'duration' => $request->duration,
                    'paymentMethod' => $request->paymentMethod,
                      'hearAbout' => $request->hearAbout,
                    'hearAboutOther' => $request->hearAboutOther,

                ]);

                  $first_name = $request['first_name'];
                 $last_name = $request['last_name'];
                $email = $request['email'];
                $phone = $request['phone'];
                 $member_id = $request['member_id'];

        Mail::to($request['email'])->send(new BecomeAMemberNotification($first_name, $last_name, $email, $phone, $member_id));


        return redirect()->route('paymentCheckout',['member_id'=>$geneAdmBAMID]);
    }






    // public function become_a_memberGold()
    // {
    //     $pageTitle = "Silver Member | Greatlife Fitness & Lifestyle Center";
    //     $pageDescription = "Greatlife Fitness Gym & Fitness";
    //     $pageKeywords = "Greatlife, Fitness, Gym, Fitness";
    //     $pageAuthor = "Animoplasty";
    //     return view('becomeAMemberGold', [
    //         'pageTitle' => $pageTitle,
    //         'pageDescription' => $pageDescription,
    //         'pageKeywords' => $pageKeywords,
    //         'pageAuthor' => $pageAuthor,

    //       ]);
    // }

    public function paymentCheckout($member_id)
    {
        $pageTitle = "Payment Checkout | Greatlife Fitness & Lifestyle Center";
        $pageDescription = "Greatlife Fitness Gym & Fitness";
        $pageKeywords = "Greatlife, Fitness, Gym, Fitness";
        $pageAuthor = "Animoplasty";


        $become_a_member = BecomeAMember::where([
            ['member_id', '=', $member_id,],
        ])->first();

        // $become_a_member = BecomeAMember::find($id);

        return view('payment', [
            'become_a_member' => $become_a_member,
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'pageKeywords' => $pageKeywords,
            'pageAuthor' => $pageAuthor,

          ]);
    }


    public function appointments()
    {
        $pageTitle = "Greatlife Fitness & Lifestyle Center";
        $pageDescription = "Greatlife Fitness Gym & Fitness";
        $pageKeywords = "Greatlife, Fitness, Gym, Fitness";
        $pageAuthor = "Animoplasty";

        $marketers = Marketer::all();

        return view('appointment', [

            'marketers' => $marketers,

            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'pageKeywords' => $pageKeywords,
            'pageAuthor' => $pageAuthor,
         ]);
    }

    public function appointmentsPost(Request  $request)
    {

        $geneAdmUserID = 'GLSPA'.'-'. str_random(5);

        Appointment::create([
                    'spa_id' => $geneAdmUserID,
                    'full_name' => $request->full_name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'membership_package' => $request->membership_package,
                    'address' => $request->address,
                    'sex' => $request->sex,
                    'packages' => $request->packages,
                    'date' => $request->date,
                    'ipaddress' => \Request::ip(),

                ]);

                $full_name = $request['full_name'];
                $email = $request['email'];
                $phone = $request['phone'];
                $date = $request['date'];
                $spa_id = $request['spa_id'];

        Mail::to($request['email'])->send(new AppointmentNotification($full_name, $email, $phone, $spa_id, $date));

        flashy()->success('Spa Appointment Submited Successfully, our team will get back to you shortly');
        return back();
    }


    // public function cart_view($id)
    // {
    //     $carts = Cart::find($id);

    //     $carts = DB::table('carts')->latest()->first();
    //     $products = DB::table('products')->latest()->first();
    //     return view('cart_view', [

    //        'carts' => $carts,
    //         'products' => $products,

    //     ]);
    // }




}
