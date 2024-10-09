<?php

namespace App\Livewire\Budgets;

use App\Models\Budget;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Index extends Component
{
  #[Validate(['required', 'string', 'min: 10'])]
  public $newCustomerName = '';

  public function newBudget()
  {
    print($this->newCustomerName);
    // Budget::create([
    //   'customer_name' => $this->newCustomerName,
    // ]);
  }

  public function render()
  {
    return view('livewire.budgets.index', [
      'budgets' => Budget::query()->get()
    ]);
  }

  // #[Computed()]
  // public function budgets()
  // {
  //   return Budget::query()->get();
  // }

  public function delete($id)
  {
    Budget::find($id)->delete();
    // return redirect()->route('budgets.index');
  }
}
