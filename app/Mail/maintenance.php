<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use File;

class maintenance extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $fileContents;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //$this->replyTo($this->data['email']);
        $this->fileContents = base64_encode(File::get($this->data['image']));
        return $this->view('emails.maintenance')->attachData(base64_decode($this->fileContents), $this->data['type'] . '.jpg');

        //   return $this->view('emails.careers')->attachData($this->data['cv_file'], 'cv.pdf', [
        //       'mime' => 'application/pdf',
        //   ]);
    }
}
