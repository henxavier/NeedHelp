<?php require_once(CORE . "Contato/Config" . EXT); ?>
<div class="theme-page padding-bottom-66">
  <div class="clearfix">
    <div class="row page-margin-top">
      <div class="column column-1-1">
        <div class="row">
     
          <h2 class="box-header">Faça um agendamento</h2>
          <p class="description align-center">Adoramos o que fazemos; cuidar bem do seu carro. A CAR possui ferramentas de diagnóstico de injeção eletrônica de ultima geração e faz treinamento constate dos profissionais.<br>Todos os serviços de mecânica são realizados por mecânicos altamente qualificados.</p>
        </div>
      </div>
    </div>
    <div class="row page-margin-top">
      <form class="contact-form cost-calculator-container" id="contact-form" method="post" action="<?php echo URL; ?>core/Contato/Envio.php">
        <div class="row">
          <fieldset class="column column-1-2">
            <div class="cost-calculator-box clearfix">
              <label>Ano do Veiculo</label>
              <input type="hidden" name="ano-do-veiculo-label" value="Ano do Veiculo">
              <div class="cost-slider-container">
                <input id="Ano do Veiculo" class="cost-slider-input" name="ano-do-veiculo" type="number" value="2020">
                <div class="cost-slider" data-value="2020" data-step="1" data-min="1980" data-max="2030" data-input="Ano do Veiculo"></div>
              </div>
            </div>
          </fieldset>
          <fieldset class="column column-1-2">
            <div class="cost-calculator-box clearfix">
              <label>Montadora</label>
              <input type="hidden" name="vehicle-make-label" value="Montadora">
              <select name="vehicle-make" id="vehicle-make" class="cost-dropdown">
                <option value="" selected="selected">Escolha...</option>
                <option value="Audi">Audi</option>
                <option value="Bmw">Bmw</option>
                <option value="Chevrolet">Chevrolet</option>
                <option value="Chrysler">Chrysler</option>
                <option value="Citroën">Citroën</option>
                <option value="Dodge">Dodge</option>
                <option value="Fiat">Fiat</option>
                <option value="Ford">Ford</option>
                <option value="Honda">Honda</option>
                <option value="Hyunday">Hyunday</option>
                <option value="Jac">Jac</option>
                <option value="Mercedes-Benz">Mercedes-Benz</option>
                <option value="Mitsubishi">Mitsubishi</option>
                <option value="Nissan">Nissan</option>
                <option value="Peugeot">Peugeot</option>
                <option value="Renault">Renault</option>
                <option value="Toyota">Toyota</option>
                <option value="Volkswagem">Volkswagem</option>
                <option value="volvo">Volvo</option>
                <option value="Outros">Outros</option>
              </select>
              <input type="hidden" class="vehicle-make" name="vehicle-make-name" value="">
            </div>
          </fieldset>
        </div>
        <div class="row page-margin-top clearfix">
          <fieldset class="column column-1-3">
            <div class="cost-calculator-box clearfix">
              <label>Modelo do carro</label>
              <input type="hidden" name="model-car-label" value="Modelo do carro">
              <input id="vehicle-mileage" class="cost-slider-input big" name="model-car" type="text" value="" placeholder="Ex. Audi A3">
            </div>
            <div class="row page-margin-top">
            </div>
          </fieldset>
          <fieldset class="column column-1-3">
            <div class="cost-calculator-box clearfix">
              <label>Motorização do carro</label>
              <input type="hidden" name="motor-label" value="Motorização do carro">
              <input id="vehicle-mileage" class="cost-slider-input big" name="motor" type="text" value="" placeholder="Ex. 1.8 24v">
            </div>
          </fieldset>
          <fieldset class="column column-1-3">
            <div class="cost-calculator-box clearfix">
              <label>Quilometragem do carro</label>
              <input type="hidden" name="vehicle-mileage-label" value="Quilometragem do carro">
              <input id="vehicle-mileage" class="cost-slider-input big" name="vehicle-mileage" type="number" value="" placeholder="KM">
            </div>
          </fieldset>
        </div>
        <div class="row page-margin-top">
          <fieldset class="column column-1-2">
            <div class="cost-calculator-box clearfix">
              <label>Dia do agendamento</label>
              <input type="hidden" name="dia-do-agendamento-label" value="Dia do agendamento">
              <div class="datepicker-container">
                <span class="ui-icon template-arrow-dropdown"></span>
                <input id="Dia do agendamento" class="cost-slider-datepicker big" name="dia-do-agendamento" value="" placeholder="Ex. Quinta-feira 09 Julho 2020">
              </div>
            </div>
            <div class="cost-calculator-box page-margin-top clearfix">
              <label>Hora do agendamento</label>
              <input type="hidden" name="hora-do-agendamento-label" value="Hora do agendamento">
              <select name="hora-do-agendamento" id="time-frame" class="cost-dropdown">
                <option value="" selected="selected">Escolha...</option>
                <option value="Periodo da Manhã (8:00 - 11:30)">Periodo da Manhã (8:00 - 11:30)</option>
                <option value="Fechado (11:30 a 13:00)">Fechado (11:30 a 13:00)</option>
                <option value="Periodo da Tarde (13:00 - 17:30)">Periodo da Tarde (13:00 - 17:30)</option>                

              </select>
              <input type="hidden" class="time-frame" name="hora-do-agendamento-name" value="">
            </div>
            <div class="cost-calculator-box page-margin-top clearfix">
              <input type="hidden" value="Escolha o que precisa" name="escolha-o-que-precisa-label">
              <label>Escolha o que precisa</label>
              <ul class="checkboxes-list margin-top-20">
                <li>
                  <input type="hidden" value="Higienização do ar" name="higienizacao-do-ar-label">
                  <input type="checkbox" data-value="1" value="0" name="higienizacao-do-ar" class="cost-slider-input type-checkbox" id="Higienização do ar">
                  <label for="Higienização do ar" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Higienização do ar</label>
                </li>
                <li>
                  <input type="hidden" value="Freios" name="freios-label">
                  <input type="checkbox" data-value="1" value="0" name="freios" class="cost-slider-input type-checkbox" id="Freios">
                  <label for="Freios" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Freios</label>
                </li>
                <li>
                  <input type="hidden" value="Correia Dentada" name="correia detada-label">
                  <input type="checkbox" data-value="1" value="0" name="correia detada" class="cost-slider-input type-checkbox" id="Correia Dentada">
                  <label for="Correia Dentada" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Correia Dentada</label>
                </li>
              </ul>
              <ul class="checkboxes-list top-border-none">
                <li>
                  <input type="hidden" value="Diagnostico" name="diagnostico-label">
                  <input type="checkbox" data-value="1" value="0" name="diagnostico" class="cost-slider-input type-checkbox" id="Diagnostico">
                  <label for="Diagnostico" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Diagnóstico</label>
                </li>
                <li>
                  <input type="hidden" value="Troca de óleo" name="troca-de-oleo-label">
                  <input type="checkbox" data-value="1" value="0" name="troca-de-oleo" class="cost-slider-input type-checkbox" id="Troca de óleo">
                  <label for="Troca de óleo" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Troca de óleo</label>
                </li>
                <li>
                  <input type="hidden" value="Suspensão" name="suspensao-label">
                  <input type="checkbox" data-value="1" value="0" name="suspensao" class="cost-slider-input type-checkbox" id="Suspensão">
                  <label for="Suspensão" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Suspensão</label>
                </li>
              </ul>
              <ul class="checkboxes-list top-border-none">
                <li>
                  <input type="hidden" value="Revisão" name="revisao-label">
                  <input type="checkbox" data-value="1" value="0" name="revisao" class="cost-slider-input type-checkbox" id="Revisão">
                  <label for="Revisão" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Revisão</label>
                </li>
                <li>
                  <input type="hidden" value="Arrefecimento" name="arrefecimento-label">
                  <input type="checkbox" data-value="1" value="0" name="arrefecimento" class="cost-slider-input type-checkbox" id="Arrefecimento">
                  <label for="Arrefecimento" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Arrefecimento</label>
                </li>
                <li>
                  <input type="hidden" value="Alinhamento" name="alinhamento-label">
                  <input type="checkbox" data-value="1" value="0" name="alinhamento" class="cost-slider-input type-checkbox" id="Alinhamento">
                  <label for="Alinhamento" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Alinhamento</label>
                </li>
              </ul>
              <ul class="checkboxes-list top-border-none">
                <li>
                  <input type="hidden" value="Balanceamento" name="balanceamento-label">
                  <input type="checkbox" data-value="1" value="0" name="balanceamento" class="cost-slider-input type-checkbox" id="Balanceamento">
                  <label for="Balanceamento" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Balanceamento</label>
                </li>
                <li>
                  <input type="hidden" value="Motor" name="motor-label">
                  <input type="checkbox" data-value="1" value="0" name="motor" class="cost-slider-input type-checkbox" id="Motor">
                  <label for="Motor" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Motor</label>
                </li>
                <li>
                  <input type="hidden" value="Bateria" name="bateria-label">
                  <input type="checkbox" data-value="1" value="0" name="bateria" class="cost-slider-input type-checkbox" id="Bateria">
                  <label for="Bateria" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Bateria</label>
                </li>
                <li>
                  <input type="hidden" value="Cambio" name="cambio-label">
                  <input type="checkbox" data-value="1" value="0" name="cambio" class="cost-slider-input type-checkbox" id="cambio">
                  <label for="cambio" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Cambio</label>
                </li>
                <li>
                  <input type="hidden" value="luz acessa painel" name="luz acessa painel-label">
                  <input type="checkbox" data-value="1" value="0" name="luz acessa painel" class="cost-slider-input type-checkbox" id="luz acessa painel">
                  <label for="luz acessa painel" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Luz acessa painel</label>
                </li>
                <li>
                  <input type="hidden" value="Outros" name="outros-label">
                  <input type="checkbox" data-value="1" value="0" name="outros" class="cost-slider-input type-checkbox" id="Outros">
                  <label for="Outros" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Outros</label>
                </li>
              </ul>
            </div>
          </fieldset>
          <fieldset class="column column-1-2">
            <label>Detalhes do contato</label>
            <input class="text-input" name="name" type="text" value="<?php echo _def_name; ?>" placeholder="<?php echo _def_name; ?>">
            <input class="text-input" name="email" type="text" value="<?php echo _def_email; ?>" placeholder="<?php echo _def_email; ?>">
            <input class="text-input" name="phone" type="text" value="<?php echo _def_phone; ?>" placeholder="<?php echo _def_phone; ?>">
            <textarea class="margin-top-20" name="message_appointment" placeholder="<?php echo _def_message_appointment; ?>"><?php echo _def_message_appointment; ?></textarea>
            <input type="hidden" name="action" value="contact_form" />
            <input type="hidden" name="form_type" value="appointment">
                      
            <a class="more margin-top-20 display-block submit-contact-form" href=""><span>ENVIAR</span></a>
          </fieldset>
        </div>
      </form>
    </div>
  </div>
</div>