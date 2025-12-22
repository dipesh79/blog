<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RyanChandler\LaravelCloudflareTurnstile\Rules\Turnstile;

// <-- Import the Validator Facade

class ContactController extends Controller
{
    /**
     * Store a new contact message.
     */
    public function store(Request $request): RedirectResponse
    {
        // Define the specific URL you want to redirect to in all cases.
        $redirectUrl = '/#contact-form';

        // 1. Create the Validator instance manually
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'cf-turnstile-response' => ['required', new Turnstile],
        ]);

        // 2. Check for failure and redirect to the custom URL
        if ($validator->fails()) {
            return redirect($redirectUrl) // Use the redirect URL here
                ->withErrors($validator)  // Pass validation errors back to the session
                ->withInput();            // Flash the input data back
        }

        // 3. Validation passed, proceed with storing data
        $validated = $validator->validated(); // Get the validated data

        try {
            unset($validated['cf-turnstile-response']);
            Contact::create($validated);

            return redirect($redirectUrl)->with('success',
                'Your message has been submitted successfully. We will get back to you soon!');

        } catch (\Exception $e) {
            // Database Error
            \Log::error('Contact Form Submission Error: '.$e->getMessage());

            return redirect($redirectUrl)->with('error',
                'There was an error submitting your message. Please try again later.');
        }
    }
}
