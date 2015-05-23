<?php namespace App\Commands\Users;
use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;
use Validator;

class ProfileCommand extends Command implements SelfHandling
{
    public $first;
    public $last;
    public $email;
    public $phone;
    public $user;
    public $has_errors;

    function __construct($request,$user)
    {
        $this->first = $request->first;
        $this->last = $request->last;
        $this->email = $request->email;
        $this->phone = $request->phone;
        $this->user = $user;
        $this->has_errors = false;
    }

    /**
     * Execute the command.
     * @return void
     */
    public function handle()
    {
        $v = Validator::make([
            'first'=>$this->first,
            'last'=>$this->last,
            'phone'=>$this->phone,
        ],
        [
            'first' => 'required',
            'last' => 'required',
            'phone' => 'required'
        ]);
        if ($v->fails()) {
            return $this->has_errors = $v->errors();
        }
        $this->user->first = $this->first;
        $this->user->last = $this->last;
        $this->user->phone = $this->phone;
        $this->user->save();
        return $this->has_errors;
    }

}
