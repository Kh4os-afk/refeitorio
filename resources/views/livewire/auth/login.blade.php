<div>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h1>Refeitorio</h1>
        </div>
        <div class="login-box">
            <form class="login-form" wire:submit="login">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Entrar</h3>
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email" autofocus wire:model="email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="control-label">Senha</label>
                    <input class="form-control" type="password" placeholder="Password" wire:model="password">
                </div>
                <div class="form-group">
                    <div class="utility">
                        <div class="animated-checkbox">
                            <label><input type="checkbox" wire:model="remember"><span class="label-text">Permanecer Logado</span> </label>
                        </div>
                        <p class="semibold-text mb-2"><a href="#">Esqueceu a senha ?</a></p>
                    </div>
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block" style="background-color: #e2192e; border-color: #e2192e"><i class="fa fa-sign-in fa-lg fa-fw"></i>Entrar</button>
                </div>
            </form>
        </div>
    </section>

</div>
