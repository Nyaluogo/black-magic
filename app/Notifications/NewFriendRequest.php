<?php

namespace Black_Magik\Notifications;
use Black_Magik\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewFriendRequest extends Notification implements ShouldQueue
{
    use Queueable;

    public $user;
    public $avatar;

    public function __construct($user)
    {
        $this->user = $user;
         $this->avatar = $avatar;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','broadcast','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('You received a new friend request from .' . $this->user->name)
                    ->action('View profile', route('profile',['slug' => $this->user->slug ]))
                    ->line('Thank you for using Black Market');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'avatar' =>  $this->user->avatar,
            'name' => $this->user->name,
            'message' => $this->user->name . ' sent you a friend request.'
        ];
    }
}
