<div class="row">
    @if($url)
        @for($i = 0; $i <= 11; $i++)
            <div class="col-md-4">
                <div class="tile text-center justify-content-center">
                    <h3>Avalie o Refeitório</h3>
                    <div class="info">
                        {{ QrCode::size(300)->margin(1)->generate($url) }}
                    </div>
                </div>
            </div>
        @endfor
    @else
        <div class="col-md-3" wire:click="gerarQRCode(14)">
            <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <h4>Shopping Cidade Leste</h4>
                    <p><b>14</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-3" wire:click="gerarQRCode(12)">
            <div class="widget-small info"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
                <div class="info">
                    <h4>Avenida das Torres</h4>
                    <p><b>12</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-3" wire:click="gerarQRCode(10)">
            <div class="widget-small warning"><i class="icon fa fa-files-o fa-3x"></i>
                <div class="info">
                    <h4>Bola do Produtor</h4>
                    <p><b>10</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-3" wire:click="gerarQRCode(9)">
            <div class="widget-small danger"><i class="icon fa fa-star fa-3x"></i>
                <div class="info">
                    <h4>Parque Dez</h4>
                    <p><b>9</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-3" wire:click="gerarQRCode(8)">
            <div class="widget-small danger"><i class="icon fa fa-star fa-3x"></i>
                <div class="info">
                    <h4>Japiim</h4>
                    <p><b>8</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-3" wire:click="gerarQRCode(7)">
            <div class="widget-small warning"><i class="icon fa fa-star fa-3x"></i>
                <div class="info">
                    <h4>Torquato</h4>
                    <p><b>7</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-3" wire:click="gerarQRCode(6)">
            <div class="widget-small info"><i class="icon fa fa-star fa-3x"></i>
                <div class="info">
                    <h4>Cidade de Deus</h4>
                    <p><b>6</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-3" wire:click="gerarQRCode(5)">
            <div class="widget-small primary"><i class="icon fa fa-star fa-3x"></i>
                <div class="info">
                    <h4>Grande Vitoria</h4>
                    <p><b>5</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-3" wire:click="gerarQRCode(4)">
            <div class="widget-small primary"><i class="icon fa fa-star fa-3x"></i>
                <div class="info">
                    <h4>Barreira</h4>
                    <p><b>4</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-3" wire:click="gerarQRCode(3)">
            <div class="widget-small info"><i class="icon fa fa-star fa-3x"></i>
                <div class="info">
                    <h4>Betania</h4>
                    <p><b>3</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-3" wire:click="gerarQRCode(2)">
            <div class="widget-small warning"><i class="icon fa fa-star fa-3x"></i>
                <div class="info">
                    <h4>CONEF</h4>
                    <p><b>2</b></p>
                </div>
            </div>
        </div>
    @endif
</div>
