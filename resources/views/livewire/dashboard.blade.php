<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <table id="refeitorio" class="display compact">
                    <thead>
                    <tr class="font-weight-bold">
                        <th>#</th>
                        <th>Nota</th>
                        <th>Comentario</th>
                        <th>Filial</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($feedbacks as $feedback)
                        <tr>
                            <td>{{ $feedback->id }}</td>
                            <td>{{ $feedback->rating }}</td>
                            <td>{{ $feedback->comment }}</td>
                            <td>{{ $feedback->codfilial }}</td>
                        </tr>
                    @empty
                        <tr>
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
