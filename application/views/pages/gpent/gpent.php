
		<div class="container">
		    <main class="nav float-right">
                <div  style="width: 380px; margin-top: 100px; ">
        	        <form>
        	            <fieldset>

			                <section class="contet ">
				                <h3>Connexion</h3>
				                <span class="input input--geprologinentr">
					                <input class="input__field input__field--geprologinentr" type="text" id="input-31" />
					                <label class="input__label input__label--geprologinentr" for="input-31">
						                <svg class="graphic graphic--geprologinentr" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
							                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
						                </svg>
						                <span class="input__label-content input__label-content--geprologinentr"> Numéro de téléphone ou adresse e-mail</span>
					                </label>
				                </span>
				                <span class="input input--geprologinentr">
					                <input class="input__field input__field--geprologinentr" type="password" id="input-32" />
					                <label class="input__label input__label--geprologinentr" for="input-32">
						                 <svg class="graphic graphic--geprologinentr" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
							                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
						                 </svg>
						                 <span class="input__label-content input__label-content--geprologinentr"> Mot de passe
						                 </span>
					                </label>
				                </span>
				                <span><input type="checkbox" checked="checked"> <label style="font-size: 70%;">rester connecter</label> | <a href=""><label style="font-size: 70%;">J'ai oublié mon mot de passe</label></a>
				                </span>
			                </section>
		                </fieldset>
		                <fieldset class="tblFooters">
                                 <input value="Se connecter" type="submit" id="input_go" onclick="textpolitiqe();"  style="font-size: 82%;" />
                         
                        </fieldset>
                       
                  
                    </form>
		        </div>
		    </main>
		</div><!-- /container -->
		
		<script>
			(function() {

				if (!String.prototype.trim) {
					(function() {
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>
	
