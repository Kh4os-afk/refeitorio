<div class="row flex justify-content-center">
    <div class="col-md-6">
        <div class="tile">
            <form wire:submit="submit">
                <div class="tile-body">
                    <h3 class="tile-title text-center">Como estava a refeição hoje ?</h3>
                    <nav class="rating flex-row justify-content-center" wire:ignore>
                        <ul>
                            <li class="current" wire:click="setRating(1)">
                                <svg>
                                    <use xlink:href="#star"></use>
                                </svg>
                            </li>
                            <li wire:click="setRating(2)">
                                <svg>
                                    <use xlink:href="#star"></use>
                                </svg>
                            </li>
                            <li wire:click="setRating(3)">
                                <svg>
                                    <use xlink:href="#star"></use>
                                </svg>
                            </li>
                            <li wire:click="setRating(4)"><span></span>
                                <svg>
                                    <use xlink:href="#star"></use>
                                </svg>
                            </li>
                            <li wire:click="setRating(5)"><span></span>
                                <svg>
                                    <use xlink:href="#star"></use>
                                </svg>
                            </li>
                        </ul>
                        <div>
                        <span>
      <svg>
        <use xlink:href="#star"></use>
      </svg>
                        </span>
                        </div>
                    </nav>
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 34" id="star">
                            <path fill="currentColor" d="M19.6859343,0.861782958 L24.8136328,8.05088572 C25.0669318,8.40601432 25.4299179,8.6717536 25.8489524,8.80883508 L34.592052,11.6690221 C35.6704701,12.021812 36.2532905,13.1657829 35.8938178,14.2241526 C35.8056709,14.4836775 35.6647294,14.7229267 35.4795411,14.9273903 L29.901129,21.0864353 C29.5299163,21.4962859 29.3444371,22.0366367 29.3872912,22.5833831 L30.1116131,31.8245163 C30.1987981,32.9368499 29.3506698,33.9079379 28.2172657,33.993502 C27.9437428,34.0141511 27.6687736,33.9809301 27.4085205,33.8957918 L18.6506147,31.0307612 C18.2281197,30.8925477 17.7713439,30.8925477 17.3488489,31.0307612 L8.59094317,33.8957918 C7.51252508,34.2485817 6.34688429,33.6765963 5.98741159,32.6182265 C5.90066055,32.3628116 5.86681029,32.0929542 5.88785051,31.8245163 L6.61217242,22.5833831 C6.65502653,22.0366367 6.46954737,21.4962859 6.09833466,21.0864353 L0.519922484,14.9273903 C-0.235294755,14.0935658 -0.158766688,12.8167745 0.690852706,12.0755971 C0.899189467,11.8938516 1.14297067,11.7555303 1.40741159,11.6690221 L10.1505113,8.80883508 C10.5695458,8.6717536 10.9325319,8.40601432 11.1858308,8.05088572 L16.3135293,0.861782958 C16.9654141,-0.0521682813 18.2488096,-0.274439442 19.1800736,0.365326425 C19.3769294,0.500563797 19.5481352,0.668586713 19.6859343,0.861782958 Z"></path>
                        </symbol>
                        <path class="shadow" d="M18.7022469,29.7633426 L29.1611722,33.6861584 C28.8859085,33.8576358 28.5650147,33.9672494 28.2172657,33.993502 C27.9437428,34.0141511 27.6687736,33.9809301 27.4085205,33.8957918 L18.6506147,31.0307612 C18.2281197,30.8925477 17.7713439,30.8925477 17.3488489,31.0307612 L8.59094317,33.8957918 C7.98083887,34.0953792 7.34281791,33.9989813 6.83864817,33.6859784 L17.2977531,29.7633426 C17.7505234,29.5935537 18.2494766,29.5935537 18.7022469,29.7633426 Z"></path>
                    </svg>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea" class="mt-4"></label>
                    <textarea class="form-control @error('comment') is-invalid @enderror" id="exampleTextarea" placeholder="Deixe um comentario!" rows="3" wire:model.live="comment" ></textarea>
                    @error('comment')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="tile-footer text-center">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle" ></i>Enviar
                    </button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>


