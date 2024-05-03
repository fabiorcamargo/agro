<div class="hero min-h-screen bg-base-200 pt-20">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="text-center lg:text-left">
      <h1 class="text-5xl font-bold">Inscreva-se Agora!</h1>
      <p class="py-6">Informações de Contato:</p>
    </div>


    <head>
      <title>Validação de Número de telefone Brasileiro</title>

      <script type="text/javascript">
        /** This section is only needed once per page if manually copying **/
        if (typeof MauticSDKLoaded == 'undefined') {
            var MauticSDKLoaded = true;
            var head            = document.getElementsByTagName('head')[0];
            var script          = document.createElement('script');
            script.type         = 'text/javascript';
            script.src          = 'https://agro.meusestudosead.com.br/media/js/mautic-form.js?v9da52bf7';
            script.onload       = function() {
                MauticSDK.onLoad();
            };
            head.appendChild(script);
            var MauticDomain = 'https://agro.meusestudosead.com.br';
            var MauticLang   = {
                'submittingMessage': "Por favor, aguarde..."
            }
        }else if (typeof MauticSDK != 'undefined') {
            MauticSDK.onLoad();
        }
      </script>



      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
        $(document).ready(function() {
          // Desabilitar o botão de envio inicialmente
          $('#mauticform_input_agro_submit').prop('disabled', true);
      
          $('#mauticform_input_agro_telefone').on('input', function() {
            var telInput = $(this);
            var formattedTel = formatPhoneNumber(telInput.val());
            telInput.val(formattedTel);
            checkPhoneNumberValidity();
          });
      
          function formatPhoneNumber(phoneNumber) {
            // Remove all non-digit characters
            var cleaned = phoneNumber.replace(/\D/g, '');
            // Apply Brazilian phone number format
            var formatted = cleaned.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
            return formatted;
          }
      
          function checkPhoneNumberValidity() {
            var telInput = $('#mauticform_input_agro_telefone');
            var telValue = telInput.val().replace(/\D/g, ''); // Remove non-digit characters
            // Habilitar ou desabilitar o botão de envio com base na validade do número de telefone
            if (telValue.length === 11) {
              $('#mauticform_input_agro_submit').prop('disabled', false);
            } else {
              $('#mauticform_input_agro_submit').prop('disabled', true);
            }
          }
        });
      </script>

    </head>

    <div class="card flex-shrink-0 w-full max-w-sm shadow-md bg-base-100">
      <div class="card-body">
        <x-authentication-card-logo />

        <style type="text/css" scoped>
          .mauticform-field-hidden {
            display: none
          }
        </style>


        <style type="text/css" scoped>
          .mauticform_wrapper {
            max-width: 600px;
            margin: 10px auto;
          }

          .mauticform-innerform {}

          .mauticform-post-success {}

          .mauticform-name {
            font-weight: bold;
            font-size: 1.5em;
            margin-bottom: 3px;
          }

          .mauticform-description {
            margin-top: 2px;
            margin-bottom: 10px;
          }

          .mauticform-error {
            margin-bottom: 10px;
            color: red;
          }

          .mauticform-message {
            margin-bottom: 10px;
            color: green;
          }

          .mauticform-row {
            display: block;
            margin-bottom: 20px;
          }

          .mauticform-label {
            font-size: 1.1em;
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
          }

          .mauticform-row.mauticform-required .mauticform-label:after {
            color: #e32;
            content: " *";
            display: inline;
          }

          .mauticform-helpmessage {
            display: block;
            font-size: 0.9em;
            margin-bottom: 3px;
          }

          .mauticform-errormsg {
            display: block;
            color: red;
            margin-top: 2px;
          }

          .mauticform-selectbox,
          .mauticform-input,
          .mauticform-textarea {
            width: 100%;
            padding: 0.5em 0.5em;
            border: 1px solid #CCC;
            background: #fff;
            box-shadow: 0px 0px 0px #fff inset;
            border-radius: 4px;
            box-sizing: border-box;
          }

          .mauticform-checkboxgrp-row {}

          .mauticform-checkboxgrp-label {
            font-weight: normal;
          }

          .mauticform-checkboxgrp-checkbox {}

          .mauticform-radiogrp-row {}

          .mauticform-radiogrp-label {
            font-weight: normal;
          }

          .mauticform-radiogrp-radio {}

          .mauticform-button-wrapper .mauticform-button.btn-default,
          .mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-default {
            color: #5d6c7c;
            background-color: #ffffff;
            border-color: #dddddd;
          }

          .mauticform-button-wrapper .mauticform-button,
          .mauticform-pagebreak-wrapper .mauticform-pagebreak {
            display: inline-block;
            margin-bottom: 0;
            font-weight: 600;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            white-space: nowrap;
            padding: 6px 12px;
            font-size: 13px;
            line-height: 1.3856;
            border-radius: 3px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
          }

          .mauticform-button-wrapper .mauticform-button.btn-default[disabled],
          .mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-default[disabled] {
            background-color: #ffffff;
            border-color: #dddddd;
            opacity: 0.75;
            cursor: not-allowed;
          }

          .mauticform-pagebreak-wrapper .mauticform-button-wrapper {
            display: inline;
          }
        </style>

        <style type="text/css" scoped>
          .mauticform-field-hidden {
            display: none
          }
        </style>
        <div id="mauticform_wrapper_agro" class="mauticform_wrapper">
          <form autocomplete="false" role="form" method="post"
            action="https://agro.meusestudosead.com.br/form/submit?formId=1" id="mauticform_agro"
            data-mautic-form="agro" enctype="multipart/form-data">
            <div class="mauticform-error" id="mauticform_agro_error"></div>
            <div class="mauticform-message mb-4" id="mauticform_agro_message"> </div>
            <div class="mauticform-innerform">
              <div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">

                <div id="mauticform_agro_nome"
                  class="mauticform-row mauticform-text mauticform-field-1 mauticform-required" data-validate="nome"
                  data-validation-type="text">
                  <label id="mauticform_label_agro_nome" for="mauticform_input_agro_nome"
                    class="mauticform-label">Nome</label>

                  <input type="text" name="mauticform[nome]" value="" id="mauticform_input_agro_nome"
                    class="mauticform-input input input-bordered w-full max-w-xs ">

                  <span class="mauticform-errormsg" style="display:none;">Isso é obrigatório.</span>
                </div>

                <div id="mauticform_agro_telefone"
                  class="mauticform-row mauticform-telefone mauticform-field-3 mauticform-required pt-2" data-validate="telefone"
                  data-validation-type="telefone">
                  <label id="mauticform_label_agro_telefone" for="mauticform_input_agro_telefone"
                    class="mauticform-label">Telefone</label>

                  <div class="relative mb-2">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                      <div class="w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        +55
                      </div>
                    </div>
                    <input type="text" name="mauticform[telefone]" value="" id="mauticform_input_agro_telefone"
                      class="ps-12 input input-bordered w-full max-w-xs" required>
                    <span class="mauticform-errormsg" style="display:none;">Isso é obrigatório.</span>
                  </div>
                </div>

                <div id="mauticform_agro_email"
                  class="mauticform-row mauticform-email mauticform-field-3 mauticform-required" data-validate="email"
                  data-validation-type="email">
                  <label id="mauticform_label_agro_email" for="mauticform_input_agro_email"
                    class="mauticform-label">Email</label>

                  <input type="email" name="mauticform[email]" value="" id="mauticform_input_agro_email"
                    class="mauticform-input input input-bordered w-full max-w-xs" required>

                  <span class="mauticform-errormsg" style="display:none;">Isso é obrigatório.</span>
                </div>

                <div id="mauticform_agro_idade1" class="mauticform-row mauticform-select mauticform-field-2 pt-2">
                  <label id="mauticform_label_agro_idade1" for="mauticform_input_agro_idade1" class="mauticform-label">Idade</label>  
                  <select name="mauticform[idade1]" value="" id="mauticform_input_agro_idade1" class="mauticform-selectbox select select-bordered w-full max-w-xs" required>
                    <option value=""></option>    <option value="13">13 Anos</option>      <option value="14">14 Anos</option>      <option value="15">15 Anos</option>      <option value="16">16 Anos</option>      <option value="17">17 Anos</option>      <option value="18">18 Anos</option>      <option value="19">19 Anos</option>  
                  </select>
                  <span class="mauticform-errormsg" style="display:none;"></span>
                </div>


                <div id="mauticform_agro_cidade"
                  class="mauticform-row mauticform-text mauticform-field-1 mauticform-required pt-2" data-validate="cidade"
                  data-validation-type="text">
                  <label id="mauticform_label_agro_cidade" for="mauticform_input_agro_cidade"
                    class="mauticform-label">Cidade</label>

                    <input type="text" name="mauticform[cidade]" id="mauticform_input_agro_cidade"
                    class="mauticform-input input input-bordered w-full max-w-xs "
                    value="{{ ucfirst(request()->input('cidade')) }}">

                  <span class="mauticform-errormsg" style="display:none;">Isso é obrigatório.</span>
                </div>

                <div id="mauticform_agro_estado"
                  class="mauticform-row mauticform-text mauticform-field-1 mauticform-required pt-2" data-validate="estado"
                  data-validation-type="text">
                  <label id="mauticform_label_agro_estado" for="mauticform_input_agro_estado"
                    class="mauticform-label">Estado</label>

                    <input type="text" name="mauticform[state2]" id="mauticform_input_agro_state2"
                    class="mauticform-input input input-bordered w-full max-w-xs "
                  value="{{ ucfirst(request()->input('uf')) }}">

                  <span class="mauticform-errormsg" style="display:none;">Isso é obrigatório.</span>
                </div>
                
                

                <input type="hidden" name="mauticform[agent1]" id="mauticform_input_agro_agent1"
                  value="">
                <input type="hidden" name="mauticform[fbp]" id="mauticform_input_agro_fbp"
                  value="">
                <input type="hidden" name="mauticform[fbc1]" id="mauticform_input_agro_fbc1"
                  value="">



                <div id="mauticform_agro_submit" class="mauticform-row mauticform-button-wrapper mauticform-field-9 pt-8">
                  <button class="btn btn-default mauticform-button w-full" name="mauticform[submit]" value="1"
                    id="mauticform_input_agro_submit" type="submit">Enviar</button>
                </div>
              </div>
            </div><input type="hidden" name="mauticform[formId]" id="mauticform_agro_id" value="1">
            <input type="hidden" name="mauticform[return]" id="mauticform_agro_return" value="">
            <input type="hidden" name="mauticform[formName]" id="mauticform_agro_name" value="agro">

          </form>
        </div>

        <script>
          // Função para obter o cookie após 2 segundos
              setTimeout(function() {
                var urlParams = new URLSearchParams(window.location.search);
                var fbclidParam = urlParams.get('fbclid');
                var userAgent = navigator.userAgent;

                  var fbcCookie = document.cookie.replace(/(?:(?:^|.*;\s*)_fbc\s*\=\s*([^;]*).*$)|^.*$/, "$1");
                  var fbpCookie = document.cookie.replace(/(?:(?:^|.*;\s*)_fbp\s*\=\s*([^;]*).*$)|^.*$/, "$1");
                  var fbclid = fbpCookie + '.' + fbclidParam;

                  // Define os valores dos cookies nos campos de entrada
                  document.getElementById('mauticform_input_agro_fbc1').value = fbclid;
                  document.getElementById('mauticform_input_agro_fbp').value = fbpCookie;
                  document.getElementById('mauticform_input_agro_agent1').value = userAgent;

              }, 2000); // Espera 2 segundos (2000 milissegundos)
        </script>

      </div>
    </div>
  </div>
</div>