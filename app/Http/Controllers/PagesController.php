<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\Newsletter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use App\Mail\QuoteRequestMail;
use App\Mail\PopupFormMail;



class PagesController extends Controller
{
    
    public function index(){
        $clients = Client::all();
        return view('pages.index', ['clients' => $clients]);
    }

    public function aboutus(){
        return view('pages.about-us');
    }

    public function portfolio(){
     $portfolios = Portfolio::all()->groupBy('type');
     return view('pages.portfolio', compact('portfolios'));

    }

    public function contact(){
        return view('pages.contact-us');
    }

    public function sendMail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255', // Valid email
            'mobile' => 'required|numeric|digits:10', // Validates 10 digit number
            'subject' => 'required|string|max:255',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        $data = $request->only(['name', 'email', 'mobile', 'subject', 'message']);
    
        Mail::to('contactus@digilinkers.com')->send(new ContactMessage($data));
    
        return response()->json(['success' => true, 'message' => 'Your message has been sent!']);
    }

    public function socialmediamarketing(){
        return view('pages.social-media-marketing');
    }

    public function searchengineoptimization(){
        return view('pages.search-engine-optimization');
    }

    public function googleadword(){
        return view('pages.google-adword');
    }

    public function brandbuilding() {
        return view('pages.brand-building');
    }
    
    public function websitedesigning(){
        return view('pages.website-designing');
    }

    public function sendQuote(Request $request)
     {
    // Validate input
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|digits:10',
        'requirement' => 'required|string',
        'source_page' => 'nullable|url',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'errors' => $validator->errors()
        ], 422);
    }

    // Prepare the data
    $data = [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
        'requirement' => $request->input('requirement'),
        'source_page' => $request->input('source_page')
    ];

    // Send email or store in DB as needed
    Mail::to('contactus@digilinkers.com')->send(new QuoteRequestMail($data));

    return response()->json(['success' => true, 'message' => 'Your message has been sent!']);
}

    public function ecommerce(){
        return view('pages.e-commerce-website');
    }

    public function wordpressdevelopment(){
        return view('pages.wordpress-development');
    }

    public function appsdevelopment(){
        return view('pages.apps-development');
    }

    public function landingpage(){
        return view('pages.landing-page-design');
    }

    public function shopifydevelopment(){
        return view('pages.shopify-development');
    }

    public function batteryindustry(){
        return view('pages.battery-industry');
    }

    public function evcharger(){
        return view('pages.ev-charger');
    }

    public function travelindustry(){
        return view('pages.travel-industry');
    }

    public function furnitureindustry(){
        return view('pages.furniture-industry');
    }

    public function realstateindustry(){
        return view('pages.real-state-industry');
    }

    public function sendpopup(Request $request){

        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|max:255',
            'mobile' => 'required|digits:10',
        ]);

        Mail::to('contactus@digilinkers.com')->send(new PopupFormMail($validated));

        return response()->json(['success' => true]); // For AJAX
    
    }

      public function blog(){
       $posts = Post::orderBy('id', 'DESC')->get();
        return view('pages.blog', compact('posts'));
    }

    public function show($slug){
        $posts = Post::where('slug', $slug)->firstOrFail();
        return view('pages.details', compact('posts'));
    }

    public function digital_marketing_company() {
          $clients = Client::all();
        return view('pages.landing.digital-marketing.digital-marketing-company',['clients' => $clients]);
    }

    public function digital_marketing_company_thanks() {
        return view('pages.landing.digital-marketing.thankyou');
    }

       public function website_development_company() {
        $clients = Client::all();
        return view('pages.landing.website-development.website-development-company',['clients' => $clients]);
    }

    public function website_development_company_thanks() {
        return view('pages.landing.website-development.thankyou');
    }
    
     public function social_media_marketing(){
         $clients = Client::all();
        return view('pages.landing.socialmedia.social-media-marketing-company', ['clients' => $clients]);
    }

    public function social_media_marketing_thankyou() {
        return view('pages.landing.socialmedia.thankyou');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        Newsletter::create([
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }
    
      public function privacypolicy(){
        return view('pages.privacy-policy');
    }

    public function conference() {
        return view('pages.conference-services');
    }
    
    
}
