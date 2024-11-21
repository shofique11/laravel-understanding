# Laravel service provider
To implement the Laravel Service Container in a project, follow these steps. This involves binding interfaces to implementations and leveraging dependency injection. 

# File: app/Contracts/PaymentGateway.php

namespace App\Contracts;

interface PaymentGateway
{
    public function charge($amount): string;
}

# File: app/Services/StripePaymentGateway.php

namespace App\Services;

use App\Contracts\PaymentGateway;

class StripePaymentGateway implements PaymentGateway
{
    public function charge($amount): string
    {
        return "Charging {$amount} using Stripe.";
    }
}

# File: app/Providers/AppServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\PaymentGateway;
use App\Services\StripePaymentGateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        // Bind the PaymentGateway interface to StripePaymentGateway implementation
        $this->app->bind(PaymentGateway::class, StripePaymentGateway::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        //
    }
}

# File: app/Http/Controllers/OrderController.php

namespace App\Http\Controllers;

use App\Contracts\PaymentGateway;

class OrderController extends Controller
{
    protected $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function processOrder()
    {
        $response = $this->paymentGateway->charge(500);
        return response()->json(['message' => $response]);
    }
}


# File: routes/web.php
use App\Http\Controllers\OrderController;

Route::get('/order', [OrderController::class, 'processOrder']);
