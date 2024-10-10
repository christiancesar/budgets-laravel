<?php

namespace App\Livewire\Budgets;

use App\Models\Budget;
use Livewire\Component;

class Index extends Component
{
  public $newCustomerName = '';
  public $budgets = [];

  public function mount()
  {
    $this->budgets = Budget::all();
  }

  public function newBudget()
  {
    $this->validateOnly('newCustomerName');
    $uuid = fake()->uuid();
    $budget = Budget::create([
      'id' => $uuid,
      'customer_name' => $this->newCustomerName,
      'short_id' => strtoupper(substr($uuid, -5)), // Cria um short_id único
      'status' => 'pendente',
    ]);

    // Limpa o campo de input após a criação
    $this->newCustomerName = '';

    // Atualiza a lista de orçamentos
    $this->budgets[] = $budget;
  }

  public function delete($budget)
  {
    Budget::query()->where('id', '=', $budget)->delete();

    $this->budgets = Budget::all();
  }



  public function render()
  {
    return view('livewire.budgets.index');
  }
}
