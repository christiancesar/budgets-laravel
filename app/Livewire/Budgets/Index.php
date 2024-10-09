<?php

namespace App\Livewire\Budgets;

use App\Models\Budget;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{

  public function render()
  {
    return view('livewire.budgets.index');
  }

  #[Computed()]
  public function budgets()
  {
    return Budget::query()->get();
  }

  public function delete($budget)
  {

    Budget::query()->where('id', '=', $budget)->delete();
  }
}
