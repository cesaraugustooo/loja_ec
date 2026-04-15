<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\Webhook;
use Symfony\Component\HttpFoundation\Response;

use function Laravel\Prompts\error;

class StripeWebHookMidleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {

        try {
            $event = Webhook::constructEvent($request->getContent(), $request->header('Stripe-Signature'), env("SECRET_PAYMENT_WEBHOOK"));

            $request->merge([
                'hookMetadata' => $event->data->object->metadata,
                'amountWebHook' => $event->data->object->amount,
                'paymentIntent' => $event->data->object->payment_intent ?? null,
                'stripeId' => $event->data->object->id
            ]);

            return $next($request);
        } catch (\Throwable $e) {
            Log::error("Requisição de web hook recusada");
            abort(401, "Ação nao autorizada");
        }
    }
}
