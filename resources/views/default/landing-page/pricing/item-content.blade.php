<x-price-table
    currency="{{ $currency }}"
    featured="{{ $plan->is_featured == 1 }}"
    title="{!! $plan->name !!}"
    price="{{ formatPrice($plan->price, 2) }}"
    period="{{ $period }}"
    buttonLabel="{{ __('Select') }} {{ __($plan->name) }}"
    buttonLink="{{ route('register', ['plan' => $plan->id]) }}"
    activeFeatures="{{ $plan->features }}"
    inactiveFeatures=""
    totalWords="{{ $plan->total_words }}"
    totalImages="{{ $plan->total_images }}"
    trialDays="{{ $plan->trial_days }}"
/>
