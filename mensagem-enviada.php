<?php require_once(CORE . "Contato/Config" . EXT); ?>
<div class="theme-page padding-bottom-66">
  <div class="clearfix">
    <div class="row page-margin-top">
      <div class="column column-1-1">
        <div class="row">
          <h2 class="box-header">Agendamento realizado com sucesso</h2>
          <p class="description align-center">Nós somos uma oficina de reparação de automóveis que atendem a clientes em Americana.<br>Todos os serviços de mecânica são realizados por mecânicos altamente qualificados.</p>
        </div>
      </div>
    </div>
    <div class="row page-margin-top">
      <form class="contact-form cost-calculator-container" id="contact-form" method="post" action="<?php echo URL; ?>core/Contato/Envio.php">
        <div class="row">
          <fieldset class="column column-1-3">
            <div class="cost-calculator-box clearfix">
              <label>Ano do Veiculo</label>
              <input type="hidden" name="Ano do Veiculo-label" value="Ano do Veiculo">
              <div class="cost-slider-container">
                <input id="Ano do Veiculo" class="cost-slider-input" name="Ano do Veiculo" type="number" value="2018">
                <div class="cost-slider" data-value="2018" data-step="1" data-min="1980" data-max="2018" data-input="Ano do Veiculo"></div>
              </div>
            </div>
          </fieldset>
          <fieldset class="column column-1-3">
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
          <fieldset class="column column-1-3">
            <div class="cost-calculator-box clearfix">
              <label>Modelo do carro</label>
              <input type="hidden" name="vehicle-mileage-label" value="Modelo do carro">
              <input id="vehicle-mileage" class="cost-slider-input big" name="vehicle-mileage" type="text" value="" placeholder="Ex. Corsa">
            </div>
            <div class="row page-margin-top">
            </div>
		</fieldset>
          <fieldset class="column column-1-3">
            <div class="cost-calculator-box clearfix">
              <label>Motorização do carro</label>
              <input type="hidden" name="vehicle-mileage-label" value="Motorização do carro">
              <input id="vehicle-mileage" class="cost-slider-input big" name="vehicle-mileage" type="text" value="" placeholder="Ex. 1.0 16v">
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
              <input type="hidden" name="Dia do agendamento-label" value="Dia do agendamento">
              <div class="datepicker-container">
                <span class="ui-icon template-arrow-dropdown"></span>
                <input id="Dia do agendamento" class="cost-slider-datepicker big" name="Dia do agendamento" value="" placeholder="Ex. Quinta-feira 15 dezembro 2016">
              </div>
            </div>
            <div class="cost-calculator-box page-margin-top clearfix">
              <label>Hora do agendamento</label>
              <input type="hidden" name="Hora do agendamento-label" value="Hora do agendamento">
              <select name="Hora do agendamento" id="time-frame" class="cost-dropdown">
                <option value="" selected="selected">Escolha...</option>
                <option value="08:00 - 09:00">08:00 - 09:00</option>
                <option value="09:00 - 10:00">09:00 - 10:00</option>
                <option value="10:00 - 11:30">10:00 - 11:30</option>
                <option value="   Fechado   ">   Fechado   </option>
                <option value="13:00 - 14:00">13:00 - 14:00</option>
                <option value="14:00 - 15:00">14:00 - 15:00</option>
                <option value="15:00 - 16:00">15:00 - 16:00</option>
                <option value="16:00 - 17:00">16:00 - 17:00</option>
                <option value="17:00 - 18:00">17:00 - 18:00</option>
              </select>
              <input type="hidden" class="Hora do agendamento" name="Hora do agendamento" value="">
            </div>
            <div class="cost-calculator-box page-margin-top clearfix">
              <label>Escolha o que precisa</label>
              <ul class="checkboxes-list margin-top-20">
                <li>
                  <input type="hidden" value="Higienização do ar" name="Higienização do ar-label">
                  <input type="checkbox" data-value="1" value="0" name="Higienização do ar" class="cost-slider-input type-checkbox" id="Higienização do ar">
                  <label for="Higienização do ar" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Higienização do ar</label>
                </li>
                <li>
                  <input type="hidden" value="Freios" name="Freios">
                  <input type="checkbox" data-value="1" value="0" name="Freios" class="cost-slider-input type-checkbox" id="Freios">
                  <label for="Freios" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Freios</label>
                </li>
                <li>
                  <input type="hidden" value="Reprogramação" name="Reprogramação">
                  <input type="checkbox" data-value="1" value="0" name="Reprogramação" class="cost-slider-input type-checkbox" id="Reprogramação">
                  <label for="Reprogramação" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Reprogramação</label>
                </li>
              </ul>
              <ul class="checkboxes-list top-border-none">
                <li>
                  <input type="hidden" value="Diagnostico" name="Diagnostico">
                  <input type="checkbox" data-value="1" value="0" name="Diagnostico" class="cost-slider-input type-checkbox" id="Diagnostico">
                  <label for="Diagnostico" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Diagnostico</label>
                </li>
                <li>
                  <input type="hidden" value="Troca de óleo" name="Troca de óleo">
                  <input type="checkbox" data-value="1" value="0" name="Troca de óleo" class="cost-slider-input type-checkbox" id="Troca de óleo">
                  <label for="Troca de óleo" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Troca de óleo</label>
                </li>
                <li>
                  <input type="hidden" value="Suspensão" name="Suspensão-label">
                  <input type="checkbox" data-value="1" value="0" name="Suspensão" class="cost-slider-input type-checkbox" id="Suspensão">
                  <label for="Suspensão" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Suspensão</label>
                </li>
              </ul>
              <ul class="checkboxes-list top-border-none">
                <li>
                  <input type="hidden" value="Revisão" name="Revisão-label">
                  <input type="checkbox" data-value="1" value="0" name="Revisão" class="cost-slider-input type-checkbox" id="Revisão">
                  <label for="Revisão" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Revisão</label>
                </li>
                <li>
                  <input type="hidden" value="Arrefecimento" name="Arrefecimento-label">
                  <input type="checkbox" data-value="1" value="0" name="Arrefecimento" class="cost-slider-input type-checkbox" id="Arrefecimento">
                  <label for="Arrefecimento" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Arrefecimento</label>
                </li>
                <li>
                  <input type="hidden" value="Alinhamento" name="Alinhamento">
                  <input type="checkbox" data-value="1" value="0" name="Alinhamento" class="cost-slider-input type-checkbox" id="Alinhamento">
                  <label for="Alinhamento" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Alinhamento</label>
                </li>
				</ul>
                <ul class="checkboxes-list top-border-none">
                <li>
                  <input type="hidden" value="Balanceamento" name="Balanceamento-label">
                  <input type="checkbox" data-value="1" value="0" name="Balanceamento" class="cost-slider-input type-checkbox" id="Balanceamento">
                  <label for="Balanceamento" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Balanceamento</label>
                </li>
                <li>
                  <input type="hidden" value="Outros" name="Outros-label">
                  <input type="checkbox" data-value="1" value="0" name="Outros" class="cost-slider-input type-checkbox" id="Outros">
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
            <a class="more margin-top-20 display-block submit-contact-form" href="#"><span>Enviar!</span></a>
          </fieldset>
        </div>
      </form>
    </div>
  </div>
</div>