<?php

namespace App\Http\Controllers;

use App\Mail\SubscriptionMail;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SubscriptionController extends Controller
{
    public function create(Request $request)
    {
        // Validação
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:subscriptions',
        ]);

        // Sanitização e Normalização do e-mail
        $sanitizedEmail = Str::lower(trim($request->input('email')));

        // Criação da inscrição
        $subscription = Subscription::create([
            'name' => $request->input('name'),
            'email' => $sanitizedEmail
        ]);

        // Envie um e-mail
        $this->sendEmail($subscription);

        // Retorne o ID da inscrição em JSON
        return response()->json(['id' => $subscription->id]);
    }

    public function list()
    {
        // Listar inscrições em JSON
        $subscriptions = Subscription::all(['name', 'email']);
        return response()->json($subscriptions);
    }

    public function sendEmail(Subscription $subscription)
    {
        Mail::to($subscription->email)->send(new SubscriptionMail($subscription->name));
    }

    public function sendHelloEmail($id)
    {
        // Encontrar a inscrição pelo ID
        $subscription = Subscription::find($id);

        if (!$subscription) {
            return response()->json(['error' => 'Inscrição não encontrada.'], 404);
        }

        try {
            Mail::to($subscription->email)->send(new \App\Mail\SubscriptionMail($subscription->name));
        } catch (\Exception) {
            return response()->json(['error' => 'Erro ao enviar e-mail.'], 500);
        }

        return response()->json(['message' => 'E-mail enviado com sucesso.']);
    }
}
