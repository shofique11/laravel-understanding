# Pros of Using Facades
1. Readable Code: Facades make it easy to use services with clean, expressive syntax.
2. Convenience: No need to manage dependency injection or service resolution manually.
3. Global Access: Services are globally accessible through facades.
# How Laravel Facades Work
1. Facade Class: A facade class in Laravel extends the base class Illuminate\Support\Facades\Facade.
2. Underlying Service: Each facade is tied to a service provider, which registers a concrete implementation in the service container.
3. Access Through Static Methods: You use facades like Cache::get() or Log::info(), and Laravel resolves the service instance behind the scenes.
