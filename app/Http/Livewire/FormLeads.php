<?php

namespace App\Http\Livewire;

use App\Mail\LeadNew;
use App\Models\Development;
use App\Models\Lead;
use Livewire\Component;
use HubSpot\Factory;
use Illuminate\Support\Facades\Mail;

class FormLeads extends Component
{
    public $name;
    public $last_name;
    public $email;
    public $phone;
    public $policy=false;
    public $user_id=3;
    public $status_id=1;
    public $development_id='';
    public $amount= '';
    public $time;
    public $first_time='';

    protected $rules = [
        'name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:leads,email',
        'phone' => 'required|regex:/[0-9]{9}/',
        'policy' => 'accepted',
        'time' => 'required',
        'amount' => 'required',
    ];

    protected $messages = [
        'phone.required' => 'El campo teléfono es un campo obligatorio.',
    ];

    public function submit(){

        $this->validate();
        $development = Development::find($this->development_id);

        $hubspot = Factory::createWithAccessToken(config('services.hubspot.key'));

        $properties = [
            "email" => $this->email,
            "firstname" => $this->name,
            "lastname" => $this->last_name,
            "phone" => $this->phone,
            "horario" => $this->time,
            "monto" => $this->amount,
            "primera_inversion" => $this->first_time,
            "desarrollo" => $development->name,
        ];

        $contactInput = new \HubSpot\Client\Crm\Contacts\Model\SimplePublicObjectInput();
        $contactInput->setProperties($properties);

        $contact = $hubspot->crm()->contacts()->basicApi()->create($contactInput);

        $lead = Lead::create([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'user_id' => $this->user_id,
            'status_id' => $this->status_id,
            'development_id' => $this->development_id,
            'time' => $this->time,
            'amount' => $this->amount,
            'first_time' => $this->first_time,
        ]);

        session()->flash("message", "Tus datos han sido enviados correctamente.");
        Mail::to(['marencocode@gmail.com','javiergutierrez@domeninmobiliaria.com','jacobodorantes@domeninmobiliaria.com'])->send(new LeadNew(Lead::find($lead->id)));
        $this->reset('name','last_name','email','phone','policy','development_id','time','amount','first_time');
    }

    public function render()
    {
        return view('livewire.form-leads',[
            'developments' => Development::all(),
        ]);
    }
}
