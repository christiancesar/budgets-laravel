<div class="budget-list">
  <h2>Orçamentos</h2>
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
        @foreach($this->budgets as $budget)
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
                wire:click="delete({{ $budget}})"
              >
                <i class="ph ph-trash"></i>
              </button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <button class="new-budgets-button">
    Novo Orçamento
  </button>
</div>
