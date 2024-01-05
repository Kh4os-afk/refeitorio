<div>
    <div class="row">
        <div class="col-md-4">
            <div class="tile">
                <form wire:submit="submit">
                    <h3 class="tile-title">Adicionar Filial</h3>
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label">Codigo Filial</label>
                            <input class="form-control @error('branchcod') is-invalid @enderror" type="number" placeholder="1" step="1" wire:model="branchcod">
                            @error('branchcod')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Filial</label>
                            <input class="form-control @error('branch') is-invalid @enderror" type="text" placeholder="Betania" wire:model="branch">
                            @error('branch')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Salvar
                        </button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#" wire:click="resetar"><i class="fa fa-fw fa-lg fa-times-circle"></i>Limpar</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="tile">
                <h3 class="tile-title">Filiais</h3>
                <div class="tile-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Cod Filial</th>
                            <th>Filial</th>
                            <th>Criado</th>
                            <th>Alterado</th>
                            <th>Editar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($branches as $branch)
                            <tr wire:key="{{ $branch->id }}">
                                <td>{{ $branch->id }}</td>
                                <td>{{ $branch->branch }}</td>
                                <td>{{ \Carbon\Carbon::parse($branch->created_at)->format('d/m/Y H:i') }}</td>
                                <td>{{ \Carbon\Carbon::parse($branch->updated_at)->format('d/m/Y H:i') }}</td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" wire:click="editar({{ $branch->id }})" data-target="#exampleModal{{ $branch->id }}">
                                        <i class="fa fa-pencil-square-o mr-0" aria-hidden="true"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div wire:ignore.self class="modal fade" id="exampleModal{{ $branch->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Editar Filial {{ $branch->branch }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form wire:submit="submitEdit">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label class="control-label">Codigo Filial</label>
                                                            <input class="form-control @error('newbranchcod') is-invalid @enderror" type="number" placeholder="1" step="1" wire:model="newbranchcod" disabled>
                                                            @error('newbranchcod')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Filial</label>
                                                            <input class="form-control @error('newbranch') is-invalid @enderror" type="text" placeholder="Betania" wire:model="newbranch">
                                                            @error('newbranch')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">
                                                            <i class="fa fa-fw fa-lg fa-check-circle"></i>Salvar
                                                        </button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                            <i class="fa fa-fw fa-lg fa-times-circle"></i>Fechar
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Sem dados!</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="tile-footer"></div>
            </div>
        </div>
    </div>
</div>


