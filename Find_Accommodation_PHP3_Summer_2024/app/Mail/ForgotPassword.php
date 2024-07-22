<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ForgotPassword extends Mailable
{
    use Queueable, SerializesModels;
    public $admin;
    public $token;
    // protected $data;
    /**
     * Create a new message instance.
     */
    public function __construct($data, $token_data)
    {
        // Chuyền dữ liệu cho $admin
        $this->admin = $data;
        $this->token = $token_data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Quên Mật Khẩu',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'layouts.forgot-password',
        );
    }
    // public function build()
    // {
    //     // $data = $this->data;
    //     // return $this->view('layouts.forgot-password', compact('data'));
    //     return $this->view('layouts.forgot-password')
    //         ->with([
    //             'title' => $this->data['title'],
    //             'content' => $this->data['content'],
    //         ]);
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
