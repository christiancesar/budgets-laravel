<div class="budget-list">
  <h2>Orçamentos</h2>
  <div class="content-new-budget">
    <hr>
    <form wire:submit="newBudget">
      <input wire:model="newCustomerName" type="text" placeholder="Informe o nome do cliente">

      @error('newCustomerName')
        <div class="text-red-600 mt-1 text-sm">
            {{ $message }}
        </div>
      @enderror

      <button class="new-budgets-button">
        Novo Orçamento
      </button>
    </form>
    <hr>
  </div>

  <div class="table-content">
    <table>
      <thead>
        <tr>
          <th>Orçamento</th>
          <th>Cliente</th>
          <th>Status</th>
          <th>Criado</th>
          <th>Entregue</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        @foreach($budgets as $budget)
          <tr wire:key="{{$budget->short_id}}">
            <td>{{ $budget->short_id }}</td>
            <td>{{ $budget->customer_name }}</td>
            <td>
                {{ $budget->status }}
            </td>
            <td>{{ $budget->created_at }}</td>
            <td>{{ $budget->delivery_at }}</td>
            <td class="actions">
              <button
                type="button"
                class="delete-budget"
                wire:click="delete({{ $budget->id }})"
              >
                <i class="ph ph-trash"></i>
              </button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>
