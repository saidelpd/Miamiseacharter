<?php namespace App\Commands\Services;

use App\Commands\Command;
use Validator, Carbon\Carbon;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Http\Model\Services;
use App\Http\Model\Boats;


class AvailableHoursCommand extends Command implements SelfHandling
{

    public $id;
    public $date;
    public $has_error;
    public $hours;

    function __construct($id, $date)
    {
        $this->id = $id;
        $this->has_error = false;
        $this->date = $date;
    }

    /**
     * Execute the command.
     * @return void
     */
    public function handle()
    {
        $validation = $this->validate();
        if ($validation->fails()) {
            $this->has_error = true;
            return $this;
        }
        $this->date = Carbon::createFromFormat('m/d/Y', $this->date);

        $services = Services::with('times')->find($this->id);
        if (!$services->special_price)
            $this->getHours($services);
        else
            $this->getSpecialHours($services);
        return $this;
    }

    /**
     * Validate entry
     * @return \Illuminate\Validation\Validator
     */
    public function validate()
    {
        $v = Validator::make((array)$this, [
            'id' => 'required|exists:services',
            'date' => 'required|date_format:m/d/Y'
        ]);
        return $v;
    }

    /**
     * Get Available's Hours for simple service
     * @param $services
     */
    public function getHours($services)
    {

        $this->hours = [];
        if (count($services->times)) {
            foreach ($services->times as $times) {
                $time = $times->GetTime($this->date);
                if (Boats::getFree($time['start'], $time['end'])) {
                    $this->hours[$times->id] = $time['start']->format('h:i A') . " To " . $time['end']->format('h:i A');
                }
            }
        }
    }

    /**
     * Get Available's Hours for special service
     * @param $services
     */
    public function getSpecialHours($services)
    {
        if (count($services->times)) {
            foreach ($services->times as $times) {
                $time = $times->GetTime($this->date);
                $services->load(['specialPrices' => function ($s) {
                    $s->orderBy('special_hour');
                }]);
                if (Boats::getFree($time['start'], $time['end'])) {
                    foreach ($services->specialPrices as $special_price) {
                        switch ($services->id) {
                            /**
                             * Case Travel
                             */
                            case 6:
                                $time_aux = $time['start']->copy();
                                $this->hours[$times->id . '-' . $special_price->id] = $time['start']->format('h:i A') . " To " . $time_aux->addHours($special_price->special_hour)->format('h:i A');
                                break;
                            /**
                             * Night At Marina
                             */
                            case 3:
                                $this->hours[$times->id] = $time['start']->format('h:i A') . " To " . $time['end']->format('h:i A');
                                $this->hours[$times->id . '-' . $special_price->id] = $time['start']->format('h:i A') . " To " . $time['end']->addHours($special_price->special_hour)->format('h:i A');
                                break;
                        }
                    }
                }
            }
        }
    }

}
