<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <h3 class="tile-title">Avaliações do Refeitorio</h3>
                <table id="refeitorio" class="display compact">
                    <thead>
                    <tr class="font-weight-bold">
                        <th>#</th>
                        <th>Nota</th>
                        <th>Comentario</th>
                        <th>Filial</th>
                        <th>Data</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($feedbacks as $feedback)
                        <tr>
                            <td>{{ $feedback->id }}</td>
                            <td>{{ $feedback->rating }}</td>
                            <td>{{ ucfirst(strtolower($feedback->comment)) }}</td>
                            <td>{{  ucwords(strtolower($feedback->filial->branch ?? 'Sem Filial')) }}</td>
                            <td>{{ \Carbon\Carbon::parse($feedback->created_at)->format('d/m/Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td>Sem dados!</td>
                            <td>Sem dados!</td>
                            <td>Sem dados!</td>
                            <td>Sem dados!</td>
                            <td>Sem dados!</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
